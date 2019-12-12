<?php 
    $sInjectCss = '<link rel="stylesheet" href="./css/apartment-view.css">';
    session_start();
    if( !isset($_SESSION['sEmail']) ){
        header('Location: login.php');
    }
    require_once __DIR__.'/top-logged-in.php'; 

?>

<div class="img-slider">
    <img class="header-img" src="./images/house2.jpg">
</div>

<div class="page">
    
    <div id="contentContainer">
        <div id="boxedContainer">
                <div class="host-box">
                    <div class="host-details-profile">
                        <img class="host-pic" src="./images/profilepic.jpg">

                        <?php 
                            require_once __DIR__.'/connect.php';
                            $stmt = $db->prepare('SELECT first_name, last_name FROM users WHERE email=:sUserEmail');
                            $stmt->bindValue(':sUserEmail', $_SESSION['sEmail']);
                            $stmt->execute();
                            $aRows = $stmt->fetchAll();
                            foreach ($aRows as $jRow) {
                                echo '<div class="checkbox">
                                        <p class="host-name">'.$jRow->first_name.'</p>
                                        <p class="host-last-name">'.$jRow->last_name.'</p>                                
                                </div>';
                            }
                        ?>
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
                        <p class="contact-email-content">
                            <?php echo $_SESSION['sEmail']?>
                        </p>  
                    </div>
                    <div class="edit-contact"><i class="fas fa-chevron-right"></i></div>
                    <div class="contact-password">
                        <p class="contact-password-label">Password</p>  
                        <p class="contact-password-content">Last update 1 day ago. </p>  
                    </div>
                    <div class="edit-contact"><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class='long-grey-line'></div>
                <div class="apt-details">   
                    <h5>Listed Properties</h5>    
                    <div class="white-card">           
                        <div class="apt-details-image-container">
                            <img src="holidayhouse/<?php
                                    require_once __DIR__.'/connect.php';
                                    $stmt = $db->prepare('SELECT `house_photo_url` from `house_photos` ORDER BY `house_fk` DESC LIMIT 1');
                                    $stmt->execute();
                                    $aRows = $stmt->fetchAll();
                                    foreach ($aRows as $jRow) {
                                        echo $jRow->house_photo_url;
                                    }
                                ?>" 
                            alt="" class="house-img"/>
                        </div>

                        <div class='house-text apt-details-text-container'>
                            <h5 class="house-title"></h5>
                            <p><span class='house-price'></span> DKK</p>
                        </div>
                    </div>
                    <div class='long-grey-line'></div>
                </div>
 

            </div>

                </div>
            </div>
    </div>
</div>



<?php 
    $sLinktoScript = '<script src="js/index.js"></script><script src="js/profilePage.js"></script>';
    require_once 'bottom.php'; 
?>
