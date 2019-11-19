<?php
// session_start();
// $sPostId = $_GET['sPostId'];

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

<div class="page">
    <div class="page-title"> 
        <h2>Become a Host.</h2>
        <h4>Rent your holiday home and earn money.</h4>
    </div>
  
    <form action="apis/api-be-host.php" method="POST"> 
        <div class="row home-type">
            <div class="post-titles">Home Type</div>
                <div id="home-type" class="post-content">
                   
                </div>
            </div>
        <div class="row">
            <div class="post-titles">Accomodates</div>
                <div class="post-content col-2">    
                    <div id="nr-guests">  </div>
                    <div>Family Friendly</div>
                </div>
            </div>

        <div class="row">
            <div class="post-titles">Amenities</div>
            <div class="col-2 post-content">
                <div class="checkbox">
                    <!-- <div id="amenity1" class="checkbox-title">Amenity 1</div> -->
                    <!-- <div id="amenity2" class="checkbox-title">Amenity 2</div>
                    <div id="amenity3" class="checkbox-title">Amenity 1</div> -->
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="post-titles">Cancellation</div>
            <div class="post-content">
                <div class="checkbox">
                    <div id="cancellation-type" class="checkbox-title"> </div>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="post-titles">House Rules</div>
            <div class="col-2 post-content">
                <div class="checkbox">
                    <!-- <div id="rule1" class="checkbox-title">Rule 1</div>
                    <div id="rule2" class="checkbox-title">Rule 2</div>
                    <div id="rule3" class="checkbox-title">Rule 3</div> -->
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="post-titles">Price per night</div>
            <div id="post-price" class="post-content post-price">

            </div>
        </div>       
            <div class="row-images">
                    <img src="./images/house1.jpg" alt="">
                    <img src="./images/house1.jpg" alt="">
                    <img src="./images/house1.jpg" alt="">
                    <img src="./images/house1.jpg" alt="">
            </div>
            <div class="row">
                <button class="btn post-content">Continue</button>
            </div>
        </form>
    </div>
</div>

<?php
$sLinktoScript = '<script type="text/javascript" src="js/hostReceipt.js"></script>'; 
require_once __DIR__.'/bottom.php'; 

