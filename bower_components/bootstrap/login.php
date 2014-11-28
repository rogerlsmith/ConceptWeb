
<?php

    require( "API/loginUser.php" );

    $json = loginUser ( );
    $loginObj = json_decode ( $json );

    if ( $loginObj->status == "success" ) {
        $_SESSION['user'] = $loginObj->user;
        header("Location: my-messages.php"); 
        die("Redirecting to homepage"); 
    } 
    else { 
        print("Login Failed."); 
        $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
    } 

?>