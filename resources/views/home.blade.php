@extends('layouts.main')

@section('title')
	Quoc Hung Paper
@endsection

@section('view')
	<div class="view-home">
		<div class="swiper-container" id="swiperHome">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="mask">
						<img src="https://images.unsplash.com/photo-1526554850534-7c78330d5f90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Image slide">
					</div>

					<div class="text-overlay">
						<h5>Subtitle</h5>
						<h1>Main big title 1</h1>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="mask">
						<img src="https://images.unsplash.com/photo-1566125882500-87e10f726cdc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="Image slide">
					</div>

					<div class="text-overlay">
						<h5>Subtitle</h5>
						<h1>Main big title 2</h1>
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white"></div>
		</div>
	</div>
@endsection

@section('css')
	<!-- SWIPER CSS -->
	<link rel="stylesheet" href="{{ asset('dist/plugins/swiper/css/swiper-bundle.min.css') }}">

	<link rel="stylesheet" href="{{ asset('dist/scss/css/homepage.min.css') }}">
@endsection

@section('js')
	<!-- SWIPER JS -->
	<script src="{{ asset('dist/plugins/swiper/js/swiper-bundle.min.js') }}"></script>

	<script src="{{ asset('dist/js/homepage/function.min.js') }}"></script>
@endsection