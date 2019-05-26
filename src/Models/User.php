<?php
namespace Models;

class User {

  public static function signin($pdo, $email, $password) {
    $sql = "SELECT password FROM users WHERE email = :email";

    $q = $pdo->prepare($sql);
    $q->bindParam("email", $email);
    $q->execute();
    $hash = $q->fetch();

    if ($hash != false) {
      $check = password_verify($password, $hash["password"]);

      if ($check == $hash) {
        $sql = "SELECT id FROM users WHERE email = :email";

        $q = $pdo->prepare($sql);
        $q->bindParam("email", $email);
        $q->execute();
        return $q->fetch();

      } else {
        $message = "Le mot de passe est invalide";
      }
    } else {
      $message = "L'adresse mail est invalide.";
    }

    return $message;
  }
}
