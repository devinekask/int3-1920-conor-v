<?php

require_once( __DIR__ . '/DAO.php');

class HumoDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `producten`
    INNER JOIN `product_details` ON  `producten`.`id` = `product_details`.`product_id`
    WHERE `default_staat` = 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `producten`
    INNER JOIN `categories` ON `producten`.`category_id` = `categories`.`cat_id`
    INNER JOIN `product_details` ON  `producten`.`id` = `product_details`.`product_id`
    WHERE `details_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByOptions($id) {
    $sql="SELECT * FROM `producten`
    INNER JOIN `categories` ON `producten`.`category_id` = `categories`.`cat_id`
    INNER JOIN `product_details` ON  `producten`.`id` = `product_details`.`product_id`
    WHERE `id` = :id";
     $stmt = $this->pdo->prepare($sql);
     $stmt->bindValue(':id', $id);
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectPromo(){
    $sql = "SELECT * FROM `producten`
    INNER JOIN `categories` ON `producten`.`category_id` = `categories`.`cat_id`
    INNER JOIN `product_details` ON  `producten`.`id` = `product_details`.`product_id`
    WHERE `default_staat` = 1 AND `product_id` = 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectRand(){
    $sql = "SELECT * FROM `producten`
    INNER JOIN `product_details` ON  `producten`.`id` = `product_details`.`product_id`
    WHERE `default_staat` = 1
    ORDER BY RAND() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function search($category){
    $sql = "SELECT * FROM `producten`
    INNER JOIN `categories` ON `producten`.`category_id` = `categories`.`cat_id`
    INNER JOIN `product_details` ON  `producten`.`id` = `product_details`.`product_id`
    WHERE `default_staat` = 1 AND `categories`.`category` = :category";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category',$category);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllCategories(){
    $sql = "SELECT `category` FROM `categories`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
