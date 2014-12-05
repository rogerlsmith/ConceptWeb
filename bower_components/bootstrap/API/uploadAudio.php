<?php

function uploadAudio ( $tmp_file ) {
    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/API/addAudio.php';

    $retObj = null;
 
    if ( isset ( $tmp_file ) ) {
        
        $file_path = $_SERVER['DOCUMENT_ROOT'] . '/concept/upload/';
        $file_path = $file_path . basename( $tmp_file ) . '.mp3';
       
        $retObj['success'] = move_uploaded_file ( $tmp_file, $file_path );
        $retObj['path'] = $file_path;
    }

    return $retObj;
}

?>

