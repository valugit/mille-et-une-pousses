<?php
namespace Models;

class Image {

  public static function getByName($pdo, $name) {
    $sql = "SELECT path, alt FROM `product_images` LEFT JOIN products ON products.id = product_images.product_id WHERE products.name = :name AND product_images.sort_order = 2";

    $q = $pdo->prepare($sql);
    $q->bindParam("name", $name);
    $q->execute();
    return $q->fetchAll();
  }
}
