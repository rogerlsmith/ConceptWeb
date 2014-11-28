<?php

    require "../API/addAudio.php";
    require "../API/uploadAudio.php";
    
    var_dump ($_POST);
    
    if(!empty($_POST)) {
        switch ($_POST['method']) {
            
            case "public":
                uploadPublicAudio();
                break;
            
            case "private":
                uploadPrivateAudio();
                break;
            
            default:
                break;
        }
    }
?>
