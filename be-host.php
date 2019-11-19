<?php

$sInjectCss = '<link rel="stylesheet" href="">';
  

require_once __DIR__.'/top.php'; 
?>

<div class="page">
    <div class="page-title"> 
            <h2>Become a Host.</h2>
            <h4>Rent your holiday home and earn money.</h4>
    </div>

    <form action="" method="POST"> 
        <div class="row home-type">
            <div class="post-titles">Home Type</div>
            <div class="post-content tabs">
                <?php 
                    require_once __DIR__.'/connect.php';
                    $stmt = $db->prepare('SELECT * FROM house_types');
                    $stmt->execute();
                    $aRows = $stmt->fetchAll();
                    foreach ($aRows as $jRow) {
                        echo '<div class="home-type-box">'.$jRow->house_type_name.'</div>';
                    }
                ?>
            </div>

            
        </div>
        <div class="row">
            <div class="post-titles">Accommodates</div>
            <div class="col-2">
                <div class="select-css">
                    <select id="accommodates" name="txtAccommodates">
                        <option value="accommodates1">1 guest</option>
                        <option value="accommodates2">2 guests</option>
                        <option value="accommodates3">3 guests</option>
                        <option value="accommodatesMore">4 + guests</option>
                    </select>
                </div>
                <div class="family-friendly">
                    <div class="checkbox">
                        <div class="checkbox-title">Family Friendly</div>
                        <label class="checkbox-label">
                            <input value="Family Friendly" id="family-friendly" type="checkbox">
                            <span class="checkbox-custom rectangular"></span>
                        </label>
                    </div>
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
                                    <input class="amenity-item" value="'.$jRow->amenity_name.'" id="amenity'.$jRow->id.'" type="checkbox">
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
            <select id="cancellation" name="txtCancellation">
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
                                    <input value="'.$jRow->rule_name.'" id="rule'.$jRow->id.'" type="checkbox">
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
                <button id="continue-to-receipt-btn" class="btn post-content">Continue</button>
            </div>
        </form>
    </div>
</div>


<?php
    $sLinktoScript = '<script type="text/javascript" src="js/beHost.js"></script>'; 
    require_once __DIR__.'/bottom.php'; 
 ?>