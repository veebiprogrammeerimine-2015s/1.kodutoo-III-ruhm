<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $error = "";
        $email_error = "";
        $pswd_error = "";

        if(empty($_POST['username'])){
            $email_error = "Email kohustuslik!";
        }

        if (empty($_POST['password'])){
            $pswd_error = "Password kohustuslik!";
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $username;
        echo $password;

    }
?>

<html>
    <head></head>
    <body>
        <form action="login.php" method="post">
            <input type="email" name="username" id="username" placeholder="Email"><? echo $email_error;?>
            <input type="password" name="password" id="password" placeholder="password"><? echo $pswd_error;?>
            <input type="submit" name="login" id="login" value="Login">
        </form>
    </body>
</html>
