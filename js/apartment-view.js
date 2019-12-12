let price = $('.price p span').text();
let priceCleaning = parseInt($('.pricetag-cleaning span').text());
let priceBreakfast = parseInt($('.pricetag-beakfast span').text());
let x2NightsPrice = price * 2;

let total = x2NightsPrice + priceCleaning + priceBreakfast;
console.log(total);

$('#pricetag span').text(x2NightsPrice);
$('.total-price span').text(total);

$('.reserve').click(() => {
	swal({
		title: 'Thank you for reserving!',
		text: 'Your confirmation number is ' + Math.floor(Math.random() * 100001),
		icon: 'success'
	}).then(function() {
		// Redirect to confirmation
		window.location.href = 'confirmation';
		console.log('The Ok Button was clicked.');
	});
});
