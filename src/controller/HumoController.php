<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/humoDAO.php';

class HumoController extends Controller {

  private $humoDAO;

  function __construct() {
    $this->humoDAO = new HumoDAO();
  }

  public function index() {
    $items = $this->humoDAO->selectAll();

    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $items = $this->humoDAO->search($_GET['cat']);
    }
    if (!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['cat'] == 'alles') {
      $items = $this->humoDAO->selectAll();
    }

    $this->set('items', $items);
    $this->set('title', 'Humo shop');
    $this->set('categories', $categories = $this->humoDAO->selectAllCategories());

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($items);
      exit();
    }
  }

  public function details() {
    //checkt of er een id is
    if (!empty($_GET['id'])) {
      $item = $this->humoDAO->selectById($_GET['id']);
      $rands = $this->humoDAO->selectRand();
    }

    //geen geldig id dan reroute naar home
    if (empty($item)){
      $_SESSION['error'] = 'Dit product bestaat niet!!!';
      header('location: index.php?');
      exit();
    }

    $this->set('rands', $rands);
    $this->set('item', $item);
    $this->set('title', 'details');
  }

}
