<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holiday House</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <?php 
      echo $sInjectCss ?? ''; 
      echo $sHeaderLink ?? '';
      ?>
    <script src="https://kit.fontawesome.com/3b2912fa62.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="">
        <div class="nav-left">
            <a href="index"><img class="logo" src="images/logo.png"></a>
        </div>
        <div class="nav-right">
            <a href="search" id="explore-housing">Explore housing</a>
            <a class="nav-login" href="login">Log in</a>
            <a class="nav-signup" href="signup">Sign up</a>
      </div>
  </nav>

