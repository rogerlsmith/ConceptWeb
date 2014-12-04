<?php

    require "../API/addAudio.php";
    require "../API/uploadAudio.php";

    if ( !empty ( $_POST ) ) {
        switch ( $_POST['method'] ) {
            
            case "public":

                $retObj =  uploadPublicAudio ( $_FILES['file']['tmp_name'] );
                if ( $retObj['success'] ) {
                    
                    addAudio ( $_POST['user_id'], $retObj['path'] );
                } 
                break;
            
            case "private":
                
                $retObj =  uploadPrivateAudio ( $_FILES['file']['tmp_name'] );
                if ( $retObj['success'] ) {
 
                    addAudio ( $_POST['user_id'], $retObj['path'] );
                }
                break;
            
            default:
                break;
        }
    }
?>
