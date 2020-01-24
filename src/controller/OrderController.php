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

      if ($_POST['action'] == 'begin') {
        $data = array(
          'naam' => '',
          'email' => '',
          'straat' => '',
          'gemeente' => '',
          'postcode' => 0,
          'methode' => '',
          'trackingcode' => '',
          'totaal' => $_POST['betalen']
        );

        $insertbegin = $this->orderDAO->insertBegin($data);
      }

      if (!empty($insertbegin)){
        header("Location: index.php?page=begin");
        exit();
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
    $info = $this->orderDAO->selectLastId();

    if (!empty($_POST['action'])){
      if ($_POST['action'] == 'adresinfo') {
        $naam = $_POST['voornaam'] . ' ' . $_POST['achternaam'];
        $email = $_POST['email'];
        $updateInfo = $this->orderDAO->updateAlgemeen($naam, $email);
      }

      if (!empty($updateInfo)){
        header("Location: index.php?page=bestellen");
        exit();
      }
    }

    $this->set('verzendkosten', 1.95);
    $this->set('info', $info);
    $this->set('title', 'begin');
  }

  public function bestellen() {
    $info = $this->orderDAO->selectLastId();

    if (!empty($_POST['action'])){
      if ($_POST['action'] == 'betalen') {
        if (empty($_POST['facstraat'])) {
          $_POST['facstraat'] = $_POST['straat'];
        }
        if (empty($_POST['facnummer'])) {
          $_POST['facnummer'] = $_POST['nummer'];
        }
        if (empty($_POST['facgemeente'])) {
          $_POST['facgemeente'] = $_POST['gemeente'];
        }
        if (empty($_POST['facpostcode'])) {
          $_POST['facpostcode'] = $_POST['postcode'];
        }
        $data = array(
          'straat' => $_POST['straat'] . ' ' . $_POST['nummer'],
          'gemeente' => $_POST['gemeente'],
          'postcode' => $_POST['postcode'],
          'facstraat' => $_POST['facstraat'] . ' ' . $_POST['facnummer'],
          'facgemeente' => $_POST['facgemeente'],
          'facpostcode' => $_POST['facpostcode']
        );

        $insertadres = $this->orderDAO->updateAdres($data);
      }

      if (!empty($insertadres)){
        header("Location: index.php?page=betalen");
        exit();
      }
    }

    $this->set('verzendkosten', 1.95);
    $this->set('info', $info);
    $this->set('title', 'bestellen');
  }

  public function betalen() {
    $info = $this->orderDAO->selectLastId();

    if (!empty($_POST['action'])){
      if ($_POST['action'] == 'bevestiging') {
        $methode = $_POST['methode'];
        $insertmethode = $this->orderDAO->updateMethode($methode);
      }

      if (!empty($insertmethode)){
        header("Location: index.php?page=bevestiging");
        exit();
      }
    }

    $this->set('verzendkosten', 1.95);
    $this->set('info', $info);
    $this->set('title', 'betalen');
  }

  public function bevestiging() {
    $info = $this->orderDAO->selectLastId();

    $desired_length = 10;
    $unique = uniqid();
    $trackingcode = substr($unique, 0, $desired_length);

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'bevestiging') {

        $inserttrackingcode = $this->orderDAO->updateCode($trackingcode);

        foreach($_SESSION['cart'] as $item) {
          $titel = $item['product']['naam'];
          $hoeveelheid = $item['quantity'];
          $type = $item['product']['optie'];
          $prod_id = $item['product']['product_id'];
          $order_id = $info['aankoop_id'];

          $inserproductitems = $this->orderDAO->insertitems($titel, $hoeveelheid, $type, $prod_id, $order_id);
        }

        session_destroy();
        $_SESSION['info'] = 'Danku voor u aankoop';
        header('Location: index.php');
        exit();
      }
    }

    $this->set('info', $info);
    $this->set('trackingcode', $trackingcode);
    $this->set('title', 'bevestiging');
  }
}
