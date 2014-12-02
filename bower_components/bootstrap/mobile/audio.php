<?php

    require "../API/addAudio.php";
    require "../API/uploadAudio.php";

    if ( !empty ( $_POST ) ) {
        switch ( $_POST['method'] ) {
            
            case "public":

                $retObj =  uploadPublicAudio ( );
                if ( $retObj['success'] ) {
 
                    addAudio ( $_POST['user_id'], $retObj['path'] );
                } 
                break;
            
            case "private":
                
                $retObj =  uploadPrivateAudio ( );
                if ( $retObj['success'] ) {
 
                    addAudio ( $_POST['user_id'], $retObj['path'] );
                }
                break;
            
            default:
                break;
        }
    }
?>
