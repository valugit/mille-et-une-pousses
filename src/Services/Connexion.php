<?php
namespace Services;

class Connexion {

  private static $_instance = null;

  public function __construct() {

  }

  public static function getInstance() {
    if (is_null(self::$_instance)) {
      $config = require_once realpath(dirname(__FILE__)) . "/../../config/dbconfig.php";
      self::$_instance = new \PDO($config['host'],
        $config['user'],
        $config['password']);
    }

    return self::$_instance;
  }
}
