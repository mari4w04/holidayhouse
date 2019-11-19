<?php
    $sCity = $_GET['city'] ?? '';
    $iGuests = $_GET['guests'] ?? '';
    $sHouseType = $_GET['housetype'] ?? '';
    $sDateIn = $_GET['datein'] ?? '';
    $sDateOut = $_GET['dateout'] ?? '';
    $sFamilyFriendly = $_GET['isfamilyfriendly'] ?? '';
    $sUserEmail = 'a@a.com' ?? '';
    $sHeaderLink = "<script> 
            window.sCity = '$sCity'
            window.iGuests = '$iGuests'
            window.sHouseType = '$sHouseType'
            window.sDateIn = '$sDateIn'
            window.sDateOut = '$sDateOut'
            window.sFamilyFriendly = '$sFamilyFriendly'
        </script>";

    require_once 'top.php'; 
    require_once 'connect.php';
    

    
?>

<div class="searchbar">
        <div class="search-box">         
            <div class="location-box">
                <label for="location">Location</label><br>
                <select name="location" id="location">
                    <?php
                        require_once __DIR__.'/connect.php';
                        $stmt = $db->prepare('SELECT city_name FROM cities');
                        $stmt->execute();
                        $aRows = $stmt->fetchAll();
                        $i=0;
                        foreach($aRows as $jRow){
                            $i++;
                            echo "
                                <option value='$i'>
                                    $jRow->city_name
                                </option>
                                ";
                        }
                    ?>
                </select>
            </div>
            <div class="gray-line"></div>
            <div class="guest-box">
                <label for="guests">Guests</label><br>
                <select name="guests" id="guests">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
            <div class="gray-line"></div>
            <div class="type-box">
                <label for="housetype">House type</label><br>
                <select name="housetype" id="housetype">
                    <?php
                        require_once __DIR__.'/connect.php';
                        $stmt = $db->prepare('SELECT house_type_name FROM house_types');
                        $stmt->execute();
                        $aRows = $stmt->fetchAll();
                        $i=0;
                        foreach($aRows as $jRow){
                            $i++;
                            echo "
                                <option value='$i'>
                                    $jRow->house_type_name
                                </option>
                                ";
                        }
                    ?>
                </select>
            </div>
            <div class="gray-line"></div>
            <div class="date-in-box">
                <label for="datein">Date in</label><br>
                <input type="text" name="datein" id="datein" value="" />
            </div>
            <div class="gray-line"></div>
            <div class="date-out-box">
                <label for="dateout">Date out</label><br>
                <input type="text" name="dateout" id="dateout" value="" />
            </div>
            <div class="gray-line"></div>
            <div class="family-friendly-box">
                <input type="checkbox" name="familyfriendly" id="familyfriendly"> <label for="familyfriendly">Family friendly</label>
            </div>


            <button class="" id="searchForDate">Go</button>

        </div>    

</div>

<div class="search-row search-results">
    <div class="left-panel">
        

        <div class="">
            <div class="" id="houseResults">
                    <!-- <p style="color: lightgray;">Select a date period in the search bar on the left</p> -->

                    <?php 

                        

                        $sDateInShort = substr($sDateIn, 0, -3);

                        $stmt = $db->prepare( 'SELECT houses_to_rent.house_title, houses_to_rent.house_price, houses_to_rent.house_photo_url, houses_to_rent.id
                            FROM houses_to_rent
                            INNER JOIN users ON houses_to_rent.user_fk = users.id 
                            WHERE NOT users.email = :sUserEmail AND :sDateInShort BETWEEN available_start_date AND available_end_date' );
                        $stmt->bindValue(':sUserEmail', $sUserEmail);
                        $stmt->bindValue(':sDateInShort', $sDateInShort);
                        $stmt->execute();
                        $aRows = $stmt->fetchAll();


                        $aResults = array();
                        foreach( $aRows as $aRow ){
                            echo "
                            <a href='apartment-view.php?houseid=$aRow->id'><div class='white-card'><img src='$aRow->house_photo_url' alt=''><div class='house-text'><h5>$aRow->house_title</h5><span class='house-price'>$aRow->house_price kr./night</span></div></div><div class='long-grey-line'></div></a>
                            ";
                        }

                    ?>
                    
                    
           
            </div>
        </div>

    </div>

    <div class="right-panel">
       
    </div>
</div>

<template id="foundHouseTemplate">
    <div></div>
</template>

<?php 
    $sLinktoScript = '<script src="js/search.js"></script>';
    require_once 'bottom.php'; 
?>