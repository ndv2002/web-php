<?php
session_start();
define('BASE_PATH', '../');

// middleware
require_once BASE_PATH . 'middleware/auth.php';
require_once BASE_PATH . 'middleware/admin.php';

require_once BASE_PATH . 'lib/connection.php';
require_once BASE_PATH . 'lib/config.php';
require_once BASE_PATH . 'lib/helper.php';


if (isset($_GET['url'])) {
    // slice first character
    $url = $_GET['url'];
    $url = substr($_GET['url'], 1);
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $controller = strtolower($url[0]);
    $action = isset($url[1]) ? $url[1] : 'home';
    $params = array_slice($url, 2);
} else {
    $controller = 'dashboard';
    $action = 'home';
}



require_once ADMIN_PATH  . "routes.php";
