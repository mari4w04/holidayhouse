<?php

    require_once 'top.php'; 
?>


<div class="container">
    <div class="search-box">
        <form>
            <input type="text" name="searchdate" id="availability" value="06/01/2019" />
            <button class="" id="searchForDate">Search</button>
        </form>

        <div class="" id="houseResults">
            <div class="white-card">
                <p style="color: lightgray;">Select a date period in the search bar on the left</p>
                
            </div>
        </div>
    </div>
    
</div>

<template id="foundHouseTemplate">
    <div></div>
</template>

<?php 
    $sLinktoScript = '<script src="js/search.js"></script>';
    require_once 'bottom.php'; 
?>