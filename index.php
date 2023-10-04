<?php
  session_start();
  if(isset($_SESSION['entrance']) == false){
    header("location:login.php");
	  exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Archimedes</title>
  </head>
  <body>
    
    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo $_SESSION['name']?></h3>
      </div>
      
      <div class="jumbotron">
        <h1>Sample Application</h1>
        <h3>Wellcome <?php echo $_SESSION['name']?>!</h3>
        <p class="lead">Mathematics reveals its secrets only to those who approach it with pure love, for its own beauty.</p>
        <p><a class="btn btn-lg btn-danger" href="./logout.php" role="button">Logout</a></p>
      </div>
      <footer class="footer">
        <p>&copy;thanghv</p>
      </footer>

    </div>
  </body>
</html>