<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta content="QH Paper" name="author" />

		<meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('meta')

		<title>@yield('title')</title>

		<!-- ZAYEKI CSS -->
		<link rel="stylesheet" href="{{ asset('dist/plugins/zayeki/css/zayeki.min.css') }}">

		@yield('css')

		<link rel="shortcut icon" href="{{ asset('dist/img/favicon.ico') }}" type="image/x-icon">
    	<link rel="icon" href="{{ asset("dist/img/favicon.ico") }}" type="image/x-icon">
	</head>
	<body>
		@include('layouts._header')

		<div class="page-content">
			@yield('view')
		</div>

		@include('layouts._footer')

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then ZAYEKI JS -->
		<script src="{{ asset('dist/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="{{ asset('dist/plugins/zayeki/js/zayeki.min.js') }}"></script>

		<!-- COMMON JS -->
		<script src="{{ asset('dist/js/common.min.js') }}"></script>

		@yield('js')
	</body>
</html>