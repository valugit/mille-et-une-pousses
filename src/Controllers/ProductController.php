<?php
namespace Controllers;

use Models\Category;
use Models\Image;
use Models\Product;
use Services\Connexion;

class ProductController {

  public function listallAction() {

    $pdo = Connexion::getInstance();
    $products = Product::getAll($pdo);
    $categories = [];

    foreach ($products as $product) {
      $categories[$product["id"]] = Category::getById($pdo, $product["id"]);
    }

    $names = array_column($products, "name");
    array_multisort($names, SORT_ASC, $products);

    include "./products.php";
  }

  public function detailsAction($name) {

    $name = urldecode($name);
    $pdo = Connexion::getInstance();
    $product = Product::getProductByName($pdo, $name);
    $images = Image::getByName($pdo, $name);
    $otherProducts = Product::getOtherProducts($pdo, $name);
    shuffle($otherProducts);
    array_slice($otherProducts, 0, 4);

    include "./product.php";
  }
}
