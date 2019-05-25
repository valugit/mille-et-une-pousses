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

  public static function getProductByName($pdo, $name) {
    $sql = "SELECT products.id, products.price, products.description, products.maintenance, product_images.path, product_images.alt
            FROM products
            LEFT JOIN product_images ON product_images.product_id = products.id
            WHERE name = :name AND product_images.sort_order = 1";

    $q = $pdo->prepare($sql);
    $q->bindParam("name", $name);
    $q->execute();
    return $q->fetch();
  }
}
