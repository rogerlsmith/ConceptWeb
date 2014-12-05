<?php

    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';

    file_put_contents($file, json_encode($_POST));
    
    require "../API/addAudio.php";
    require "../API/uploadAudio.php";
    
    if ( ( !empty ( $_POST ) ) && ( $_POST['user_id'] != null ) ) {

        $retObj =  uploadAudio ( $_FILES['file']['tmp_name'] );
        if ( $retObj['success'] ) {

            addAudio ( $_POST['user_id'], $retObj['path'], $_POST['method'] );
            
        }        
    }
?>
