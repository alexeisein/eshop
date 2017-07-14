<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	{{-- GOOGLE FONT --}}
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
  	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  	crossorigin="anonymous"></script>

  	{{-- CUSTOM CSS --}}
  	<link rel="stylesheet" type="text/css" href="css/main.css">

  	<!-- FONT AWESOME -->
  	<script src="https://use.fontawesome.com/256ba5c5f4.js"></script>

  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	@if (Auth::guest())
		@include('partials.header')
	@else
		@include('partials.adminheader')
	@endif

	@if(Session::has('success'))
        <div class="alert alert-success text-center">
           <h2>{{ Session::get('success') }}</h2>
        </div>
    @endif

	@yield('content')
	
	<script> 
        $('div.alert').not('.alert-important').not('.alert-danger').delay(3000).slideUp(300);
        {{--$('#flash-overlay-modal').modal();--}}
    </script>
</body>
</html>