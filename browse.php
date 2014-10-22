<html>
<head>
<title>
concept browser
</title>
</head>
<body>

<?php

  $files = scandir('upload');
  sort($files); // this does the sorting
  foreach($files as $file){
    if (($file != ".") && ($file != "..")) {
      echo $file;
?>
      <audio controls>
        <source src="http://rogerlsmith.net/concept/upload/<?= $file; ?>" type="audio/mpeg" >
      </audio>
      <br />
<?php
    }
}
?>
</body>
</html>
