<?php

spl_autoload_register(function($class){
  $elements = explode("\\", $class);
  $path = implode("/", $elements).".php";

  require_once(realpath(__DIR__)."/".$path);
});