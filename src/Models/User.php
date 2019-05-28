<?php
namespace Models;

class User {

  public static function signin($pdo, $email, $password) {
    $sql = "SELECT password FROM users WHERE email = :email";

    $q = $pdo->prepare($sql);
    $q->bindParam(":email", $email);
    $q->execute();
    $hash = $q->fetch();

    if ($hash != false) {
      $check = password_verify($password, $hash["password"]);

      if ($check == $hash) {
        $sql = "SELECT id FROM users WHERE email = :email";

        $q = $pdo->prepare($sql);
        $q->bindParam(":email", $email);
        $q->execute();
        return $q->fetch();

      } else {
        $message = "L'adresse mail ou le mot de passe est invalide.";
      }
    } else {
      $message = "L'adresse mail ou le mot de passe est invalide.";
    }

    return $message;
  }

  public static function signup($pdo, $form) {

    if (ctype_alpha($form["firstname"]) && ctype_alpha($form["firstname"])) {

      if ($form["phone"] == "" || $form["phone"] == null || (is_numeric($form["phone"]) && strlen($form["phone"]) == 10)) {

        if ($form["phone"] == "" || $form["phone"] == null) {
          $form["phone"] == null;
        }

        if ($form["address"] == "" || $form["address"] == null || preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $form["address"])) {

          if ($form["address"] == "" || $form["address"] == null) {
            $form["address"] = null;
          }

          if (filter_var($form["email"], FILTER_VALIDATE_EMAIL)) {

            $searchEmail = "SELECT * FROM users WHERE email = :email";
            $verifyEmail = $pdo->prepare($searchEmail);
            $verifyEmail->bindParam(":email", $form["email"]);
            $verifyEmail->execute();
            $result = $verifyEmail->fetch();

            if ($result != null) {

              $message = "Ce compte existe déjà.";
              return $message;

            } elseif (strlen($form["password"]) > 7 && strlen($form["password"]) < 19 && $form["password"] == $form["passwordConfirmation"]) {
              $sql = "INSERT INTO users (id, firstname, lastname, email, password, phone, first_address_id, second_address_id, role_id)
                      VALUES (NULL, :firstname, :lastname, :email, :password, NULL, NULL, NULL, '2')";

              $hash = password_hash($form["password"], PASSWORD_DEFAULT);

              $q = $pdo->prepare($sql);
              $q->bindParam(":firstname", $form["firstname"]);
              $q->bindParam(":lastname", $form["lastname"]);
              $q->bindParam(":email", $form["email"]);
              $q->bindParam(":password", $hash);
              $q->execute();

              return "Success";
            }
          }
        }
      }
    }

    $message = "Les informations que vous avez entrées sont invalides";
    return $message;
  }

  public static function getUserInfo($pdo, $id) {
    $sql = "SELECT firstname, lastname, email, role_id FROM users WHERE id = :id";

    $q = $pdo->prepare($sql);
    $q->bindParam(":id", $id);
    $q->execute();
    return $q->fetch();
  }
}
