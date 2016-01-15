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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return "This is my resume";
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function sayHello()
	{
		if ($name == "Chris") {
        	return Redirect::to('/');
    	} else {
        	$data = array('name' => $name);
        	return View::make('my-first-view')->with($data);
    	}
	}

	public function getLogin()
	{	
		return View::make('posts.login');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email'=> $email, 'password' => $password))){
			return Redirect::intended('/posts');
		} else {
			//login failed
			// Session::flash('Login Failed!')
			return Redirect::back();
		}	
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
}
