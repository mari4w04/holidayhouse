<?php
// session_start();
// $sPostId = $_GET['sPostId'];

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

session_start();
if( !isset($_SESSION['sEmail']) ){
    require_once __DIR__.'/top.php'; 
}else{
    require_once __DIR__.'/top-logged-in.php'; 
}
?>

<div class="page">
    <div class="page-title"> 
        <h2>Become a Host.</h2>
        <h4>Rent your holiday home and earn money.</h4>
    </div>
  
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
            <?php 
                require_once __DIR__.'/connect.php';
                $stmt = $db->prepare('SELECT house_cancellation_fk, cancellation_description FROM houses_to_rent 
                                    INNER JOIN cancellation_descriptions ON houses_to_rent.house_cancellation_fk = cancellation_descriptions.id
                                    WHERE houses_to_rent.id=1');
                $stmt->execute();
                $aRows = $stmt->fetchAll();
                foreach ($aRows as $jRow) {
                    echo '<div class="checkbox">
                            <div class="checkbox-title">'.$jRow->cancellation_description.'</div>
                        </div>';
                }
            ?>
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
require_once __DIR__.'/bottom.php'; 

