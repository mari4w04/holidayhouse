console.log("hostReceipt");

document.getElementById('home-type').innerText = localStorage.getItem('houseType');
document.getElementById('nr-guests').innerText = localStorage.getItem('accommodates');
document.getElementById('cancellation-type').innerText = localStorage.getItem('cancellation');
document.getElementById('post-price').innerText = localStorage.getItem('iPriceNight') + 'DKK/night';

// AMENITIES

if(localStorage.getItem('amenitiesWifi')) {
    document.getElementById("amenity1").innerText = localStorage.getItem('amenitiesWifi');
}

if(localStorage.getItem('amenitiesTV')) {
    document.getElementById("amenity2").innerText = localStorage.getItem('amenitiesTV');
}

if(localStorage.getItem('amenitiesBreakfast')) {
    document.getElementById("amenity3").innerText = localStorage.getItem('amenitiesBreakfast');
}

// HOUSE RULES

if(localStorage.getItem('ruleNoSmoking')) {
    document.getElementById("rule1").innerText = localStorage.getItem('ruleNoSmoking');
}

if(localStorage.getItem('ruleNoPets')) {
    document.getElementById("rule2").innerText = localStorage.getItem('ruleNoPets');
}

if(localStorage.getItem('ruleNoParties')) {
    document.getElementById("rule3").innerText = localStorage.getItem('ruleNoParties');
}

