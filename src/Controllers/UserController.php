<?php
namespace Controllers;

use Models\User;
use Services\Connexion;

class UserController {

  public function identificationAction() {
    include "./connexion.php";
  }

  public function verificationAction() {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $pdo = Connexion::getInstance();
    $validation = User::signin();
  }

}
