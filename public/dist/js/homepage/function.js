$(document).ready(() => {
	const swiperHome = new Swiper('#swiperHome', {
		spaceBetween: 0,
		effect: 'fade',
		loop: true,
		autoplay: {
			delay: 7000
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true
		}
	});
});
