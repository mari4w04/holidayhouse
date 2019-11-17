<?php

// ini_set('display_errors',0);

require_once '../connect.php';

$sSearchDate = $_GET['sSearchDate'] ?? '';
$sUserEmail = $_GET['sUserEmail'] ?? '';

// $sSearchDate = $sSearchDate

$stmt = $db->prepare( 'SELECT houses_to_rent.house_title, houses_to_rent.house_price, houses_to_rent.house_photo_url
FROM houses_to_rent
INNER JOIN users ON houses_to_rent.user_fk = users.id 
WHERE NOT users.email = :sUserEmail AND :sSearchDate BETWEEN available_start_date AND available_end_date' );

// $stmt->bindValue(':sSearchDate', $sSearchDate);
$stmt->bindValue(':sUserEmail', $sUserEmail);
$stmt->bindValue(':sSearchDate', $sSearchDate);
$stmt->execute();
$aRows = $stmt->fetchAll();

$aResults = array();
foreach( $aRows as $aRow ){
    $aResults[] = "<a href='#'><div class='white-card'><img src='$aRow->house_photo_url' alt=''><div class='house-text'><h5>$aRow->house_title</h5><span class='house-price'>$aRow->house_price kr./night</span></div></div><div class='long-grey-line'></div></a>";
}

if($aRows == []){
    $aResults[] = "<div class=''>No houses found, try another date or time frame</div>";
}
sendResponse(1, __LINE__, implode(" ",$aResults));



/********************************/

function sendResponse($iStatus, $iLine, $sMessage){
    echo '{"status": '.$iStatus.', "code": "'.$iLine.'", "message":"'.$sMessage.'"}';
    exit;
}