<?php
    require_once 'top.php'; 
?>

<h1 class="indexheading">When is the room available?</h1>

<div class="small-container container-avail">
            <div class="second-row">
                <div class="date-in-box">
                    <label for="datein">From</label><br>
                    <input class="input-avail" type="text" name="datein" id="datein" value="" />
                </div>
                <div class="date-out-box">
                    <label for="dateout">Until</label><br>
                    <input class="input-avail" type="text" name="dateout" id="dateout" value="" />
                </div>
                <div class="add-more-box">
                    <!-- <input type="checkbox" name="familyfriendly" id="familyfriendly"> <label for="familyfriendly">Family friendly</label> -->
                    <div class="add-more-icon">
                    <p class="add-more-text"><i class="far fa-plus-square"></i> Add more items</p>
                    </div>
                </div>
            </div>
        </form>
    </div>    
    <div class="button-row">
        <a class="" id="continueTo" href="">Continue to...</a>
    </div>
</div>

<img src="images/houses.svg">

<template id="foundHouseTemplate">
    <div></div>
</template>

<?php 
    $sLinktoScript = '<script src="js/index.js"></script>';
    require_once 'bottom.php'; 
?>