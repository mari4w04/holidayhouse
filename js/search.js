let sSearchDate
let sTimestampSearchDate

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
        sSearchDate = start.format('YYYY-MM-DD')
        sTimestampSearchDate = (new Date(sSearchDate)).getTime()

        console.log('Search date in seconds: '+sTimestampSearchDate)
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
        sTimestampSearchDateOut = (new Date(sSearchDate)).getTime()

        console.log('Search date in seconds: '+sTimestampSearchDateOut)
    });
  });

  $('#searchForDate').click(function(){
    let houseResults = document.querySelector("#houseResults")
    houseResults.innerHTML = ""

    
    let mydateIn = $('#datein').val()
    sTimestampDateIn = (new Date(mydateIn)).getTime()
    sTimestampDateInShortString=sTimestampDateIn.toString();
    sTimestampDateInShort= sTimestampDateInShortString.substring(0,10)

    console.log(sTimestampDateInShort)
        
    $.ajax({
        method:'GET',
        url:'apis/api-get-houses-with-the-date.php',
        data: {
            'sSearchDate': sTimestampDateInShort,
            'sUserEmail': 'a@a.com',
        },
        dataType:'JSON'
    }).done(function(jData){
        console.log(jData)
        if(jData.status == 1){
            let template = document.querySelector("#foundHouseTemplate").content
            let clone = template.cloneNode(true)
            let data = clone.querySelector("div")

            data.innerHTML = jData.message    
            houseResults.appendChild(clone)
            
            console.log(jData.message)
            console.log('success')
        }else{

        }
    }).fail(function(){
        console.log('API does not work')
    });

    return false
})


d = new Date(parseInt(sDateIn));
dout = new Date(parseInt(sDateOut));


var datestringIn = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate()
var datestringOut = dout.getFullYear() + "-" + (dout.getMonth()+1) + "-" + dout.getDate()
console.log(datestringIn)

$('#location').find('option:contains("'+window.sCity+'")').attr("selected",true);
$('#guests').find('option:contains("'+window.iGuests+'")').attr("selected",true);
$('#housetype').find('option:contains("'+window.sHouseType+'")').attr("selected",true);
$('#datein').val(datestringIn)
$('#dateout').val(datestringOut)

if(sFamilyFriendly==1){
    $("#familyfriendly").prop('checked', true);
}
