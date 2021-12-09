<?php
include 'functions.php';

// массив входных возможных данных
$routes = [ "/" => '/functions/homepage.php',
			"/home" => '/functions/homepage.php',
			"/homepage" => '/functions/homepage.php',
			"/about" => '/functions/about.php'];

// путь из адресной строки
$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)){
	include $routes[$route];
	exit;
} else {
	dd(404);
}
