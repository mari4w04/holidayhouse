let price = $('.price p span').text()
let priceCleaning = parseInt($('.pricetag-cleaning span').text())
let priceBreakfast = parseInt($('.pricetag-beakfast span').text())
let x2NightsPrice = price*2



let total = x2NightsPrice+priceCleaning+priceBreakfast
console.log(total)

$('#pricetag span').text(x2NightsPrice);
$('.total-price span').text(total);