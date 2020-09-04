@extends('layouts.main')

@section('title')
	Quoc Hung Paper
@endsection

@section('view')
	<div class="view-product">
		<div class="row row-no-gutters">
			<div class="product-wrapper-left col-md-6">
				<div class="product-main">
					@foreach ($products as $key => $item)
						@if($item['Priority'] == 0)
							<div class="product">
								<div class="mask">
									<img src="{{ $item['Thumb'] }}" alt="Image of {{ $item['Title'] }}">
								</div>

								<div class="overlay">
									<a href="#" data-id="{{ $item['Id'] }}" class="btn-call-product-detail">
										<h3 class="product-title">
											{{ $item['Title'] }}
										</h3>

										<p class="product-desc">
											{{ Str::limit($item['Desc'], 200, '...') }}
										</p>
									</a>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			</div>

			<div class="product-wrapper-right col-md-6">
				<div class="product-submain">
					@foreach ($products as $key => $item)
						@if($item['Priority'] == 1)
							<div class="product">
								<div class="mask">
									<img src="{{ $item['Thumb'] }}" alt="Image of {{ $item['Title'] }}">
								</div>

								<div class="overlay">
									<a href="#" data-id="{{ $item['Id'] }}" class="btn-call-product-detail">
										<h4 class="product-title">
											{{ $item['Title'] }}
										</h4>

										<p class="product-desc">
											{{ Str::limit($item['Desc'], 200, '...') }}
										</p>
									</a>
								</div>
							</div>
						@endif
					@endforeach
				</div>
	
				<div class="product-others">
					<div class="row row-no-gutters">
						@foreach ($products as $key => $item)
							@if($item['Priority'] == 2)
								<div class="col">
									<div class="product">
										<div class="mask">
											<img src="{{ $item['Thumb'] }}" alt="Image of {{ $item['Title'] }}">
										</div>
	
										<div class="overlay">
											<a href="#" data-id="{{ $item['Id'] }}" class="btn-call-product-detail">
												<h5 class="product-title">
													{{ $item['Title'] }}
												</h5>
	
												<p class="product-desc">
													{{ Str::limit($item['Desc'], 100, '...') }}
												</p>
											</a>
										</div>
									</div>
								</div>
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>

		@include('products._popup')
	</div>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('dist/scss/css/products.min.css') }}">
@endsection

@section('js')
	<script src="{{ asset('dist/js/products/function.min.js') }}"></script>
@endsection