console.log('local storage here');
console.log(localStorage.getItem('familyFriendly'));

// OBJECT
// console.log(localStorage.getItem('amenityChecked'));
var retrievedObject = localStorage.getItem('amenityChecked');
console.log('retrievedObject: ', JSON.parse(retrievedObject));
// END OBJECT

let isFamilyFriendly = document.getElementById('family-friendly').checked;
// let amenityChecked = document.getElementById('amenity1').checked;
// let iPriceNight = $('#iPriceNight').val();

document.querySelector('#continue-to-receipt-btn').addEventListener('click', () => {
	let cancellation = $('#cancellation option:selected').text();
	let accommodates = $('#accommodates option:selected').text();
	let iPriceNight = $('#iPriceNight').val();

	// OJBECT
	let amenityChecked = document.getElementById('amenity1').checked;
	localStorage.setItem('amenity', JSON.stringify(amenityChecked));
	// END OBJECT
	localStorage.setItem('familyFriendly', isFamilyFriendly);
	localStorage.setItem('cancellation', cancellation);
	localStorage.setItem('accommodates', accommodates);
	localStorage.setItem('iPriceNight', iPriceNight);
});

// // ----------------------
// var testObject = { one: 1, two: 2, three: 3 };

// // Put the object into storage
// localStorage.setItem('testObject', JSON.stringify(testObject));

// // Retrieve the object from storage
