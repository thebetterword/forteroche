<?php

namespace Controller;

class HomeController extends Controller{
	public static function home() {
		self::render('index.html.twig');
	}
}