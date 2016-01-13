<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		$data = array(
			'posts'=> $posts
		);
		return View::make('posts.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		//inputs fail validation
		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else 
		{	
			$post = new Post();
			$post->title = Input::get('title');
			$post->description = Input::get('description');
			$post->user_id = Input::get('user_id');

			$result = $post->save(); 

			if($result) {
				Session::flash('successMessage', 'Your post was saved!');
				return Redirect::action('PostsController@show', $post->id);
			}else {
				return Redirect::back()->withInput();
			}
			
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post){
			Session::flash('errorMessage', 'This post does not exist');
			return Redirect::action('PostsController@index');
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post);
	}

	protected function validateAndSave($post)
	{
		//create the validator
		$validator = Validator::make(Input::all(), Post::$rules);

		//attempt validation
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post->title = Input::get('title');
			$post->description = Input::get('description');

			$post->user_id = 1;

			$result = $post->save();

			if($result){
				Session::flash('successMessage', 'Your post was saved');
				return Redirect::action('PostsController@show', $post->id);	
			} else {
				return Redirect::back()->withInput();
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Session::flash('successMessage', 'Your post was deleted');
		return Redirect::action('PostsController@index');
	}
	



}
