<?php

try{

    $sUserName = 'root';
<<<<<<< HEAD
    $sPassword = 'Pern2';
=======
    $sPassword = 'ilovepizza';
>>>>>>> 220ab2f72be237e2f95a39f27e970e94e4422a75
    $sConnection = "mysql:host=localhost; dbname=holiday_house; charset=utf8mb4";

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