<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="javascript" type="text/css" href="/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link href="/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Laravel Blog</title>
</head>
<body>
	@include('posts.nav')
	<div class="container">
		@if(Session::has('errorMessage'))
		<div class="alert alert-danger"> {{{ Session::get('errorMessage') }}} </div>
		@endif
		@if(Session::has('sucessMessage'))
		<div class="alert alert-success"> {{{ Session::get('sucessMessage') }}} </div>
		@endif
		<h1>Travis Blog Posts</h1>
	    @yield('content')
	    @yield('data')
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/script.js"></script>
</html>