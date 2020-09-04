$(document).ready(() => {
	// FILTER APPLICATION

	$('.btn-filter-application')
		.unbind()
		.on('click', function (e) {
			e.preventDefault();

			const $wrapper = $('.application-content');
			const $filterWrapper = $('.application-filter');

			let filterId = $(this).data('filter');

			$filterWrapper.find('a').removeClass('active');
			$(this).addClass('active');

			if (filterId == '*') {
				$wrapper.find('.card').fadeIn();
			} else {
				$wrapper.find('.card').fadeOut();
				setTimeout(() => {
					$wrapper.find('.card[data-type="' + filterId + '"]').fadeIn();
				}, 100);
			}
		});
});
