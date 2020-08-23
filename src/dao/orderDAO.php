<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {

  //SELECT

  public function selectById(){
    $sql = "SELECT MAX(aankoop_id) as max FROM `aankopen`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectLastId(){
    $sql = "SELECT * FROM `aankopen`
    ORDER BY `aankoop_id` DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

//UPDATE
  public function updateAlgemeen($naam, $email){
    $sql = "UPDATE `aankopen` SET
    `naam`= :naam,
    `email`= :email
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':naam', $naam);
    $stmt->bindValue(':email', $email);
    if ($stmt->execute()){
      return $this->selectLastId();
    };
  }

  public function updateAdres($data){
    $sql = "UPDATE `aankopen` SET
    `straat`= :straat,
    `gemeente`= :gemeente,
    `postcode`= :postcode,
    `facstraat` = :facstraat,
    `facgemeente`= :facgemeente,
    `facpostcode` = :facpostcode
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':straat', $data['straat']);
    $stmt->bindValue(':gemeente', $data['gemeente']);
    $stmt->bindValue(':postcode', $data['postcode']);
    $stmt->bindValue(':facstraat', $data['facstraat']);
    $stmt->bindValue(':facgemeente', $data['facgemeente']);
    $stmt->bindValue(':facpostcode', $data['facpostcode']);
    if ($stmt->execute()){
      return $this->selectLastId();
    };
  }

  public function updateMethode($methode){
    $sql = "UPDATE `aankopen` SET
    `methode`= :methode
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':methode', $methode);
    if ($stmt->execute()){
      return $this->selectLastId();
    };
  }

  public function updateCode($trackingcode){
    $sql = "UPDATE `aankopen` SET
    `trackingcode`= UPPER(:trackingcode)
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':trackingcode', $trackingcode);
    if ($stmt->execute()){
      return $this->selectLastId();
    };
  }

  //INSERT
  public function insertBegin($data) {
    $sql = "INSERT INTO `aankopen` (`naam`, `email`, `straat`, `gemeente`, `postcode`, `methode`,`trackingcode`, `totaal`)
    VALUES (:naam, :email, :straat, :gemeente, :postcode, :methode,:trackingcode, :totaal)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':naam', $data['naam']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':straat', $data['straat']);
    $stmt->bindValue(':gemeente', $data['gemeente']);
    $stmt->bindValue(':postcode', $data['postcode']);
    $stmt->bindValue(':methode', $data['methode']);
    $stmt->bindValue(':trackingcode', $data['trackingcode']);
    $stmt->bindValue(':totaal', $data['totaal']);
    if ($stmt->execute()) {
      return $this->selectById($this->pdo->lastInsertId());
    }
  }

  public function insertitems($titel, $hoeveelheid, $type, $prod_id, $order_id) {
    $sql = "INSERT INTO `product_order` (`titel`, `hoeveelheid`, `type`,`prod_id`, `order_id`)
    VALUES (:titel, :hoeveelheid, :type, :prod_id, :order_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':titel', $titel);
    $stmt->bindValue(':hoeveelheid', $hoeveelheid);
    $stmt->bindValue(':type', $type);
    $stmt->bindValue(':prod_id', $prod_id);
    $stmt->bindValue(':order_id', $order_id);
    if ($stmt->execute()) {
      return $this->selectById($this->pdo->lastInsertId());
    }
  }
}
