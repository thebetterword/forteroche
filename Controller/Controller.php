<?php

namespace Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller{
	protected static function render(string $path, array $args=[]){
		// pas besoin de singleton, cette méthode ne sera appeler qu'une seule fois
		$loader = new FilesystemLoader(__DIR__.'/../views');
		$twig = new Environment($loader, []);
		echo $twig->render($path, $args);
	}
}