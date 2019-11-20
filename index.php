<?php
    session_start();
    if( !isset($_SESSION['sEmail']) ){
        require_once __DIR__.'/top.php'; 
    }else{
        require_once __DIR__.'/top-logged-in.php'; 
    }

?>

<h1 class="indexheading">Find your holiday home</h1>

<div class="small-container container">
    <div class="search-box">
        <form>
            <div class="first-row">
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
            </div>
            <div class="line-row"></div>
            <div class="second-row">
                <div class="date-in-box">
                    <label for="datein">Date in</label><br>
                    <input type="text" name="datein" id="datein" value="" />
                </div>
                <div class="date-out-box">
                    <label for="dateout">Date out</label><br>
                    <input type="text" name="dateout" id="dateout" value="" />
                </div>
                <div class="family-friendly-box">
                    <input type="checkbox" name="familyfriendly" id="familyfriendly"> <label for="familyfriendly">Family friendly</label>
                </div>
            </div>
            <div class="third-row">
                <a class="" id="searchForDate" href="">Find your holiday home</a>
            </div>
            
            
        </form>
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