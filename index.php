<?php 

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/autoload.php'; 

use Controller\HomeController;

$path = $_SERVER['REQUEST_URI'];
if($path=="/"){
	HomeController::home();
} 
else if($path=="/lea"){
	echo "Je m'appelle Léa";
} else {
	echo "page 404";
}