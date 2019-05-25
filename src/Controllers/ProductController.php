<?php
namespace Controllers;

use Models\Category;
use Models\Product;
use Services\Connexion;

class ProductController {

  public function listallAction() {

    $pdo = Connexion::getInstance();
    $products = Product::getAll($pdo);

    $categories = [];
    foreach ($products as $product) {
      $categories[$product['id']] = Category::getById($pdo, $product['id']);
    }

    include "./products.php";
  }

  public function detailsAction($name) {

    $pdo = Connexion::getInstance();
    $product = Product::getProductByName($pdo, $name);

    include "./product.php";
  }
}
