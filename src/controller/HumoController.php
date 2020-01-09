<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HumoDAO.php';

class HumoController extends Controller {

  private $humoDAO;

  function __construct() {
    $this->humoDAO = new HumoDAO();
  }

  public function index() {
    $items = $this->humoDAO->selectAll();
    $this->set('items', $items);
    $this->set('title', 'Humo shop');
  }

}
