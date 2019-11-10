<?php

try{

  $sUserName = 'root'; 
  $sPassword = '';
  $sConnection = "mysql:host=localhost; dbname=holiday_house; charset=utf8mb4";
  
  $aOptions = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC /* associative array is object inside object */
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ 
  );
  $db = new PDO( $sConnection, $sUserName, $sPassword, $aOptions );
}catch( PDOException $e){
  echo $e;
  // echo '{"status":0,"message":"cannot connect to database"}';
  exit();
}





