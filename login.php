<?php

    // $sUserEmail = $_SESSION['sEmail'];

    $sInjectCss = '<link rel="stylesheet" href="css/index.css">';

    // session_start();
    // if( !isset($_SESSION['sEmail']) ){
        require_once __DIR__.'/top.php'; 
    // }

    // require_once __DIR__.'/top-logged-in.php'; 
  
?>

<div class="page">
    <div class="container" id="login" class="page">
        <h1>Login</h1>
        <form id="frmLogin" method="POST">   
            <label for="">Email</label>
            <input id="txtLoginEmail" name="txtLoginEmail" type="text" data-type="email" size="50" value="">
            <label for="">Password</label>
            <input id="txtLoginPassword" name="txtLoginPassword" type="password" data-type="password" minlength="3" maxlength="100" value="">
            <button id="login-btn" class="btn pullCenter">Login</button>
        </form>
        <div class="form-links">
            <a class="link" href="signup.php">Don't have an account yet? <span>Signup</span></a>
        </div>
    </div>
    
</div>


<?php
$sLinktoScript = '<script src="js/login.js"></script>';
require_once __DIR__.'/bottom.php'; 

?>