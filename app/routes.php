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
Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "") {
        return Redirect::to('/');
    } else {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});

Route::resource('/posts', 'PostsController');

Route::get('/create', 'PostsController@create');

Route::get('orm-test', function(){
	$post1= new Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->description = 'LALALALALALALALALALALALALAL';
	$post1->save();

	$post2= new Post();
	$post2->title = 'I need to poop';
	$post2->description = 'Sitting here makes me want to poop';
	$post2->save();

	
	// return $posts;

	$post = Post::find(2);
	// $post->title = "New Title Goes Here.";
	// $post->save();
	// return $post;

	return $post->title;

	$post = Post::find(1);
	$post->delete();
	
});




