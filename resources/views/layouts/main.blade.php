<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Main</title>
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico" />
		<link href="css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		{{-- Header section --}}
		<section>
			@yield('header')
			@yield('content')
			@yield('footer')
		</section>
		<script src="/js/index.js"></script>
	</body>
</html>