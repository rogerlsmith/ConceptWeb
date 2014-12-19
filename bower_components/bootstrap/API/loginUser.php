<?php

function loginUser ( $u, $p ) {
    
    $file = $_SERVER['DOCUMENT_ROOT'] . '/concept/bower_components/bootstrap/mobile/logfile.txt';

    $row = null;

    $path = $_SERVER['DOCUMENT_ROOT'] . "/concept/bower_components/bootstrap/config/config.php";
    require "$path";
    
    $loginObj['status'] = "fail";
    $loginObj['user'] = null;

    if ( !empty ( $u ) && ( !empty ( $p ) ) ) {
        
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array ( 
            ':username' => $u
        ); 
          
        try { 
            $stmt = $db->prepare ( $query ); 
            $result = $stmt->execute ( $query_params ); 
        } 
        catch ( PDOException $ex ) {
            die ( "Failed to run query: " . $ex->getMessage ( ) ); 
        } 

        $row = $stmt->fetch(); 
        if ( $row ) { 
            $check_password = hash ( 'sha256', $p . $row['salt'] );
            
            for($round = 0; $round < 65536; $round++){
                $check_password = hash ( 'sha256', $check_password . $row['salt'] );
            }
            
            if ( $check_password === $row['password'] ) {
                $loginObj['status'] = "success";
                unset ( $row['salt'] ); 
                unset ( $row['password'] ); 
                $loginObj['user'] = $row;
            } 
        }  
    }
    return ( json_encode ( $loginObj ) );
}

?> 
