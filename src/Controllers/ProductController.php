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

  public function productAction($id) {

    $pdo = Connexion::getInstance();
    $product = Product::getProductById($pdo, $id);

    include "./product.php";
  }
}
