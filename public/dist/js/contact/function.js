$(document).ready(() => {
	initMap();
});

function initMap() {
	let qhpaper = { lat: 21.045651, lng: 105.7994 };
	let map = new google.maps.Map(document.getElementById('map'), {
		center: qhpaper,
		zoom: 15
	});

	let marker = new google.maps.Marker({ position: qhpaper, map: map });
}
