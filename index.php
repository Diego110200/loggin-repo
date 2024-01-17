<?php
require_once 'controllers/UserController.php';

// Iniciar la sesión
session_start();

// Enrutamiento básico
$request = $_SERVER['REQUEST_URI'];
if ($request === '/' || $request === '/index.php') {
    $userController = new UserController();
    $userController->index();
} elseif ($request === '/register') {
    $userController = new UserController();
    $userController->register();
} else {
    header('HTTP/1.0 404 Not Found');
    echo 'Página no encontrada';
}
?>