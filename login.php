<?php

	// LOGIN.PHP
	echo $_POST["email"];
	
	//keegi näppis mu nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "   Näpud eemale!";
		//kontrollin et email poleks tühi
		$email_error = " ";
		$password_error = " ";
		
		if ( empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
		}
		
		//kontrollin, et parool ei ole tühi
		if ( empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			//kui oleme siia jõudnud siis parool ei ole tühi
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "peab olema vähemalt 8 tähemärki pikk";
			}		
		}
	}
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="Email"> <?php echo $email_error ?> <br><br>
			<input name="pass" type="password" placeholder="Parool"> <?php echo $password_error ?> <br><br>
			<input type="submit" value="Press here">
		</form>
	
	<h2>Create user</h2>
</body>
</html>