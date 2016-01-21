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
Route::get('/', 'PostsController@index');

// Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "") {
//         return Redirect::to('/');
//     } else {
//         $data = array('name' => $name);
//         return View::make('my-first-view')->with($data);
//     }
// });

Route::get('/posts', 'PostsController@index');

Route::resource('/posts', 'PostsController');

Route::get('/create', 'PostsController@create');

Route::get('/session/{value}', function($value){
	Session::put('some-key', $value);

	if(Session::has('some-key')){
		echo Session::get('some-key');
	}
});

Route::get('/session', function(){
	return Session::all();
});

Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@getLogout');
// Route::get('/orm-test', function(){
// 	$post = Post::find(2);
// 	dd($post);


// });




