<?php

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

    <div class="page">

<form action="apis/api-be-host.php" method="POST"> 
    <div class="row home-type">
        <div class="post-titles">Home Type</div>
        <div class="post-content">
            <input type="text" name="" placeholder="Apartment">
            <input type="text" name="" placeholder="House">
            <input type="text" name="" placeholder="Condo">
            <input type="text" name="" placeholder="Villa">
        </div>
    </div>
    <div class="row">
        <div class="post-titles">Accommodates</div>
        <div class="post-content col-2">
            <div class="select-css">
                <select name="txtAccommodates">
                    <option value="accommodates1">1</option>
                    <option value="accommodates2">2</option>
                    <option value="accommodates3">3</option>
                    <option value="accommodatesMore">3+</option>
                </select>
            </div>
            <div class="family-friendly">
                <label class="checkbox-label">
                    <input type="checkbox" name="bFamilyFriendly">
                    <span class="checkbox-custom rectangular"></span>
                </label>
                <div class="checkbox-title">Family Friendly</div>
            </div>
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
                                <label class="checkbox-label">
                                    <input type="checkbox">
                                    <span class="checkbox-custom rectangular"></span>
                                </label>
                            </div>';
                    }
                ?>
        </div>
    </div> 
    <div class="row">
        <div class="post-titles">Cancellation</div>
        <div class="select-css">
        <select name="txtCancellation">
            <?php 
                require_once __DIR__.'/connect.php';
                $stmt = $db->prepare('SELECT * FROM cancellation_descriptions');
                $stmt->execute();
                $aRows = $stmt->fetchAll();
                foreach ($aRows as $jRow) {
                    echo '<option value="'.$jRow->cancellation_description.'">'.$jRow->cancellation_description.'</option>';
                }
            ?>
        </select>
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
                            <label class="checkbox-label">
                                <input type="checkbox">
                                <span class="checkbox-custom rectangular"></span>
                            </label>
                        </div>';
                }
            ?>
        </div>
    </div>  
    <div class="row">
        <div class="post-titles">Price per night</div>
        <div class="post-content post-price">
            <label for="">400 DKK/night is a recommended price for your area</label>
                <div class="price-input">
                <input id="iPriceNight" name="txtPriceNight" type="text" placeholder="" value="">
                <div class="currency">DKK</div>
            </div>
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