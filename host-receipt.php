<?php

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

<div class="page">
    <form action="apis/api-be-host.php" method="POST"> 
        <div class="row home-type">
            <h3 class="post-titles">Home Type</h3>
                <div class="receipt-content">
                    <p>Apartment</p>
                </div>
        </div>
        <div class="row">
            <h3 class="post-titles">Accommodates</h3>
            <div class="post-content col-2">
                <div class="receipt-content">
                    <p>1 guest</p>
                </div>
                <div class="family-friendly">
                    <div class="checkbox-title">Family Friendly</div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="post-titles">Amenities</h3>
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
            <h3 class="post-titles">Cancellation</h3>
            <div>
                <p>7 day prior to visit</p>
            </div>
        </div>     
        <div class="row">
            <h3 class="post-titles">House Rules</h3>
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
            <h3 class="post-titles">Price per night</h3>
            <div class="post-content post-price">
                <p>450 DKK/night</p>
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