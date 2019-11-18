$('div.tabs div').click(function() {
	$('div.tabs div').removeClass('active');
	$(this).addClass('active');
});
//
$('.home-type-box').click(function() {
	let hometype = $(this).text();
});

$.ajax({
	method: 'GET',
	url: 'apis/api-get-houses-with-the-date.php',
	data: {
		sSearchDate: sTimestampDateInShort,
		sUserEmail: 'a@a.com'
	},
	dataType: 'JSON'
})
	.done(function(jData) {
		console.log(jData);
		if (jData.status == 1) {
			let template = document.querySelector('#foundHouseTemplate').content;
			let clone = template.cloneNode(true);
			let data = clone.querySelector('div');

			data.innerHTML = jData.message;
			houseResults.appendChild(clone);

			console.log(jData.message);
			console.log('success');
		} else {
		}
	})
	.fail(function() {
		console.log('API does not work');
	});

// return false
// });
