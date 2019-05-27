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

  public function profileAction() {
    $userId = $_SESSION["connected"];
    $pdo = Connection::getInstance();
    $profile = User::getUserInfo($pdo, $userId);

    include "./account.php";
  }

  public function createnewAction() {
    $form["firstname"] = $_POST["firstname"];
    $form["lastname"] = $_POST["lastname"];
    $form["phone"] = $_POST["phone"];
    $form["address"] = $_POST["address"];
    $form["email"] = $_POST["email"];
    $form["password"] = $_POST["password"];
    $form["passwordConfirmation"] = $_POST["password_confirmation"];

    $pdo = Connection::getInstance();
    $createAccount = User::signup($pdo, $form);

    if ($createAccount == "Success") {
      $accountValidation = User::signin($pdo, $_POST["email"], $_POST["password"]);

      if (is_string($accountValidation)) {
        include "./connection.php";
      } elseif (is_array($accountValidation)) {
        $_SESSION["connected"] = $accountValidation["id"];

        header("Location: /");
        exit();
      }
    } else {
      include "./connection.php";
    }
  }

  public function cartAction() {

    include "./cart.php";
  }
}
