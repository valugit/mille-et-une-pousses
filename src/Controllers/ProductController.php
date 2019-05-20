<?php
namespace Controllers;

use Models\Product;
use Services\Connexion;

class ProductController {

  public function listallAction() {

    $pdo = Connexion::getInstance();
    $products = Product::getAll($pdo);

    include "./products.php";
  }
}
