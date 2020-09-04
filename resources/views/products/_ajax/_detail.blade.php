<div class="popup-header">
	<div></div>

	<button class="btn" data-dismiss="popup" type="button">
		<i class="elo el-2x el-close"></i>
	</button>
</div>

<div class="popup-body">
	<div class="row">
		<div class="col-md-5"></div>

		<div class="product-desc col-md-4">
			<p>
				{{ $product['Desc'] }}
			</p>
		</div>
		
		<div class="product-thumb col-md-5">
			<img src="{{ $product['Thumb'] }}" alt="Thumb of {{ $product['Title'] }}">
		</div>

		<div class="col-md-3">
			
		</div>

		<div class="product-detail col-md-4">
			<div class="detail-wrapper">
				@php
					$groups = $product['Groups'];
				@endphp

				@foreach ($groups as $key => $group)
					<div class="detail-group">
						<div class="group-header">
							<h6>
								{{ $group['Name'] }}
							</h6>
						</div>

						<div class="group-body">
							@if (count($group['Props']) > 0)
								@foreach ($group['Props'] as $key => $prop)
									<div class="group-item">
										<h4>
											{{ $group['Name'] }} {{ $prop }}
										</h4>

										<p>
											{{ trans('lang.product_size') }}: {{ $group['Size'] }} mm
										</p>

										<p>
											{{ trans('lang.product_quantity') }}:
											@foreach ($group['Quantity'] as $key => $q)
												{{ $q }} {{ $key < count($group['Quantity']) - 1 ? ' - ' : ''}}
											@endforeach
											gsm
										</p>
									</div>
								@endforeach
							@else
								<div class="group-item">
									<h4>
										{{ $group['Name'] }}
									</h4>

									<p>
										{{ trans('lang.product_size') }} {{ $group['Size'] }} mm
									</p>

									<p>
										{{ trans('lang.product_quantity') }} :
										@foreach ($group['Quantity'] as $key => $q)
											{{ $q }} {{ $key < count($group['Quantity']) - 1 ? ' - ' : ''}}
										@endforeach
										gsm
									</p>
								</div>
							@endif
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>