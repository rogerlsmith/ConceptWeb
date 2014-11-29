<?php

function uploadPublicAudio ( ) {
    
    require "addAudio.php";
    $retVal = false;
    
    if ( isset ( $_FILES['file']['tmp_name'] ) ) {
        $file_path = "upload/";
        $file_path = $file_path . basename( $_FILES['file']['tmp_name']) .".mp3";
        $retVal = move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
    }
    
    return $retVal;
}

function uploadPrivateAudio ( ) {
    
    require "addAudio.php";
    $retVal = false;
    
    if ( isset ( $_FILES['file']['tmp_name'] ) ) {
        $file_path = "upload/private/";
        $file_path = $file_path . basename( $_FILES['file']['tmp_name']) .".mp3";
        $retVal = move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
    }
    
    return $retVal;
}

?>

