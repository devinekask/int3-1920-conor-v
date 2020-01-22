<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {

  public function selectById($id){
    $sql = "SELECT * FROM `aankopen`
    WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function updateAlgemeen($naam, $email){
    $sql = "UPDATE `aankopen` SET
    `naam`= :naam,
    `email`= :email
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':naam', $naam);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
  }

  public function updateAdres($straat, $gemeente, $postcode){
    $sql = "UPDATE `aankopen` SET
    `straat`= :straat,
    `gemeente`= :gemeente,
    `postcode`= :postcode
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':straat', $straat);
    $stmt->bindValue(':gemeente', $gemeente);
    $stmt->bindValue(':postcode', $postcode);
    $stmt->execute();
  }

  public function updateCode($trackingcode){
    $sql = "UPDATE `aankopen` SET
    `trackingcode`= UPPER(:trackingcode)
    ORDER BY aankoop_id DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':trackingcode', $trackingcode);
    $stmt->execute();
  }

  public function insert($data) {
    $sql = "INSERT INTO `aankopen` (`naam`, `email`, `straat`, `gemeente`, `postcode`, `trackingcode`, `totaal`)
    VALUES (:naam, :email, :straat, :gemeente, :postcode, :trackingcode, :totaal)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':naam', $data['naam']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':straat', $data['straat']);
    $stmt->bindValue(':gemeente', $data['gemeente']);
    $stmt->bindValue(':postcode', $data['postcode']);
    $stmt->bindValue(':trackingcode', $data['trackingcode']);
    $stmt->bindValue(':totaal', $data['totaal']);
    if ($stmt->execute()) {
      return $this->selectById($this->pdo->lastInsertId());
    }
  }
}
