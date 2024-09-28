<?php 

require_once '../app/controllers/PersonController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo 'Página inicial';
        break;
    case '/pessoa':
        PersonController::index();
        break;
    case '/pessoa/form':
        PersonController::form();
        break;
    default:
        echo 'Error 404';
        break;
}