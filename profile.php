<?php 
    $sInjectCss = '<link rel="stylesheet" href="./css/apartment-view.css">';
    require_once 'top.php';

?>

<div class="img-slider">
    <img class="header-img" src="./images/house2.jpg">
</div>

<div class="page">
    
    <div id="contentContainer">
        <div id="boxedContainer">
                <div class="host-box">
                    <div class="host-details">
                        <img class="host-pic" src="./images/profilepic.jpg">
                        <p class="host-name">Birgitte</p>
                        <p class="host-last-name">Something</p>
                    </div>
                    <a href="" class="logout">Logout</a>
                </div>
            </div>

            <div id="mainContainer">
            <div class="page-title-profile"> 
                <h2>Welcome, good to see you!</h2>
                <h4>Manage your profile here.</h4>
            </div>
                <h2 class="title"></h2>
                <div id="auth-details">
                    <div class="contact-email">
                        <p class="contact-email-label">Email</p>  
                        <p class="contact-email-content">Brigitte Something</p>  
                    </div>
                    <div class="edit-contact"><i class="fas fa-chevron-right"></i></div>
                    <div class="contact-password">
                        <p class="contact-password-label">Password</p>  
                        <p class="contact-password-content">Last update 1 day ago. </p>  
                    </div>
                    <div class="edit-contact"><i class="fas fa-chevron-right"></i></div>
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
    </div>
</div>



<?php 
    $sLinktoScript = '<script src="js/index.js"></script>';
    require_once 'bottom.php'; 
?>
