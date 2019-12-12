<?php
ini_set('display_errors',0);

$sEmail = $_POST['txtLoginEmail'] ?? '';
if( empty($sEmail) ){sendResponse(0, __LINE__, "email field is empty");}
if( !filter_var( $sEmail, FILTER_VALIDATE_EMAIL ) ){ sendResponse(0, __LINE__, "email field doesn't match with an email format");  }

$sUserPassword = $_POST['txtLoginPassword'] ?? '';
if( empty($sUserPassword) ){ sendResponse(0, __LINE__,"password field empty");  }
if( strlen($sUserPassword) < 3 ){ sendResponse(0, __LINE__, "password should be more than 4 characters"); }
if( strlen($sUserPassword) > 50 ){ sendResponse(0, __LINE__, "password should be less than 50 characters"); }

require_once __DIR__.'/../connect.php';
$stmt = $db->prepare('SELECT * FROM holiday_house_users WHERE email = :loggedEmail');
$stmt->bindValue(':loggedEmail', $sEmail);
$stmt->execute(); // Check if this works
$aRows = $stmt->fetchAll();
$jUser = $aRows[0];

if( !password_verify($sUserPassword, $jUser->password)){
  sendResponse(0, __LINE__, "Password doesnt match"); 
}
session_start();
$_SESSION['sEmail'] = $sEmail;
sendResponse(1, __LINE__, $sEmail); 

function sendResponse($bStatus, $iLineNumber, $sMessage){
  echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message": "'.$sMessage.'"}';
  exit;
}
