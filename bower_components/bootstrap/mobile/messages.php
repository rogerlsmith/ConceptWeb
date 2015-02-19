<?php

    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';

    $json="";
    require "../API/browseAudio.php";
    $postdata = file_get_contents("php://input");
    $data = json_decode ( $postdata );
    
    file_put_contents ( $file, $postdata, FILE_APPEND );

    if ( !empty ( $data ) ) {
        
        switch ( $data->method ) {
            
            case "all" :
                file_put_contents ( $file, 'getting all messages', FILE_APPEND );
                $json = myMessages ( );
                $json += publicMessages ( );
                break;
            
            case "private" :
                file_put_contents ( $file, 'getting private messages', FILE_APPEND );
                $json = myMessages ( );
                break;
            
            case "public" :
                file_put_contents ( $file, 'getting public messages', FILE_APPEND );
                $json = publicMessages ( );
                break;
            
            default:
                break;
        }
    }
    
    file_put_contents ( $file, $json, FILE_APPEND );
    echo $json;
?>
