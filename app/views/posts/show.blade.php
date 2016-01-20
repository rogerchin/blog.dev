@extends('layouts.master')
@yield('top-script')
@section('content')

<div class="container">
	<div class="list-inline">
		<li>
			<a class="btn btn-primary" href="{{{action('PostsController@edit', $post->id) }}}">Edit Post</a>
		</li>
		<li>
			{{ Form::open(array('action'=>array('PostsController@destroy', $post->id), 'method'=> 'DELETE'))}}
			<button class="btn btn-danger">Delete</button>
			{{ Form::close()}}
		</li>
		<li>	
			<a class="btn btn-info" href="{{{action('PostsController@index')}}}">Back to Posts</a>
		</li>	
	</div>	
	<table class="table table-responsive">
		<tr><h1>{{{$post->title}}}</h1><h4>By: {{{$post->user->username}}}</tr>
		<br>
		<p class="post-meta"><small>Post created at: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</small></p>
		<tr>{{{$post->description}}}</tr><br>
		<br>
	</table>
</div>

@stop