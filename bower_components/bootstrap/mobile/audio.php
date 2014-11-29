<?php

    require "../API/addAudio.php";
    require "../API/uploadAudio.php";
    
    if(!empty($_POST)) {
        switch ($_POST['method']) {
            
            case "public":
                if ( uploadPublicAudio ( ) ) {
                    addAudio ( );
                }
                break;
            
            case "private":
                if ( uploadPrivateAudio ( ) ) {
                    addAudio ( );
                }
                break;
            
            default:
                break;
        }
    }
?>
