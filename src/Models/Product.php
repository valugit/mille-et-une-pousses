<?php
namespace Models;

class Product {

  const TABLE_NAME = "products";

  public static function getAll($pdo) {
    $sql = "SELECT products.id, products.name, products.price, categories.name AS 'categories', product_images.path, product_images.alt
            FROM products
            LEFT JOIN product_category ON products.id = product_category.product_id
            LEFT JOIN categories ON product_category.category_id = categories.id
            LEFT JOIN product_images ON products.id = product_images.product_id WHERE product_images.sort_order = 1";

    $q = $pdo->prepare($sql);
    $all = $q->execute();
    return $q->fetchAll();
  }
}
