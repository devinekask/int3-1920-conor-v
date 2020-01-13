<?php

require_once( __DIR__ . '/DAO.php');

class HumoDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `producten`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
