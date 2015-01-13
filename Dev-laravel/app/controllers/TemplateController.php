<?php

class TemplateController extends \BaseController {

	public function home(){
		return View::make('homepage');
	}

	public function login(){
		return View::make('user.login');
	}
}