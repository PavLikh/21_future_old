<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title-block') </title>
	<link rel="stylesheet" href="/css/app.css">
  	<script src="{{ asset('js/app.js') }}" defer></script>
  	<!-- <script type="text/javascript" src="/js/jquery-360.min.js"></script> -->

</head>
<body>
	<div class="container">

		@include('inc.header')

		@yield('content')

		@include('inc.footer')
	</div>
</body>
</html>