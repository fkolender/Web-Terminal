<?php
// router.php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/phpBlog/' :
    case '/phpBlog' :
        require __DIR__ . '/index.php';
        break;
    case '/phpBlog/login' :
        require __DIR__ . '/login.php';
        break;
    case '/phpBlog/logout' :
        require __DIR__ . '/logout.php';
        break;
    case '/phpBlog/signup' :
        require __DIR__ . '/signup.php';
        break;
    case '/phpBlog/test_connection' :
        require __DIR__ . '/test_connection.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
?>
