<?php
        $file = fopen ("output.txt", "w");
        fwrite ($file, "File: ");
        fwrite ($file, $_FILES['file']['tmp_name'] );
        fclose ($file);

        if (isset($_FILES['file']['tmp_name'])) {
            $file_path = "upload/";
            $file_path = $file_path . basename( $_FILES['file']['tmp_name']) .".mp3";
            move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
}
?>
