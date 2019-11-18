let sSearchDateIn
let sTimestampDateIn
let sSearchDateOut
let sTimestampDateOut
let sSelectedTime


// $('#datein').click(function(){
//     $('.daterangepicker').css("position", "absolute")

// })
$(function() {
    $('input[name="datein"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 2019,
        maxYear: parseInt(moment().format('YYYY'),10),
        locale: {
            'format': 'YYYY-MM-DD',
        }
    }, function(start, end, label) {
        sSearchDateIn = start.format('YYYY-MM-DD')
        sTimestampDateIn = (new Date(sSearchDateIn)).getTime()
        
        console.log('DateIN in seconds: '+sTimestampDateIn)
        
    });
});

$(function() {
    $('input[name="dateout"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 2019,
        maxYear: parseInt(moment().format('YYYY'),10),
        locale: {
            'format': 'YYYY-MM-DD',
        }
    }, function(start, end, label) {
        sSearchDateOut = start.format('YYYY-MM-DD')
        sTimestampDateOut = (new Date(sSearchDateOut)).getTime()
        
        console.log('DateOUT in seconds: '+sTimestampDateOut)
        
    });
});

let selectedCity = $('#location option:selected').text().replace(/\s+/g, '');
let selectedGuests= $('#guests option:selected').text().replace(/\s+/g, '');
let selectedHouseType= $('#housetype option:selected').text().replace(/\s+/g, '');
let isFamilyFriendly;
if($('#familyfriendly').is(':checked')) {
    isFamilyFriendly = 1;
} else {
    isFamilyFriendly = 0;
}

// -----------------------------------------------------------------------------



$(document).ready(function() { 
    let mydateIn = $('#datein').val()
    sTimestampDateIn = (new Date(mydateIn)).getTime()

    let mydateOut = $('#dateout').val()
    sTimestampDateOut = (new Date(mydateOut)).getTime()

    $('#searchForDate').attr("href", "search.php?city="+selectedCity+"&guests="+selectedGuests+"&housetype="+selectedHouseType+"&datein="+sTimestampDateIn+"&dateout="+sTimestampDateOut+"&isfamilyfriendly="+isFamilyFriendly)

 });

function updateLink(){
    console.log('test')
    let selectedCity = $('#location option:selected').text().replace(/\s+/g, '');
    let selectedGuests= $('#guests option:selected').text().replace(/\s+/g, '');
    let selectedHouseType= $('#housetype option:selected').text().replace(/\s+/g, '');
    let isFamilyFriendly;
    if($('#familyfriendly').is(':checked')) {
        isFamilyFriendly = 1;
    } else {
        isFamilyFriendly = 0;
    }
    $('#searchForDate').attr("href", "search.php?city="+selectedCity+"&guests="+selectedGuests+"&housetype="+selectedHouseType+"&datein="+sTimestampDateIn+"&dateout="+sTimestampDateOut+"&isfamilyfriendly="+isFamilyFriendly)
}

$('#location').change(updateLink)
$('#guests').change(updateLink)
$('#housetype').change(updateLink)
$('#familyfriendly').change(updateLink)
$('#datein').change(updateLink)
$('#dateout').change(updateLink)


$('#searchForDate').click(function(e){
    // e.preventDefault();

    let mydateIn = $('#datein').val()
    sTimestampDateIn = (new Date(mydateIn)).getTime()

    let mydateOut = $('#dateout').val()
    sTimestampDateOut = (new Date(mydateOut)).getTime()
    
    console.log(selectedCity, selectedGuests, selectedHouseType, sTimestampDateIn, sTimestampDateOut, isFamilyFriendly)
})
