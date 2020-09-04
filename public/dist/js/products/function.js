$(document).ready(() => {
	$('.btn-call-product-detail')
		.unbind()
		.on('click', function (e) {
			e.preventDefault();

			const $popup = $('#popupProductDetail');

			let url = '/san-pham/getDetail';
			let id = $(this).data('id');

			url = zykUtil.buildUrl(url, 'id', id);

			zykUtil.callAjax({
				url: url,
				method: 'GET',
				success: (res) => {
					$popup.find('.popup-content').html(res.html);
					$popup.popup('show');
				},
				error: () => {}
			});
		});
});
