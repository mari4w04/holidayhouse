<?php

try{
    $sUserName = 'cocovo_co_uk_holidayhouse'; /* connect via username not root, they can destroy all databases */
    $sPassword = 'devenv2020';
    $sConnection = "mysql:host=cocovo.co.uk.mysql; dbname=cocovo_co_uk_holidayhouse; charset=utf8mb4";

    $aOptions = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //throws the pdo exception, need to have it when using try catch for transactions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ //instead of associative arrays we fetch objects
        // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    $db = new PDO( $sConnection, $sUserName, $sPassword, $aOptions );
}catch( PDOException $e){
    echo $e;
    // echo '{"status":0,"message":"cannot connect to database"}';
    exit();
}