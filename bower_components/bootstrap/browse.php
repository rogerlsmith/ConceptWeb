
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Roger L. Smith">
    <link rel="icon" href="../../favicon.ico">
    
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

    <title>Concept</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation"><a href="/concept/bower_components/bootstrap">Home</a></li>
          <li role="presentation"  class="active"><a href="browse.php">Browse</a></li>
          <li role="presentation"><a href="http://rogerlsmith.net/concept/InstallApp/hybridConcept.apk">Get the App</a></li>
          <li role="presentation"><a href="help.html">About</a></li>
          <li role="presentation"><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">Concept</h3>
      </div>

      <div class="jumbotron">
        
<?php
        $files = scandir('../../upload');
        sort($files); 
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

        }
?>

      <div class="footer">
        <p>&copy; <a href="http://rogerlsmith.net">ROGERLSMITH.NET</a> 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



