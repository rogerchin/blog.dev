@extends('layouts.master')

@section('content')

<div class="container">
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		{{Form::open(array('action'=>'HomeController@postLogin'))}}
			<div class="form-group inline-list">
				{{Form::label('email', 'Email')}}
				{{Form::email('email', null, array('class'=> 'form-control', 'placeholder'=> 'Enter your email'))}}
			</div>
			<div class="form-group inline-list">
				{{Form::label('password', 'Password')}}
				{{Form::password('password', null, array('class'=>'form-control'))}}
			</div>
			<button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>	
		{{Form::close()}}
	</div>
</div>
@stop				