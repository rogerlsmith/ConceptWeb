<?php
        if (isset($_FILES['uploaded_file'])) {
                $file_path = "upload/";
                $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
            move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path);
            file_put_contents("log.txt", serialize($_FILES));
        }
?>
