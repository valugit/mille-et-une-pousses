<?php
require_once "../vendor/autoload.php";

$request_url = $_SERVER['REQUEST_URI'];

$path = parse_url($request_url, PHP_URL_PATH);
$query = parse_url($request_url, PHP_URL_QUERY);

$url_composants = explode("/", $path, 4);
if (isset($url_composants[3])) {
  $argument = $url_composants[3];
} else {
  $argument = null;
}

if (isset($url_composants[1])) {
  if (strlen($url_composants[1]) == 0) {
    $controller_name = "index";
  } else {
    $controller_name = $url_composants[1];
  }

} else {
  $controller_name = "index";
}
if (isset($url_composants[2])) {
  $action_name = $url_composants[2];
} else {
  $action_name = "index";
}

try {

  list($controller, $action) = Services\Router::load($controller_name, $action_name);

} catch (Services\Exception\ControllerNotFound $e) {
  $controller = new Controllers\ErrorController();
  $action = "e404";
  $argument = $e;

} catch (Services\Exception\ActionNotFound $e) {
  $controller = new Controllers\ErrorController();
  $action = "e404";
  $argument = $e;

} catch (Exception $e) {
  $controller = new Controllers\ErrorController();
  $action = "e500";
  $argument = $e;

}

chdir("../src/views/");
$result = $controller->$action($argument);

if (is_string($result)) {
  echo $result;
}
