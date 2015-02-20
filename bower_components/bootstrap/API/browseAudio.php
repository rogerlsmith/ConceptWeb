<?php

function myMessages( ) {

//    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";
    
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
        die( "Failed to run query: " . $ex->getMessage( ) );     
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

function publicMessages( ) {
    
//    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";
    
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
        die( "Failed to run query: " . $ex->getMessage( ) );     
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
