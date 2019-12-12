<?php
    session_start();
    if( !isset($_SESSION['sEmail']) ){
        require_once __DIR__.'/top.php'; 
    }else{
        require_once __DIR__.'/top-logged-in.php'; 
    }
?>

<h1 class="indexheading">Congratulations! :)</h1>



<img src="images/houses.svg">

<template id="foundHouseTemplate">
    <div></div>
</template>

<?php 
    $sLinktoScript = '<script src="js/index.js"></script>';
    require_once 'bottom.php'; 
?>