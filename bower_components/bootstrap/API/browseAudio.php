<?php

function myMessages ( ) {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";
    
    $query = " 
        SELECT 
            owner, 
            path, 
            private, 
        FROM audio 
        WHERE 
            private = :private 
    ";
    
    $query_params = array ( 
        ':private' => '1'
    ); 

    try { 
        $stmt = $db->prepare ( $query ); 
        $result = $stmt->execute ( $query_params ); 
    } 
    catch ( PDOException $ex ){ 
        die ( "Failed to run query: " . $ex->getMessage ( ) );
    } 
    
    $messages = $stmt->fetch(); 
    if ( $messages ) {
        $i = 0;
        
        foreach ( $messages as $message ) {
            $obj[$i] = $message;
            $i++;
        }
    }
    return json_encode( $obj );
}

function publicMessages ( ) {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";
    
    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';

    
//    $oldquery = " 
//        SELECT 
//            owner, 
//            path, 
//            private, 
//        FROM audio 
//        WHERE 
//            private = :private 
//    ";
//    $query_params = array ( 
//        ':private' => 0
//    ); 
    $query = " 
        SELECT * 
        FROM audio
        WHERE
        owner = :owner
    ";
        
        $query_params = array ( 
        ':owner' => '5'
    ); 


    try { 
        $stmt = $db->prepare( $query ); 
        $result = $stmt->execute( $query_params ); 
    } 
    catch ( PDOException $ex ){ 
        die( "Failed to run query: " . $ex->getMessage ( ) );     
    }
    
    $messages = $stmt->fetchAll( ); 
    
    if( $messages ) {
        $i = 0;
        
        foreach( $messages as $message ) {
            
            $obj[$i] = $message;
            $i++;
        }
    }
    
    return json_encode( $obj );
}
?>
