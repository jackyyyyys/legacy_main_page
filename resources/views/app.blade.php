<!DOCTYPE html>
<html lang="en">
<head>
	


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Jacky Sin" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>Jacky's Studio</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/icon_32.jpg') }}">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/slider-pro/dist/css/slider-pro.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/strip/dist/css/strip.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
	<link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/sticky-footer.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default header-bg sticky" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
					<img style="max-width:40px; margin-top: 5px;" src="{{ asset('/images/icon_256.jpg') }}" href="{{ route('homePage') }}" class="d-inline-block align-top">
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" style="color: #ffffff">
					<li><a href="{{ route('homePage') }}">Home</a></li>
					<li><a href="{{ route('basicPage') }}">About Me</a></li>
					<li><a href="{{ route('page1') }}">My Work</a></li>
					<li><a href="{{ route('page2') }}">My Steps</a></li>
					<li><a href="{{ route('page3') }}">Takeoff</a></li>
					<li><a href="{{ route('page4') }}">Acknowledgements</a></li>
				</ul>
				<span class="navbar-text pull-right">
					Jacky's Studio
				</span>
				</div>
		</div>
	</nav>

	@yield('content')

	<!-- Start footer copyright bar -->



	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('js')
</body>
</html>
