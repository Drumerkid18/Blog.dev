<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'Hello Codeup!';
	// return View::make('hello');
});

Route::get('parks', function(){
	return 'Here are some national parks.';
});

Route::post('parks', function(){
	return 'which will you see???';
});

Route::get('say-hello/{name}', function($name){
	return "Hello $name!";
});

Route::get('say-hello/{name}/{age}', function($name, $age){
	return "Hello $name! i hear you are $age years old";
});

Route::get('resume', function(){
	return "This is my resume";
});

Route::get('portfolio', function(){
	return "This is my portfolio";
});

Route::get('roledice/{guess}', function($name){

	$randomNum = rand(1 , 6);
	$data = [
		'randomNum' => $randomNum,
		'guess' => $name
	];


	return View::Make('role-dice', $data);
});


