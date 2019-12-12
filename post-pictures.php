<?php
    // require_once 'top.php'; 
    $sInjectCss = '<link rel="stylesheet" href="css/style.css">';

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
    <form id="frmUploadHousePhotos" action="apis/api-set-house-photos.php" method="POST" enctype="multipart/form-data"> 
        <div class="row home-type">
            <h3 class="post-titles">Upload photos</h3>
            <input id="file-input" class="btn" type="file" name="fileToUpload" style="color:transparent;" multiple>
        </div>

        <div id="preview-image-container">
            <!-- <img class="add-img1" src="" alt="">
            <img class="add-img" src="" alt="">
            <img class="add-img" src="" alt="">
            <img class="add-img" src="" alt=""> -->
        </div>

        <button class="btn post-content">Continue</button>

    </form>


</div>


<?php 
    $sLinktoScript = '<script src="js/previewImage.js"></script>';
    require_once 'bottom.php'; 
?>




