<?php
require_once ('authentication.php'); // Let's Mandatory Export Passwords
session_start();

if(isset($_SESSION['entrance']) == true ){
    header("location:index.php");
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
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Archimedes</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Wellcome</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <?php
        if(isset($_POST['Submit'])){
            //$sonuc = password_verify($_POST['Password'], $Parola); //hash control is safer
            if( ($_POST['Username'] == $User->get_name()) && ($User->get_passwd() === $_POST['Password']) ) {
                $_SESSION['name'] = $User->get_name();
                $_SESSION['entrance'] = true;
                header("location:index.php");
                exit;
            } else {
                ?>
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Mistake!</strong> Information is incorrect.
                </div>
                <?php
            }
        }
        ?>
    </form>
</div>

<!-- Let's Import Jquery to Make Bootstrap Work -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap import -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
