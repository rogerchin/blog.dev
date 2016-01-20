@extends('layouts.master')

@yield('top-script')

<!-- Main Content -->
@section('content')
<div class="container">
	
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			
            @foreach($posts as $post)
            	<div class="post-preview">
            		<a href="{{{ action('PostsController@show', $post->id) }}}">
	            		<h2 class="post-title">
	            			{{{$post->title}}}
	            		</h2>
	            		<h3 class="post-subtitle">
	            			By: {{{$post->user->username}}}
	            		</h3>
                        <small>{{{$post->created_at->format('F jS Y @ h:i:s A')}}}</small>
            		</a>
            	<p class="post-meta">{{{$post->description}}}</p>
            	<hr>	
            @endforeach		
           	
        </div>

       {{ $posts->links()}} 
       
    </div>
</div>
@stop