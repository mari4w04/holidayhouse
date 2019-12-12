<?php 
    $sInjectCss = '<link rel="stylesheet" href="./css/apartment-view.css">';
    session_start();
    if( !isset($_SESSION['sEmail']) ){
        header('Location: login.php');
    }
    require_once __DIR__.'/top-logged-in.php'; 

?>

<div class="page">
    
    <div id="contentContainer">
        <div id="boxedContainer">
                <div class="host-box">
                    <div class="host-details-profile">
                        <img class="host-pic" src="./images/profilepic.jpg">
                        <p class="host-name">Birgitte</p>
                        <p class="host-last-name">Something</p>
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
                <div class="" id="houseResults">
                <div class='white-card'>
                    <img src="images" alt=''>
                    <div class='house-text'>
                        <h5>Local Storage Title</h5>
                        <span class='house-price'>local storage price kr./night</span>
                    </div>
                </div>
                <div class='long-grey-line'>

                </div>
 

            </div>

                </div>
            </div>
    </div>
</div>



<?php 
    $sLinktoScript = '<script src="js/index.js"></script>';
    require_once 'bottom.php'; 
?>
