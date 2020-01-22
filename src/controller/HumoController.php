<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/humoDAO.php';

class HumoController extends Controller {

  private $humoDAO;

  function __construct() {
    $this->humoDAO = new HumoDAO();
  }

  public function index() {
    $promo = $this->humoDAO->selectPromo();
    $items = $this->humoDAO->selectAll();

    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $items = $this->humoDAO->search($_GET['cat']);
    }
    if (!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['cat'] == 'alles') {
      $items = $this->humoDAO->selectAll();
    }

    $this->set('items', $items);
    $this->set('promo', $promo);
    $this->set('title', 'Humo shop');
    $this->set('categories', $categories = $this->humoDAO->selectAllCategories());

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($items);
      exit();
    }
  }

  public function details() {
    if (!empty($_GET['id'])) {
      $item = $this->humoDAO->selectById($_GET['details_id']);
      $options = $this->humoDAO->selectByOptions($_GET['id']);
      $rands = $this->humoDAO->selectRand();
    }

    if (empty($item)){
      $_SESSION['error'] = 'Dit product bestaat niet!!!';
      header('location: index.php?');
      exit();
    }

    $this->set('options', $options);
    $this->set('rands', $rands);
    $this->set('item', $item);
    $this->set('title', 'details');
  }
}
