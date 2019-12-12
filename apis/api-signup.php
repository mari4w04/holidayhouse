<?php
// validate name
$sFirstName = $_POST['txtSignupFirstName'] ?? '';
if( empty($sFirstName) ){ sendResponse(0, __LINE__, "First name field is empty");  }
if( strlen($sFirstName) < 2 ){ sendResponse(0, __LINE__, "First name can't be shorter than 2 characters"); }
if( strlen($sFirstName) > 50 ){ sendResponse(0, __LINE__, "First name can't be longer that 50 characters"); }

$sLastName = $_POST['txtSignupLastName'] ?? '';
if( empty($sLastName) ){ sendResponse(0, __LINE__, "Last name field is empty");  }
if( strlen($sLastName) < 2 ){ sendResponse(0, __LINE__, "Last name can't be shorter than 2 characters"); }
if( strlen($sLastName) > 50 ){ sendResponse(0, __LINE__, "Last name can't be longer that 50 characters"); }

$sEmail = $_POST['txtSignupEmail'] ?? '';
if( empty($sEmail) ){sendResponse(0, __LINE__, "email field is empty");}
if( !filter_var( $sEmail, FILTER_VALIDATE_EMAIL ) ){ sendResponse(0, __LINE__, "email field doesn't match with an email format");  }


$sUserPassword = $_POST['txtSignupPassword'] ?? '';
if( empty($sUserPassword) ){ sendResponse(0, __LINE__,"password field empty");  }
if( strlen($sUserPassword) < 3 ){ sendResponse(0, __LINE__, "password should be more than 4 characters"); }
if( strlen($sUserPassword) > 50 ){ sendResponse(0, __LINE__, "password should be less than 50 characters"); }

// validate confirm password
$sConfirmPassword = $_POST['txtConfirmPassword'] ?? '';
if( empty($sConfirmPassword) ){ sendResponse(0, __LINE__, "Confirm password field is empty");  }
if( $sUserPassword != $sConfirmPassword ){ sendResponse(0, __LINE__, "Password fields don't match");  }

$sUserPasswordHashed = password_hash( $sUserPassword, PASSWORD_DEFAULT );

$defaultPhoto = 'empty.jpg';

// sql command
require_once __DIR__.'/../connect.php';
$stmt = $db->prepare('INSERT INTO users (first_name, last_name, email, password, photo_url) VALUES (:signupFirstName, :signupLastName, :signupEmail, :sUserPasswordHashed, :sPhotoUrl)');
$stmt->bindValue(':signupFirstName', $sFirstName);
$stmt->bindValue(':signupLastName', $sLastName);
$stmt->bindValue(':signupEmail', $sEmail);
$stmt->bindValue(':sUserPasswordHashed', $sUserPasswordHashed);
$stmt->bindValue(':sPhotoUrl', $defaultPhoto);
$stmt->execute();

sendResponse(1, __LINE__, $sEmail); 

// header("Location: ../login.php");

// **************************************************

function sendResponse($bStatus, $iLineNumber, $sMessage){
  echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message": "'.$sMessage.'"}';
  exit;
}


