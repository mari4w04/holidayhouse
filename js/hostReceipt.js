console.log(localStorage.getItem('houseType'));

// localStorage.getItem('FamilyFriendly');

// localStorage.getItem('isRule1Checked');
// localStorage.getItem('isRule2Checked');
// localStorage.getItem('isRule3Checked');

document.getElementById('home-type').innerText = localStorage.getItem('houseType');
document.getElementById('nr-guests').innerText = localStorage.getItem('accommodates');
document.getElementById('cancellation-type').innerText = localStorage.getItem('cancellation');
document.getElementById('post-price').innerText = localStorage.getItem('iPriceNight') + 'DKK/night';

// document.getElementById('amenity1').innerHTML =
// 	'<div id="amenity1" class="checkbox-title">' + localStorage.getItem('amenitiesWifi') + '</div>';

// document.getElementById('amenity2').innerText = localStorage.getItem('amenitiesFreeParking');
// document.getElementById('amenity3').innerText = localStorage.getItem('isAmenityCheckedLaundry');

// document.getElementById('rule1').innerText = localStorage.getItem('isRule1Checked');
// document.getElementById('rule2').innerText = localStorage.getItem('isRule2Checked');
// document.getElementById('rule3').innerText = localStorage.getItem('isRule3Checked');
