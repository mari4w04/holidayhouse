<?php 

    $sHouseId = $_GET['houseid'] ?? '';

    $sInjectCss = '<link rel="stylesheet" href="./css/apartment-view.css">';

    session_start();
    if( !isset($_SESSION['sEmail']) ){
        require_once __DIR__.'/top.php'; 
    }else{
        require_once __DIR__.'/top-logged-in.php'; 
    }



    require_once 'connect.php';
    $stmt = $db->prepare( 'SELECT houses_to_rent.house_title, houses_to_rent.house_price, houses_to_rent.house_photo_url, houses_to_rent.house_description, cities.city_name, cancellation_descriptions.cancellation_description FROM houses_to_rent 
        INNER JOIN cities ON houses_to_rent.house_city_fk = cities.id 
        INNER JOIN cancellation_descriptions ON houses_to_rent.house_cancellation_fk = cancellation_descriptions.id 
        WHERE houses_to_rent.id = :sHouseId' );
    $stmt->bindValue(':sHouseId', $sHouseId);
    $stmt->execute();
    $aRows = $stmt->fetchAll();


    $aResults = array();
    foreach( $aRows as $aRow ){
        $sHouseTitle = $aRow->house_title;
        $sHousePrice = $aRow->house_price;
        $sHousePhotoUrl = $aRow->house_photo_url;
        $sCityName = $aRow->city_name;
        $sHouseDescription = $aRow->house_description;
        $sCancellationDescription = $aRow->cancellation_description;
    }


    $stmt2 = $db->prepare( 'SELECT holiday_house_users.first_name, holiday_house_users.last_name, holiday_house_users.photo_url FROM holiday_house_users
        INNER JOIN houses_to_rent ON houses_to_rent.user_fk = users.id 
        WHERE houses_to_rent.id = :sHouseId' );
    $stmt2->bindValue(':sHouseId', $sHouseId);
    $stmt2->execute();
    $aRows2 = $stmt2->fetchAll();
    $aResults2 = array();
    foreach( $aRows2 as $aRow ){
        $sFullName = $aRow->first_name.' '.$aRow->last_name;
        $sUserPhotoUrl = $aRow->photo_url;
    }


?>

<div class="img-slider">
    <img class="header-img" src="<?= $sHousePhotoUrl ?>">
</div>

<div class="page apartment-view-page">
    
    <div id="contentContainer">
        
        <div id="mainContainer">
            <div id="apt-intro">
                <div class="apt-intro-details">
                    <h2 class="title"><?= $sHouseTitle ?></h2>
                    <p class="city"><i class="fas fa-map-marker-alt"></i><?= $sCityName ?></p>
                    <p class="description"><?= $sHouseDescription ?></p>
                </div>
                <div class="host-details">
                    <div>
                        <img class="host-pic" src="./images/<?= $sUserPhotoUrl ?>">
                        <p class="host-name"><?= $sFullName ?></p>
                    </div>

                </div>
            </div>
            <div class="long-grey-line"></div>
            <div class="apt-details">
                <div class="amenities">
                    <p class="fake-heading">Amenities</p>

                    <div class="icons-grid">
                        <?php 
                            $stmt = $db->prepare( 'SELECT amenities.amenity_name FROM house_amenities
                            INNER JOIN houses_to_rent ON house_amenities.house_fk = houses_to_rent.id
                            INNER JOIN amenities ON house_amenities.amenity_fk = amenities.id
                            WHERE houses_to_rent.id = :sHouseId' );
                            $stmt->bindValue(':sHouseId', $sHouseId);
                            $stmt->execute();
                            $aRows = $stmt->fetchAll();

                            $aResults = array();
                            foreach( $aRows as $aRow ){
                                if ($aRow->amenity_name == 'Wifi'){
                                    $amenityIcon = '<i class="fas fa-wifi"></i>';
                                } else if ($aRow->amenity_name == 'TV'){
                                    $amenityIcon = '<i class="fas fa-tv"></i>';
                                } else if ($aRow->amenity_name == 'Breakfast'){
                                    $amenityIcon = '<i class="fas fa-utensils"></i>';
                                } else {
                                    $amenityIcon = '';
                                };

                                echo "
                                <p>
                                    $amenityIcon $aRow->amenity_name
                                </p>
                                ";
                            }

                            if ($aRows == []){
                                echo 'No amenities';
                            };
                        ?>
                    </div> 

                </div>
                <div class="long-grey-line"></div>
                <div class="house-rules">
                    <p class="fake-heading">House rules</p>
                    <div class="icons-grid">

                        <?php 
                            $stmt = $db->prepare( 'SELECT rules.rule_name FROM house_rules
                            INNER JOIN houses_to_rent ON house_rules.house_fk = houses_to_rent.id
                            INNER JOIN rules ON house_rules.rule_fk = rules.id
                            WHERE houses_to_rent.id = :sHouseId' );
                            $stmt->bindValue(':sHouseId', $sHouseId);
                            $stmt->execute();
                            $aRows = $stmt->fetchAll();

                            $aResults = array();
                            foreach( $aRows as $aRow ){
                                if ($aRow->rule_name == 'No smoking'){
                                    $ruleIcon = '<i class="fas fa-smoking-ban"></i>';
                                } else if ($aRow->rule_name == 'No pets'){
                                    $ruleIcon = '<i class="fas fa-paw"></i>';
                                } else if ($aRow->rule_name == 'No parties'){
                                    $ruleIcon = '<i class="fas fa-glass-cheers"></i>';
                                } else {
                                    $ruleIcon = '';
                                };

                                echo "
                                <p>
                                    $ruleIcon $aRow->rule_name
                                </p>
                                ";
                            }

                            if ($aRows == []){
                                echo 'No house rules';
                            };
                        ?>
                    </div>
                </div>
                <div class="long-grey-line"></div>
                <div class="cancellation">
                    <p class="fake-heading">Cancellation</p>
                    <p><?= $sCancellationDescription ?></p>
                </div>
            </div>
        </div>

        <div id="boxedContainer">
            <div class="payment-box">
                <div class="price">
                    <strong><p>DKK <span><?= $sHousePrice ?></span> / night</p></strong>
                </div>
                <div class="long-grey-line"></div>
                <div class="pricex2">
                    <p>DKK <?= $sHousePrice ?> x2 nights</p>
                    <p class="pricetag" id="pricetag">DKK <span>2000</span></p>
                </div>
                <div class="long-grey-line"></div>
                <div class="cleaning-fee">
                    <p>Cleaning fee</p>
                    <p class="pricetag-cleaning pricetag">DKK <span>100</span></p>
                </div>
                <div class="long-grey-line"></div>
                <div class="breakfast-fee">
                    <p>Breakfast fee</p>
                    <p class="pricetag-beakfast pricetag">DKK <span>50</span></p>
                </div>
                <div class="long-grey-line"></div>
                <div class="total">
                    <strong><p>Total:</p></strong>
                    <strong><p class="pricetag total-price">DKK <span>2150</span></p></strong>
                </div>

                <button class="reserve">RESERVE</button>
            </div>
        </div>


    </div>
</div>



<?php 
    $sLinktoScript = '<script src="js/apartment-view.js"></script>';
    require_once 'bottom.php'; 
?>
