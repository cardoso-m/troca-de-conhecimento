<?php
$controller = $_GET['controller'] ?? 'usuario';
$action = $_GET['action'] ?? 'index';

require_once "controllers/" . ucfirst($controller) . "Controller.php";

$controllerName = ucfirst($controller) . "Controller";
$controllerInstance = new $controllerName();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controllerInstance->$action($_POST);
} else {
    $id = $_GET['id'] ?? null;
    $controllerInstance->$action($id);
}
