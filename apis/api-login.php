<?php

$sEmail = $_POST['txtLoginEmail'] ?? '';
if( empty($sEmail) ){sendResponse(0, __LINE__, "email field is empty");}
if( !filter_var( $sEmail, FILTER_VALIDATE_EMAIL ) ){ sendResponse(0, __LINE__, "email field doesn't match with an email format");  }


$sUserPassword = $_POST['txtLoginPassword'] ?? '';

if( empty($sUserPassword) ){ sendResponse(0, __LINE__,"password field empty");  }
if( strlen($sUserPassword) < 3 ){ sendResponse(0, __LINE__, "password should be more than 4 characters"); }
if( strlen($sUserPassword) > 50 ){ sendResponse(0, __LINE__, "password should be less than 50 characters"); }


// sql command
require_once __DIR__.'/../connect.php';
$stmt = $db->prepare('SELECT * FROM users WHERE email = :loggedEmail');
$stmt->bindValue(':loggedEmail', $sEmail);
$stmt->execute(); // Check if this works
$aRows = $stmt->fetchAll();
$jUser = $aRows[0];


if( !password_verify($sUserPassword, $jUser->password) ){
  header('Location: ../login.php');
  { sendResponse(0, __LINE__, "password doesnt match"); }
}

// SUCCESS
session_start();

$_SESSION['sUserEmail'] = $sEmail;

header("Location: ../profile.php");


// **************************************************

function sendResponse($bStatus, $iLineNumber, $sMessage){
  echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message": "'.$sMessage.'"}';
  exit;
}
