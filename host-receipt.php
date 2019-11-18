<?php

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

<div class="page">
    <form action="apis/api-be-host.php" method="POST"> 
        <div class="row home-type">
            <div class="post-titles">Home Type</div>
                <div class="post-content">
                    Apartment
                </div>
        </div>
        <div class="row">
        <div class="post-titles">Accomodates</div>
            <div class="post-content col-2">    
                <div>1 guest</div>
                <div>Family Friendly</div>
            </div>
        </div>

        <div class="row">
            <div class="post-titles">Amenities</div>
            <div class="col-2 post-content">
                <?php 
                        require_once __DIR__.'/connect.php';
                        $stmt = $db->prepare('SELECT * FROM amenities');
                        $stmt->execute();
                        $aRows = $stmt->fetchAll();
                        foreach ($aRows as $jRow) {
                            echo '<div class="checkbox">
                                    <div class="checkbox-title">'.$jRow->amenity_name.'</div>
                                </div>';
                        }
                    ?>
            </div>
        </div> 
        <div class="row">
            <div class="post-titles">Cancellation</div>
            <div class="post-content">
                7 day prior to visit
            </div>
        </div>     
        <div class="row">
            <div class="post-titles">House Rules</div>
            <div class="col-2 post-content">
                <?php 
                    require_once __DIR__.'/connect.php';
                    $stmt = $db->prepare('SELECT * FROM rules');
                    $stmt->execute();
                    $aRows = $stmt->fetchAll();
                    foreach ($aRows as $jRow) {
                        echo '<div class="checkbox">
                                <div class="checkbox-title">'.$jRow->rule_name.'</div>
                            </div>';
                    }
                ?>
            </div>
        </div>  
        <div class="row">
            <div class="post-titles">Price per night</div>
            <div class="post-content post-price">
                450 DKK/night
            </div>
        </div>       
            <div class="row">
                <button class="btn post-content">Continue</button>
            </div>
        </form>
    </div>
</div>


<?php
require_once __DIR__.'/bottom.php'; 