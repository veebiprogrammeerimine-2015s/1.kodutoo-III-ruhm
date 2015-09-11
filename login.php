<?php
$email_error = "";
$pswd_error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['submit'] == 'login'){
        if(empty($_POST['email'])){
            $email_error = "Email kohustuslik!";
        }

        if (empty($_POST['password'])){
            $pswd_error = "Password kohustuslik!";
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $username;
        echo $password;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>Kodune töö 1</head>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="login_form">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="email" name="username" id="email" placeholder="Email"><? echo $email_error;?><br>
        <input type="password" name="password" id="password" placeholder="password"><? echo $pswd_error;?><br>
        <input type="submit" name="login" class="login" value="Login">
    </form>
</div>

<div id="registration_form">
    <h1>Register new user</h1>
    <form action="login.php" method="post">
        <input type="email" name="username" placeholder="Email"><? echo $email_error;?><br>
        <input type="password" name="password" placeholder="password"><? echo $pswd_error;?><br>
        <input type="text" name="eesnimi" placeholder="password"><? echo $pswd_error;?><br>
        <input type="submit" name="resgister" class="login" value="Login">
    </form>
</div>
</body>
</html>
