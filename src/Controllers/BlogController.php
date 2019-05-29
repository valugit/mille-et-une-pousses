<?php
namespace Controllers;

class BlogController {

  public function listallAction() {

    include "./blog.php";
  }

  public function detailsAction() {

    include "./article.php";
  }
}
