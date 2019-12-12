// AMENITIES
let isAmenityCheckedWifi = false;
let isAmenityCheckedTV = false;
let isAmenityCheckedBreakfast = false;

// HOUSE RULES
let isRule1Checked = false;
let isRule2Checked = false;
let isRule3Checked = false;

document.querySelector('#continue-to-receipt-btn').addEventListener('click', (e) => {
	e.preventDefault();
	let houseType = document.querySelector('.home-type-box.active').innerText;
	let cancellation = $('#cancellation option:selected').text();
	let accommodates = $('#accommodates option:selected').text();
	let iPriceNight = $('#iPriceNight').val();
	let houseTitle = $('#sHouseTitle').val();

	localStorage.setItem('cancellation', cancellation);
	localStorage.setItem('accommodates', accommodates);
	localStorage.setItem('iPriceNight', iPriceNight);
	localStorage.setItem('houseType', houseType);
	localStorage.setItem('houseTitle', houseTitle);

	isFamilyFriendly = $('#family-friendly-input').val();
	if (document.querySelector("#family-friendly-input").checked) {
		localStorage.setItem('isFamilyFriendly', isFamilyFriendly);
	}

	isAmenityCheckedWifi = $('#amenity1').val();
	isAmenityCheckedTV = $('#amenity2').val();
	isAmenityCheckedBreakfast = $('#amenity3').val();

	if (document.querySelector(".amenities-content > div:first-of-type input").checked) {
		localStorage.setItem('amenitiesWifi', isAmenityCheckedWifi);
	}

	if (document.querySelector(".amenities-content > div:nth-of-type(2) input").checked) {
		localStorage.setItem('amenitiesTV', isAmenityCheckedTV);
	}

	if (document.querySelector(".amenities-content > div:nth-of-type(3) input").checked) {
		localStorage.setItem('amenitiesBreakfast', isAmenityCheckedBreakfast);
	}

	isRule1Checked = $('#rule1').val();
	isRule2Checked = $('#rule2').val();
	isRule3Checked = $('#rule3').val();

	if (document.querySelector(".house-rules > div:first-of-type input").checked) {
		localStorage.setItem('ruleNoSmoking', isRule1Checked);
	}

	if (document.querySelector(".house-rules > div:nth-of-type(2) input").checked) {
		localStorage.setItem('ruleNoPets', isRule2Checked);
	}

	if (document.querySelector(".house-rules > div:nth-of-type(3) input").checked) {
		localStorage.setItem('ruleNoParties', isRule3Checked);
	}

	window.location.href = "post-pictures.php";
});

// HORIZONTAL SELECTOR
$('div.tabs div').click(function() {
	$('div.tabs div').removeClass('active');
	$(this).addClass('active');
});
