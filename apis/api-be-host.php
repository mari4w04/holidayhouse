<?php
// validate name
$iPriceNight = $_POST['txtPriceNight'] ?? '';
if( !ctype_digit($iPriceNight)  ){ sendResponse(-1, __LINE__, 'Price can only contain numbers');  }
if( $iPriceNight < 1  ){ sendResponse(-1, __LINE__, 'It is not a valid amount');  }

// sql command
require_once __DIR__.'/../connect.php';
$stmt = $db->prepare('INSERT INTO houses_to_rent(`house_price`) VALUES (:iPriceNight)');
$stmt->bindValue(':iPriceNight', $iPriceNight);
$stmt->execute();

header("Location: ../receipt.php");

// **************************************************

function sendResponse($bStatus, $iLineNumber, $sMessage){
  echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message": "'.$sMessage.'"}';
  exit;
}


