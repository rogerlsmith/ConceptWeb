<?php

    require "../API/browseAudio.php" ;
    
    if ( !empty ( $_POST ) ) {
        
        switch ( $_POST['method'] ) {
            case "myMessages" :
                myMessages ( );
                break;
            case "publicMessages" :
                publicMessages ( );
                break;
        }
    }
?>
