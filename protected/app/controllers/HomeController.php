<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		return View::make('home.home');
	}

	public function about()
	{
		return View::make('home.about');
	}

	public function news()
	{
		return View::make('home.news');
	}

	public function contact()
	{
		return View::make('home.contact');
	}

	public function grafik(){
		return View::make('home.grafik');
	}

}
