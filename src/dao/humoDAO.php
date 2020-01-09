<?php

require_once( __DIR__ . '/DAO.php');

class HumoDAO extends DAO {
  
  public function selectAll(){
    $sql = "SELECT * FROM `shop_items`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
