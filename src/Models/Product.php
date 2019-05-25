<?php
namespace Models;

class Product {

  public static function getAll($pdo) {
    $sql = "SELECT products.id, products.name, products.price, product_images.path, product_images.alt
            FROM products
            LEFT JOIN product_images ON products.id = product_images.product_id WHERE product_images.sort_order = 1";

    $q = $pdo->prepare($sql);
    $q->execute();
    return $q->fetchAll();
  }

  public static function getProductById($pdo, $id) {
    $sql = "SELECT name, price, description, maintenance FROM products WHERE id = :id";

    $q = $pdo->prepare($sql);
    $q->bindParam("id", $id);
    $q->execute();
    return $q->fetch();
  }
}
