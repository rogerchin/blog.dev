@extends('layouts.master')
@yield('top-script')
@section('content')

<div class="container">
	<div class="list-inline">
		<a class="btn btn-danger" href="{{{action('PostsController@edit', $post->id) }}}">Edit Post</a>
		{{ Form::open(array('action'=>array('PostsController@destroy', $post->id), 'method'=> 'DELETE'))}}
		<button class="btn btn-danger">Delete</button>
		{{ Form::close()}}
		<a class="btn btn-danger" href="{{{action('PostsController@index')}}}">Back to Posts</a>
	</div>	
	<table class="table table-responsive">
		<tr><h1>{{{$post->title}}}</h1><h4>By: {{{$post->username}}}</tr>
		<br>
		<p class="post-meta">Post created at: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
		<tr>{{{$post->description}}}</tr><br>
		<br>
	</table>
</div>

@stop