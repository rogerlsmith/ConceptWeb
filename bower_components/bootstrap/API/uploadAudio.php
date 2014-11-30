<?php

function uploadPublicAudio ( ) {

    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/API/addAudio.php";
    require "$path";
    
    $retObj = null;

    if ( isset ( $_FILES['file']['tmp_name'] ) ) {
        $file_path = $_SERVER['DOCUMENT_ROOT'] . "/concept/upload/";
        $file_path = $file_path . basename( $_FILES['file']['tmp_name'] ) .".mp3";
        $retObj['success'] = move_uploaded_file ( $_FILES['file']['tmp_name'], $file_path );
        $retObj['path'] = $file_path;
    }
    
    return $retObj;
}

function uploadPrivateAudio ( ) {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/API/addAudio.php";
    require "$path";
    
    $retObj = null;
    
    if ( isset ( $_FILES['file']['tmp_name'] ) ) {
        $file_path = $_SERVER['DOCUMENT_ROOT'] . "/conceptupload/private/";
        $file_path = $file_path . basename ( $_FILES['file']['tmp_name'] ) .".mp3";
        $retObj['success'] = move_uploaded_file ( $_FILES['file']['tmp_name'], $file_path );
        $retObj['path'] = $file_path;
    }
    
    return $retObj;
}

?>

