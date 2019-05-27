<?php
namespace Controllers;

use Models\User;
use Services\Connection;

class UserController {

  public function identificationAction() {

    include "./connection.php";
  }

  public function verificationAction() {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $pdo = Connection::getInstance();
    $validation = User::signin($pdo, $email, $password);

    if (is_string($validation)) {
      include "./connection.php";
    } elseif (is_array($validation)) {
      $_SESSION["connected"] = $validation["id"];

      header("Location: /");
      exit();
    }
  }

  public function disconnectAction() {
    unset($_SESSION["connected"]);

    header("Location: /");
    exit();
  }

  public function cartAction() {

    include "./cart.php";
  }

  public function profileAction() {
    $userId = $_SESSION["connected"];
    $pdo = Connection::getInstance();
    $profile = User::getUserInfo($pdo, $userId);

    include "./account.php";
  }

  public function ordersAction() {

    include "./orders.php";
  }
}
