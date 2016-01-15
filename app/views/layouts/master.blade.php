<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Laravel Blog</title>
	    <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{-- Bootstraps Core CSS --}}
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/clean-blog.css" rel="stylesheet">

		<!--Custom Fonts -->
		 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		{{-- Bootstrap JS --}}
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="/js/bootstrap.js"></script>

		@yield('top-script')
	</head>
	<body>
		<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
	        <div class="container-fluid">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <div class="list-inline">
		                <li>	
		                	<a class="navbar-brand" href="{{{action('HomeController@showPortfolio')}}}">My Portfolio</a>
		                </li>
		                <li>
		                	<a class="navbar-brand" href="http://pdfsr.com/pdf/roger-chin-resume-2016.pdf">Resume</a>
		                </li>		
	            	</div>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li>
	                        <a href="index.html">Home</a>
	                    </li>
	                    <li>
	                        <a href="create">Create</a>
	                    </li>
	                    <li>
	                        <a href="post.html">Sample Post</a>
	                    </li>
	                    <li>
	                    	<a class="btn btn-lg" href="{{{action('HomeController@getLogin')}}}">Sign In</a>
	                    </li>
	                    <li>
	                        <a href="{{{action('HomeController@getLogout')}}}">Sign Out</a>
	                    </li>
	                    
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>

	    <!-- Page Header -->
	    <!-- Set your background image for this header on the line below. -->
	    <a href="{{{action('PostsController@index')}}}"><header class="intro-header" style="background-image: url('/img/header.jpg')">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                    <div class="site-heading">
	                        <h1>Roger's Blog</h1>
	                        <hr class="small">
	                        <span class="subheading">A blog all about Roger</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header></a>

		@if (Session::has('successMessage'))
    		<div class="alert alert-success close" data-dismiss="alert">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
    		<div class="alert alert-danger close" data-dismiss="alert">{{{ Session::get('errorMessage') }}}</div>
		@endif	

	@yield('content')
 	</body>
 		<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.github.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Roger Chin Productions</p>
                </div>
            </div>
        </div>
    </footer>
</html>