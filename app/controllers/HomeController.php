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

	public function resume()
	{
		return View::make('resume');
	}

	public function portfolio()
	{
		return View::make('portfolio');
	}

	public function playGame()
	{
		return View::make('whackamole');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', "You've Logged in! Welcome to the blog!");
    		return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Failed to log in!');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have been successfully logged out!');
		return Redirect::action('PostsController@index');
	}

}
