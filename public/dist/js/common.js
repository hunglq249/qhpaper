$(document).ready(() => {
	$(document).on('click', '.btn-nav-toggle', function () {
		$(this).find('.line').toggleClass('active');
		$('.nav-menu').toggleClass('show');
	});
});
