<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/humoDAO.php';

class OrderController extends Controller {

  private $humoDAO;

  function __construct() {
    $this->humoDAO = new HumoDAO();
  }

  public function car() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        $_SESSION['info'] = 'Product is toegevoegt aan winkelmand';
        header('Location: index.php');
        exit();
      }
      if ($_POST['action'] == 'add_detail') {
        $this->_handleAdd();
        $_SESSION['info'] = 'Product is toegevoegt aan winkelmand';
        header('Location: index.php?page=details&id='. $_POST['id'] .'&details_id='. $_POST['details_id']);
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
      header('Location: index.php?page=car');
      exit();
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      $_SESSION['info'] = 'Product is verwijdert';
      header('Location: index.php?page=car');
      exit();
    }
    $this->set('title', 'winkelmand');
  }

  private function _handleAdd() {
    if (empty($_SESSION['cart'][$_POST['details_id']])) {
      $product = $this->humoDAO->selectById($_POST['details_id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['cart'][$_POST['details_id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['cart'][$_POST['details_id']]['quantity']++;
  }

  private function _handleRemove() {
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $productId => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$productId]);
      }
    }
  }

  public function begin() {

    $this->set('title', 'begin');
  }

  public function bestellen() {

    $this->set('title', 'bestellen');
  }

  public function betalen() {

    $this->set('title', 'betalen');
  }
}
