<?php
require_once("../src/autoload.php");

session_start();

$controller_query = $_GET["controller"] ?? "index";
$action = $_GET["action"] ?? "home";

$controllerName = "\controllers\\".ucfirst($controller_query)."Controller";

$config = json_decode(file_get_contents("../conf/config.json"), true);
$db = new \Services\DBConnect(
              $config["database"]["dsn"],
              $config["database"]["user"],
              $config["database"]["password"]
            );
$conn = $db->getConnexion();

$controller = new $controllerName($conn);

$controller->$action();