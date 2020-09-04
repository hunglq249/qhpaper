@extends('layouts.main')

@section('title')
	Quoc Hung Paper
@endsection

@section('view')
	<div class="view-about" data-scroll-container>
		<div data-scroll-section>
			<div class="section section-heading">
				<div class="container-fluid">
					<div class="row">
						<div class="section-heading-left col-md-4">
							<h1 data-scroll data-scroll-speed="1">
								{{ trans('lang.nav_about') }}
							</h1>
						</div>
		
						<div class="section-heading-right col-md-8">
							<img src="https://images.unsplash.com/photo-1541702193626-24fe3a9fbed3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80" alt="About us cover"
								data-scroll data-scroll-speed="2">
						</div>
					</div>
				</div>
			</div>
	
			<div class="section section-description">
				<div class="container">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<p>
								{{ trans('lang.about_paragraph_1') }}
							</p>
			
							<p>
								{{ trans('lang.about_paragraph_2') }}
							</p>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>
			</div>
	
			<div class="section section-image">
				<div class="img-wrapper">
					<img src="https://images.unsplash.com/photo-1542919901-ce575ee6e6e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Image about" data-scroll data-scroll-speed="3">
				</div>
			</div>
	
			<div class="section section-image">
				<div class="img-wrapper">
					<img src="https://images.unsplash.com/photo-1555443712-3a7c897878a4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Image about" data-scroll data-scroll-speed="2">
				</div>
			</div>
	
			<div class="section section-description">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-8">
							<h4>
								{!! trans('lang.about_paragraph_3') !!}
							</h4>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>
			</div>
	
			<div class="section section-image section-image-centered">
				<div class="img-wrapper">
					<img src="https://images.unsplash.com/photo-1499725144476-a35e60e41ab8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1110&q=80" alt="Image about" data-scroll data-scroll-speed="2">
				</div>
			</div>
	
			<div class="section section-analytic">
				<div class="container">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-3" data-scroll data-scroll-speed="3">
							<h6>
								{{ trans('lang.about_paper_brand') }}
							</h6>
		
							<h1>
								04+
							</h1>
						</div>
					</div>
	
					<div class="row">
						<div class="col-md-9"></div>
						<div class="col-md-3" data-scroll data-scroll-speed="4">
							<h6>
								{{ trans('lang.about_paper_type') }}
							</h6>
	
							<h1>
								43+
							</h1>
						</div>
					</div>
	
					<div class="row">
						<div class="col-md-3" data-scroll data-scroll-speed="6">
							<h6>
								{{ trans('lang.about_customer') }}
							</h6>
	
							<h1>
								57+
							</h1>
						</div>
					</div>
	
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3" data-scroll data-scroll-speed="5">
							<h6>
								{{ trans('lang.about_customer_satisfaction') }}
							</h6>
	
							<h1>
								100%
							</h1>
						</div>
					</div>
				</div>
			</div>
	
			<div class="section section-description">
				<div class="container">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<h3>
								{!! trans('lang.about_paragraph_4') !!}
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('css')
	<!-- LOCOMOTIVE CSS -->
	<link rel="stylesheet" href="{{ asset('dist/plugins/locomotive/css/locomotive-scroll.min.css') }}">

	<link rel="stylesheet" href="{{ asset('dist/scss/css/about.min.css') }}">
@endsection

@section('js')
	<!-- LOCOMOTIVE JS -->
	<script src="{{ asset('dist/plugins/locomotive/js/locomotive-scroll.min.js') }}"></script>

	<script src="{{ asset('dist/js/about/function.min.js') }}"></script>
@endsection