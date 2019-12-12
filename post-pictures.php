<?php
    // require_once 'top.php'; 
    $sInjectCss = '<link rel="stylesheet" href="css/style.css">';
    require_once __DIR__.'/top.php'; 
?>


<div class="page">
    <form id="frmUploadHousePhotos" action="apis/api-set-house-photos.php" method="POST" enctype="multipart/form-data"> 
        <div class="row home-type">
            <h3 class="post-titles">Upload photos</h3>
            <input id="file-input" type="file" name="fileToUpload"  multiple>
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




