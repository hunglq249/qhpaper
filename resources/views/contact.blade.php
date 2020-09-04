@extends('layouts.main')

@section('title')
	Quoc Hung Paper
@endsection

@section('view')
	<div class="view-contact">
		<div class="row row-no-gutters">
			<div class="contact-map col-md-6">
				<div id="map"></div>
			</div>

			<div class="contact-info col-md-6">
				<div class="info-wrapper">
					<div>
						<h6>
							{{ trans('lang.contact_address') }}
						</h6>

						<h3>
							{{ trans('lang.contact_address_detail') }}
						</h3>
					</div>

					<div>
						<h6>
							{{ trans('lang.contact_phone') }}
						</h6>

						<h3>
							<a href="tel:84902257472">
								(+84) 902 257 472
							</a>
						</h3>
					</div>

					<div>
						<h6>
							Email
						</h6>

						<h3>
							<a href="mailto:contact.quochung@gmail.com">
								contact.quochung@gmail.com
							</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('dist/scss/css/contact.min.css') }}">
@endsection

@section('js')
	{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBEM4VvMs7EHN5ljlJVnpK8bA1M0jwJI&callback=initMap"></script> --}}
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBEM4VvMs7EHN5ljlJVnpK8bA1M0jwJI&callback=initMap&libraries=&v=weekly" defer></script>
	<script src="{{ asset('dist/js/contact/function.min.js') }}"></script>
@endsection