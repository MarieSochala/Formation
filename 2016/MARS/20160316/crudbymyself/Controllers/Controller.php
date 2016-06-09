<?php

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller {

	public function index(){
		return view('hello');
	}

	public function hello($name){
	return "hello" . $name;
	}

	public function test(){
		return view('test');
	}

}