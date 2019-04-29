<?php

namespace Services;

class DBConnect{
  
  private $conn = null;

  //mysql:dbname=testdb;host=127.0.0.1'
  function __construct($dsn, $user, $password){
    $this->conn = new \PDO($dsn, $user, $password);
  }

  public function getConnexion(){
    return $this->conn;
  }


}