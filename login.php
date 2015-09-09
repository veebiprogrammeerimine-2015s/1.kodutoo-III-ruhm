<?php
	//LOGIN.PHP
	//echo $_POST["email"];
	$email_error = "";
	$password_error = "";
	//kontrollin et input nuppu vajutati
	if($_SERVER["REQUEST_METHOD"]== "POST") {
		//echo "Keegi vajutas nupppu";
		
		if(empty($_POST["email"])) {
			$email_error = "See väli on kohustuslik";
		}
		//Kontrollin, et parool ei ole tühi
		if(empty($_POST["password"])) {
			$password_error = "See väli on kohustuslik";
		}	else {
			//kui siia jõudnud siis pole tühi
			//Kontrollin parooli pikkust
			if(strlen($_POST["password"]) <8) {
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}
	}
?>

<html>
<head>
	<title>Login page></title>
</head>
<body>
	<h2>Log in</h2>
	<form action="login.php" method="post" >
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input type ="submit" value="Logi sisse">
	</form>
	<h2>Create user</h2>
</body>
</html>