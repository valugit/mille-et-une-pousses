<?php
namespace Models;

class Category {

  public static function getById($pdo, $id) {
    $sql = "SELECT name FROM categories LEFT JOIN product_category ON categories.id = product_category.category_id WHERE product_id = :id";

    $q = $pdo->prepare($sql);
    $q->bindParam("id", $id);
    $q->execute();
    return $q->fetchAll();
  }
}
