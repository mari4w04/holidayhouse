<?php
// validate name
$iPriceNight = $_POST['txtPriceNight'] ?? '';
if( !ctype_digit($iPriceNight)  ){ sendResponse(-1, __LINE__, 'Price can only contain numbers');  }
if( $iPriceNight < 1  ){ sendResponse(-1, __LINE__, 'It is not a valid amount');  }

// write price
require_once __DIR__.'/../connect.php';
$stmt = $db->prepare('INSERT INTO houses_to_rent(`house_price`) VALUES (:iPriceNight)');
$stmt->bindValue(':iPriceNight', $iPriceNight);
$stmt->execute();

// pass post id to receipt page
require_once __DIR__.'/../connect.php';
$stmt = $db->prepare('SELECT * FROM houses_to_rent WHERE id = :sPostId');
$stmt->bindValue(':sPostId', $sPostId);
$stmt->execute(); // Check if this works
$aRows = $stmt->fetchAll();
$jPost = $aRows[0];

session_start();

$_SESSION['sPostId'] = $jPost->id;

header("Location: ../../../host-receipt.php");

// **************************************************

function sendResponse($bStatus, $iLineNumber, $sMessage){
  echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message": "'.$sMessage.'"}';
  exit;
}


