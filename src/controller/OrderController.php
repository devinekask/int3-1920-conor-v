<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/humoDAO.php';

class HumoController extends Controller {

  private $humoDAO;

  function __construct() {
    $this->humoDAO = new HumoDAO();
  }
  
  public function car() {

  $this->set('title', 'car');
  }
}
