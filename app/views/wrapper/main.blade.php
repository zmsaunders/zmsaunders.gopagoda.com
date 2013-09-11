<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		@if (isset($title))
			<title>{{ $title }} - Zach Saunders</title>
		@else
			<title>Zach Saunders</title>
		@endif
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Let's put some lipstick on this pig -->
		<link href="/assets/css/global.css" rel="stylesheet" />

		<!-- Standard fonts suck. -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header class="hero-unit oh">
			<nav class="pull-right">
				<ul class="nav nav-pills">
					<li class="<?php echo (Request::segment(1) == '') ? 'active' : '';?>">
						<a href="/">About Me</a>
					</li>
					<li class="<?php echo (Request::segment(1) == 'lab') ? 'active' : '';?>">
						<a href="{{ URL::route('lab') }}">Expirements</a>
					</li>
				</ul>
			</nav>
			<div class="pull-left">
				<h1 class="name" title="Zach Saunders">Zach Saunders</h1>
				<p>Web Developer &amp; Code Spelunker</p>
			</div>
		</header>
		@yield('body')
		<!-- Add some magic! -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/sketch.js"></script>
	</body>
</html>