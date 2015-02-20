<?php

function registerUser( $u, $e, $p ) {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";

    // Ensure that the user fills out fields 
    if( empty( $u ) ) 
        { die( "Please enter a username." ); } 
    if( empty( $p ) ) 
        { die( "Please enter a password." ); } 
    if( !filter_var( $e, FILTER_VALIDATE_EMAIL)) 
        { die( "Invalid E-Mail Address" ); } 

    // Check if the username is already taken
    $query = " 
        SELECT 
            1 
        FROM users 
        WHERE 
            username = :username 
    "; 
    $query_params = array( ':username' => $u ); 
    try { 
        $stmt = $db->prepare( $query ); 
        $result = $stmt->execute( $query_params ); 
    } 
    catch( PDOException $ex ){ die( "Failed to run query: " . $ex->getMessage ( ) ); } 
    
    $row = $stmt->fetch( ); 
    if( $row )
        { die( "This username is already in use" ); }
        
    $query = " 
        SELECT 
            1 
        FROM users 
        WHERE 
            email = :email 
    ";
    
    $query_params = array( 
        ':email' => $e 
    );
    
    try { 
        $stmt = $db->prepare ( $query ); 
        $result = $stmt->execute($query_params); 
    }
    
    catch( PDOException $ex){ die( "Failed to run query: " . $ex->getMessage( ));} 
    $row = $stmt->fetch(); 

    if( $row ){ die( "This email address is already registered" ); } 

    // Add row to database 
    $query = " 
        INSERT INTO users ( 
            username, 
            password, 
            salt, 
            email 
        ) VALUES ( 
            :username, 
            :password, 
            :salt, 
            :email 
        ) 
    "; 

    // Security measures
    $salt = dechex( mt_rand( 0, 2147483647 )) . dechex( mt_rand( 0, 2147483647 )); 
    $password = hash( 'sha256', $p . $salt); 
    for( $round = 0; $round < 65536; $round++ ){ $password = hash('sha256', $password . $salt); } 
    
    $query_params = array( 
        ':username' => $u, 
        ':password' => $password, 
        ':salt' => $salt, 
        ':email' => $e 
    );
    
    try {  
        $stmt = $db->prepare( $query ); 
        $result = $stmt->execute( $query_params ); 
    } 
    catch ( PDOException $ex ){ die ( "Failed to run query: " . $ex->getMessage( ) ); } 
    
    return ( 0 );
}
?>
