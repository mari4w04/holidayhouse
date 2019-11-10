<?php

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

    <div class="page">
        <div class="container">
            <form action="apis/api-signup.php" method="POST"> 
                <label for="">First Name</label>
                <input id="txtSignupFirstName" name="txtSignupFirstName" type="text" data-type="name" placeholder="First Name" size="20" value="">
                <label for="">Last Name</label>
                <input id="txtSignupLastName" name="txtSignupLastName" type="text" data-type="name" placeholder="Last Name" size="20" value="">
                <label for="">Email</label>
                <input id="txtSignupEmail" name="txtSignupEmail" type="text" data-type="email" placeholder="Email" size="50" value="">
                <label for="">Password</label>
                <input id="txtSignupPassword" name="txtSignupPassword" type="password" data-type="password" placeholder="Password" minlength="3" maxlength="100" value="">
                <label for="">Repeat Password</label>
                <input id="txtConfirmPassword" name="txtConfirmPassword" type="password" data-type="password" placeholder="Repeat Password" minlength="3" maxlength="100" value="">
                <button class="btn">Signup</button>

                <div class="form-links">
                <a class="link" href="login.php">Already have an account with us?<span>Login</span></a>
                </div>
            </form>
        </div>
    </div>


<?php
require_once __DIR__.'/bottom.php'; 