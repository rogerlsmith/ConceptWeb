<!--
    browse.php
-->

<html>
    <head>
        <title> concept browser </title>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    </head>
    <body>

<?php

    $files = scandir('upload');
    sort($files);                         // this does the sorting
?>
        <div style="display:inline;">

<?php
        foreach($files as $file) {
            if (($file != ".") && ($file != "..") && ($file != "private") ) {
?>
        <div style="display:inline-block;min-width:250px;overflow:hidden;">
            <?= $file; ?>
        </div>
            
        <div style="display:inline-block;min-width:250px;overflow:hidden;">
            <audio controls>
              <source src="http://rogerlsmith.net/concept/upload/<?= $file; ?>" type="audio/mpeg" >
            </audio>
        </div>
<?php
    }
?>
    </div><div style="clear:both;"></div>
<?php
}
?>
    </body>
</html>

