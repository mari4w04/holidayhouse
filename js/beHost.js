// LOCAL STORAGE STUFF STARTS

// AMENITY
let isAmenityCheckedWifi = false;
let isAmenityCheckedFreeParking = false;
let isAmenityCheckedLaundry = false;
//HOUSE RULES
let isRule1Checked = false;
let isRule2Checked = false;
let isRule3Checked = false;

// document.querySelector('#family-friendly').addEventListener('click', function() {
// 	if (document.getElementById('family-friendly').checked) {
// 		isFamilyFriendly = $('#family-friendly').val();
// 	}
// });
// // AMENITIES
// document.querySelector('#amenity1').addEventListener('click', function() {
// 	if (document.querySelector('#amenity1').checked) {
// 		isAmenityCheckedWifi = $('#amenity1').val();
// 	}
// });

// document.querySelector('#amenity2').addEventListener('click', function() {
// 	if (document.querySelector('#amenity2').checked) {
// 		isAmenityCheckedFreeParking = $('#amenity2').val();
// 	}
// });

// document.querySelector('#amenity3').addEventListener('click', function() {
// 	if (document.querySelector('#amenity3').checked) {
// 		isAmenityCheckedLaundry = $('#amenity3').val();
// 	}
// });
// // HOUSE RULES
// document.querySelector('#rule1').addEventListener('click', function() {
// 	if (document.querySelector('#rule1').checked) {
// 		isRule1Checked = $('#rule1').val();
// 	}
// });

// document.querySelector('#rule2').addEventListener('click', function() {
// 	if (document.querySelector('#rule2').checked) {
// 		isRule2Checked = $('#rule2').val();
// 	}
// });

document.querySelector('#rule3').addEventListener('click', function() {
	if (document.querySelector('#rule3').checked) {
		isRule3Checked = $('#rule3').val();
	}
});

document.querySelector('#continue-to-receipt-btn').addEventListener('click', () => {
	let houseType = document.querySelector('.home-type-box.active').innerText;
	console.log(houseType);

	let cancellation = $('#cancellation option:selected').text();
	let accommodates = $('#accommodates option:selected').text();
	let iPriceNight = $('#iPriceNight').val();

	localStorage.setItem('cancellation', cancellation);
	localStorage.setItem('accommodates', accommodates);
	localStorage.setItem('iPriceNight', iPriceNight);
	localStorage.setItem('houseType', houseType);

	isFamilyFriendly = $('#family-friendly').val();
	isAmenityCheckedWifi = $('#amenity1').val();
	isAmenityCheckedFreeParking = $('#amenity2').val();
	isAmenityCheckedLaundry = $('#amenity3').val();
	isRule1Checked = $('#rule1').val();
	isRule2Checked = $('#rule2').val();
	isRule3Checked = $('#rule3').val();

	if (!isFamilyFriendly == false) {
		localStorage.setItem('FamilyFriendly', isFamilyFriendly);
	}

	// AMENITIES
	if (!isAmenityCheckedWifi == false) {
		localStorage.setItem('amenitiesWifi', isAmenityCheckedWifi);
	}
	if (!isAmenityCheckedFreeParking == false) {
		localStorage.setItem('amenitiesFreeParking', isAmenityCheckedFreeParking);
	}
	if (!isAmenityCheckedLaundry == false) {
		localStorage.setItem('isAmenityCheckedLaundry', isAmenityCheckedLaundry);
	}
	// HOUSE RULES
	if (!isRule1Checked == false) {
		localStorage.setItem('isRule1Checked', isRule1Checked);
	}
	if (!isRule2Checked == false) {
		localStorage.setItem('isRule2Checked', isRule2Checked);
	}
	if (!isRule3Checked == false) {
		localStorage.setItem('isRule3Checked', isRule3Checked);
	}
});

// HORIZONTAL SELECTOR
$('div.tabs div').click(function() {
	$('div.tabs div').removeClass('active');
	$(this).addClass('active');
});
