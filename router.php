<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/index.php';
        break;
    case '/login' :
        require __DIR__ . '/login.php';
        break;
    case '/logout' :
        require __DIR__ . '/logout.php';
        break;
    case '/signup' :
        require __DIR__ . '/signup.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
