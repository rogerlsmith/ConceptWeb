<?php
    if (isset($_FILES['file']['tmp_name'])) {
        $file_path = "upload/private/";
        $file_path = $file_path . basename( $_FILES['file']['tmp_name']) .".mp3";
        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
    }
?>
