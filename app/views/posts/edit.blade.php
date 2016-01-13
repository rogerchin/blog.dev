@extends('layouts.master')

@yield('top-script')

@section('content')

<div class="container">
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

		<div class="form-group {{($errors->has('title')) ? 'has-error' : '' }} ">
			{{$errors->first('title', '<div class="alert alert-danger">:message</div>')}}
		    {{Form::label('title', 'Title')}}
		    <br>
		    {{Form::text('title', null, ['class'=> 'form-control', 'placeholder'=> 'Enter your title', 'value' => $post->title])}}
		</div>

		<div class="form-group {{($errors->has('description')) ? 'has-error' : '' }}">
		    {{ $errors->first('description', '<div class="alert alert-danger" role="alert">:message</div>')}}
		    {{Form::label('description', 'Description')}}
		    {{Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter the description', 'value' => $post->description])}}
		</div>

		<div class="form-group">
			{{ $errors->first('User ID', '<span class="help-block">:message</span>') }}<br>
		    <label for="user_id">User ID:</label>
		    <input id="user_id" type="text" class="form-control" name="user_id" value="1">
		</div>	

		<button class="btn btn-primary">Submit</button>
	{{ Form::close()}}
</div>	


@stop