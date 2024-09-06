<?php
session_start();
define('BASE_PATH', '../');
require_once BASE_PATH . 'lib/connection.php';
require_once BASE_PATH . 'lib/config.php';
require_once BASE_PATH . 'lib/helper.php';

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $controller = strtolower($url[0]);
    $action = isset($url[1]) ? $url[1] : 'home';
    $params = array_slice($url, 2);
} else {
    $controller = 'home';
    $action = 'home';
}
require_once USER_PATH  . "routes.php";
