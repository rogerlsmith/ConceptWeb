
<?php

    require "API/registerUser.php";
 
    if ( !empty ( $_POST ) ) {
        $retVal = registerUser ( $_POST['username'], $_POST['email'], $_POST['password'] );
        header ( "Location: index.html" ); 
        die ( "Redirecting to index.html" ); 
    } 
?>
