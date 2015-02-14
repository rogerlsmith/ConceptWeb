<?php

    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';
    file_put_contents ( $file, $_POST, FILE_APPEND );

    $json="";
    
    require "../API/browseAudio.php";
    
    $postdata = file_get_contents("php://input");
    $data = json_decode ( $postdata );

    
    file_put_contents ( $file, $data, FILE_APPEND );
    

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
