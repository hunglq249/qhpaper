@extends('layouts.main')

@section('title')
	Quoc Hung Paper
@endsection

@section('view')
	<div class="view-application">
		<div class="application-filter">
			<a href="#" class="btn-filter-application active" data-filter="*">
				<h6>
					{{ trans('lang.app_all') }}
				</h6>
			</a>

			@foreach ($applications as $key => $application)
				<a href="#" class="btn-filter-application" data-filter="{{ $application['Id'] }}">
					<h6>
						{{ $application['Title'] }}
					</h6>
				</a>
			@endforeach
		</div>

		<div class="application-content container">
			@foreach ($applicationProducts as $key => $product)
				<div class="card" data-type="{{ $product['Type'] }}">
					<a href="#">
						<img src="{{ $product['Image'] }}" alt="Image">

						<div class="overlay">
							<p class="p-overline">

							</p>

							<h6>
								{{ $product['Name'] }}
							</h6>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('dist/scss/css/applications.min.css') }}">
@endsection

@section('js')
	<script src="{{ asset('dist/js/applications/function.min.js') }}"></script>
@endsection