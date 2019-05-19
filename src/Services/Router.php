<?php
namespace Services;

class Router {

  public static function load($controller_name, $action_name) {

    $class_name = "\Controllers\\" . ucfirst($controller_name) . "Controller";

    if (!class_exists($class_name)) {
      throw new Exception\ControllerNotFound("Le controller " . $controller_name . " est introuvable");
    }

    $controller = new $class_name();

    $action = strtolower($action_name) . "Action";

    if (!method_exists($controller, $action)) {
      throw new Exception\ActionNotFound("L'action " . $action_name . " est introuvable dans le controller " . $controller_name);
    }

    return [$controller, $action];
  }
}
