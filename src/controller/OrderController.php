<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/humoDAO.php';
require_once __DIR__ . '/../dao/orderDAO.php';

class OrderController extends Controller {

  private $humoDAO;
  private $orderDAO;

  function __construct() {
    $this->humoDAO = new HumoDAO();
    $this->orderDAO = new OrderDAO();
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

      if ($_POST['action'] == 'form') {
        $this->_handleform();
        header('Location: index.php?page=begin');
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

  /* TOTAAL TOEVOEGEN AAN SESSIE
  private function _handleform() {
    if (isset($_SESSION['cart'])) {
      $total = $_POST['betalen'];
      if (empty($total)) {
        return;
      }
      $_SESSION['cart'][] = $total;
    }
    $_SESSION['cart'];
  }
  */

  public function begin() {

    $this->set('title', 'begin');
  }

  public function bestellen() {

    $this->set('title', 'bestellen');
  }

  public function betalen() {

    $this->set('title', 'betalen');
  }

  public function bevestiging() {
    $desired_length = 10;
    $unique = uniqid();
    $trackingcode = substr($unique, 0, $desired_length);

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'bevestiging') {
        session_destroy();
        header('Location: index.php');
        exit();
      }
    }

    $this->set('trackingcode', $trackingcode);
    $this->set('title', 'bevestiging');
  }
}
