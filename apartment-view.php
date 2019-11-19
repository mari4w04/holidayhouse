<?php 
    $sInjectCss = '<link rel="stylesheet" href="./css/apartment-view.css">';
    require_once 'top.php';

?>

<div class="img-slider">
    <img class="header-img" src="./images/house2.jpg">
</div>

<div class="page">
    
    <div id="contentContainer">
        
        <div id="mainContainer">
            <div id="apt-intro">
                <div class="apt-intro-details">
                    <h2 class="title">Charming apartment</h2>
                    <p class="city"><i class="fas fa-map-marker-alt"></i> Copenhagen</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et nisi et arcu pellentesque sollicitudin. Nullam sit amet vehicula enim, vitae pellentesque nulla. Sed sapien nulla, eleifend a ullamcorper eget, volutpat a lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras in rutrum diam.</p>
                </div>
                <div class="host-details-apartment">
                    <img class="host-pic" src="./images/profilepic.jpg">
                    <p class="host-name">Birgitte Something</p>
                </div>
            </div>
            <hr>
            <div class="apt-details">
                <div class="amenities">
                    <p class="fake-heading">Amenities</p>
                    <div class="icons-grid">
                        <p><i class="fas fa-wifi"></i> Wifi</p>
                        <p><i class="fas fa-utensils"></i> Breakfast</p>
                        <p><i class="fas fa-tv"></i> TV</p>
                    </div>
                </div>
                <hr>
                <div class="house-rules">
                    <p class="fake-heading">House rules</p>
                    <div class="icons-grid">
                        <p><i class="fas fa-smoking-ban"></i> No smoking</p>
                        <p><i class="fas fa-paw"></i> No pets</p>
                        <p><i class="fas fa-glass-cheers"></i> No parties</p>
                    </div>
                </div>
                <hr>
                <div class="cancellation">
                    <p class="fake-heading">Cancellation</p>
                    <p>Cancel up to 7 days prior to your stay</p>
                </div>
            </div>
        </div>

        <div id="boxedContainer">
            <div class="payment-box">
                <div class="price">
                    <strong><p>DKK 1000 / night</p></strong>
                </div>
                <hr>
                <div class="pricex2">
                    <p>DKK 1000 x2 nights</p>
                    <p class="pricetag">DKK 2000</p>
                </div>
                <hr>
                <div class="cleaning-fee">
                    <p>Cleaning fee</p>
                    <p class="pricetag">DKK 100</p>
                </div>
                <hr>
                <div class="breakfast-fee">
                    <p>Breakfast fee</p>
                    <p class="pricetag">DKK 50</p>
                </div>
                <hr>
                <div class="total">
                    <strong><p>Total:</p></strong>
                    <strong><p class="pricetag">DKK 2150</p></strong>
                </div>

                <button class="reserve">RESERVE</button>
            </div>
        </div>


    </div>
</div>



<?php 
    $sLinktoScript = '<script src="js/index.js"></script>';
    require_once 'bottom.php'; 
?>
