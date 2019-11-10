<?php

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

<div class="page">
    <h1>Login</h1>
    <div class="container" id="login" class="page">
        <form action="apis/api-login.php" method="POST">   
            <label for="">Email</label>
            <input id="txtLoginEmail" name="txtLoginEmail" type="text" data-type="email" placeholder="Email" size="50" value="">
            <label for="">Password</label>
            <input id="txtLoginPassword" name="txtLoginPassword" type="password" data-type="password" placeholder="Password" minlength="3" maxlength="100" value="">
            <button class="btn pullCenter">Login</button>
        </form>
    </div>
    <div class="form-links">
        <a class="link" href="#">Forgot Password?</a>
        <a class="link" href="signup.php">Don't have an account yet? <span>Signup</span></a>
    </div>
</div>


<?php
require_once __DIR__.'/bottom.php'; 