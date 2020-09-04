<header>
	<div class="nav">
		<div class="nav-brand">
			<a href="{{ route('home') }}">
				<img src="{{ asset('dist/img/logo-color.svg') }}" alt="Logo QH Paper">
			</a>
		</div>

		<div class="nav-menu">
			@foreach ($navMenu as $key => $item)
				<a href="{{ $item['Link'] }}" class="{{ Request::Segment(1) == $item['Slug'] ? 'active' : '' }}">
					{{ $item['Title'] }}
				</a>
			@endforeach
		</div>

		<div class="nav-toggle">
			<button class="btn btn-nav-toggle" type="button">
				<div class="line"></div>
			</button>
		</div>
	</div>
</header>