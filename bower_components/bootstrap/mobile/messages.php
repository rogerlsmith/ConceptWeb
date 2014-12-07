<?php

    $json="";
    require "../API/browseAudio.php" ;
    
    if ( !empty ( $_POST ) ) {
        
        switch ( $_POST['method'] ) {
            case "all" :
                $json = myMessages ( );
                $json += publicMessages ( );
                break;
            case "myMessages" :
                $json = myMessages ( );
                break;
            case "publicMessages" :
                $json = publicMessages ( );
                break;
            default:
                break;
        }
    }
    
    echo $json;
?>
