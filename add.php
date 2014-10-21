<?php
    $file = fopen ("output.txt", "w");
    fwrite ($file, "File: ");
    fwrite ($file, $_FILES['file']['tmp_name'] );
    fclose ($file);

    if (isset($_FILES['file']['tmp_name'])) {
        $file_path = "upload/";
        $file_path = $file_path . basename( $_FILES['file']['tmp_name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
        file_put_contents("log.txt", serialize($_FILES));
    }
?>

