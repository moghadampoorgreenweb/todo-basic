<?php

session_start();
include 'config/baseConfig.php';
include 'database/mysql.php';
include 'libraries/view.php';

$path = isset($_GET['path']) ? $_GET['path'] : 'home/index';
list($controller, $method) = explode('/', $path);
$request = $_REQUEST;
$controller = './controller/' . $controller . '.php';
if(file_exists($controller)){
    include $controller;
    if (!function_exists($method)){
        die('Method Not Fount');
    }
    $method($request);
} else {
    die('Controller Not Fount');
}