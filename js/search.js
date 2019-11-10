let sSearchDate
let sTimestampSearchDate

$(function() {
    $('input[name="searchdate"]').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 2019,
      maxYear: parseInt(moment().format('YYYY'),10),
      locale: {
        'format': 'MM/DD/YYYY',
      }
    }, function(start, end, label) {
        sSearchDate = start.format('YYYY-MM-DD')
        sTimestampSearchDate = (new Date(sSearchDate)).getTime()

        console.log('Search date in seconds: '+sTimestampSearchDate)
    });
  });

  $('#searchForDate').click(function(){
    let houseResults = document.querySelector("#houseResults")
    houseResults.innerHTML = ""
    sSearchDate = sSearchDate
    // sSearchDate = sSearchDate+' 12:00:00'
    sTimestampSearchDate = (new Date(sSearchDate)).getTime()

    console.log(sSearchDate)
    // console.log(sSelectedTime)
        
    $.ajax({
        method:'GET',
        url:'apis/api-get-houses-with-the-date.php',
        data: {
            'sSearchDate': sTimestampSearchDate,
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