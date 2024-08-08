<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require 'login.php';
        break;
    case '/register':
        require 'register.php';
        break;
    case '/menu':
        require 'menu.php';
        break;
    case '/archivos':
        require 'archivos.php';
        break;
    case '/ia':
        require 'ia.php';
        break;
    case '/vinculos':
        require 'vinculos.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(["message" => "Página no encontrada"]);
        break;
}
?>
