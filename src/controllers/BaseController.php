<?php

namespace Controllers;

abstract class BaseController {
  
  protected $conn;

  public function __construct($conn){
    $this->conn = $conn;
  }

}