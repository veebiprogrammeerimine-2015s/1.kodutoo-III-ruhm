<?php
$email_error = "";
$pswd_error = "";
$name_error = "";
$pname_error = "";
$remail_error = "";
$rpswd_error = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Validate login form
    if(isset($_POST['login'])){
        if(empty($_POST['email'])){
            $email_error = "Email kohustuslik!";
        }else{
            echo $_POST['email'];
        }

        if (empty($_POST['password'])){
            $pswd_error = "Password kohustuslik!";
        }else{
            echo $_POST['password'];
        }
    }

    // Validate registration form
    if(isset($_POST['register'])){
        if(empty($_POST['email'])){
            $remail_error = "Email kohustuslik!";
        }

        if (empty($_POST['password'])){
            $rpswd_error = "Password kohustuslik!";
        }

        if (empty($_POST['first_name'])){
            $name_error = "Eesnimi kohustuslik!";
        }

        if (empty($_POST['last_name'])){
            $pname_error = "Perenimi kohustuslik!";
        }


        if (strlen($_POST['password']) < 8){
            $rpswd_error = "Salasõna peab olema vähemalt 8märgi pikkune!";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kodune töö 1</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
<div id="container">
    <div id="login_form">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="email" name="username" id="email" placeholder="Email"><? echo $email_error;?><br>
            <input type="password" name="password" id="password" placeholder="password"><? echo $pswd_error;?><br>
            <input type="submit" name="login" value="Login">
        </form>
    </div>

    <div id="registration_form">
        <h1>Register new user</h1>
        <form action="login.php" method="post">
            <label for="email">E-mail *</label><input type="email" name="username" placeholder="somename@somepath.ext"><? echo $remail_error;?><br>
            <label for="password">Password *</label><input type="password" name="password" placeholder="password"><? echo $rpswd_error;?><br>
            <label for="text">Eesnimi *</label><input type="text" name="first_name" placeholder="Rait"><? echo $name_error;?><br>
            <label for="text">Perenimi *</label><input type="text" name="last_name" placeholder="Avastu"><? echo $pname_error;?><br>
            <label for="email">Sünniaeg</label><input type="date" step="1" min="1940-01-01" name="synniaeg"><br>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
    <div id="text">
        <h1>Projekti kirjeldus</h1>
        <p>Minu projektiks saab olema logistika rakendus. Kasutajatele saab määrata erinevaid rolle ning sellest lähtuvalt ka piirangud rakenduse funktsioonide kasutamiseks.</p>
    </div>
</div>

</body>
</html>
