<?php

    require "../API/addAudio.php";
    require "../API/uploadAudio.php";

    if ( !empty ( $_POST ) ) {
        switch ( $_POST['method'] ) {
            
            case "public":

                $retObj =  uploadPublicAudio ( );
                var_dump($retObj);
                return;
                if ( $retObj['success'] ) {
 
                    addAudio ( $retObj['path'] );
                }
                break;
            
            case "private":
                
                $retObj =  uploadPrivateAudio ( );
                if ( $retObj['success'] ) {
 
                    addAudio ( $retObj['path'] );
                }
                break;
            
            default:
                break;
        }
    }
?>
