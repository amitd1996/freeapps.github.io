<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- CDN -->
	<!-- style -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-reboot.min.css"> -->
	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> -->
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans|Roboto|Roboto+Condensed" rel="stylesheet">

	<!-- Animation -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
	<!-- JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<link href="{{ asset('/public/css/bootstrapr.css') }}" rel="stylesheet">
	<link href="{{ asset('/public/css/fontawesome.all.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style>
		body{
			background-color: #fff;
			font-family: 'Raleway', sans-serif;
		}
		.row-bordered:after {
		  content: "";
		  display: block;
		  border-bottom: 1px solid #ccc;
		  margin: 0 15px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="{{ url('homes') }}">FreeApps</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('homes') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('postview') }}">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('create') }}">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	@yield('content')
</div>

<footer class="mt-5">
	<div class="text-center text-muted bg-dark text-white" style="padding: 20px !important;">© 2018 Copyright: FreeApps</div>
</footer>

{{-- Script --}}
<script type="text/javascript" src="{{ asset('/public/js/jquery.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
<script type="text/javascript" src="{{ asset('/public/js/fontawesome.all.min.js') }}"></script>

</body>
</html>
