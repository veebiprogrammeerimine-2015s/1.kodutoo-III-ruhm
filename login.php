<?php
	// LOGIN.PHP
	// errori muutujad peavad enne if'i olemas olema :)
	
	$email_error = "";
	$password_error = "";
	
	//echo $_POST["email"];
	
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		if (empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
			}
		
		// kontrollin, et parool ei ole tühi
		if (empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
			} else {
				
				// kui oleme siia jõudnud, siis parool ei ole tühi enam
				// kontrollin, et oleks vähemalt 8 sümbolit pikk
				if(strlen($_POST["password"]) < 8) {
					
					$password_error = "Password peab olema vähemalt 8 tähemärki pikk";
					
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
			<input name="email" type="email" placeholder="e-post"> <?php echo $email_error; ?><br> <br>
			<input name="password" type="password" placeholder="parool"> <?php echo $password_error; ?> <br> <br>
			<input type="submit" value="Log in"> <br> <br>
		</form>
	
	<h2>Create user</h2>
	
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="e-post"> <?php echo $email_error; ?><br> <br>
			<input name="password" type="password" placeholder="parool"> <?php echo $password_error; ?> <br> <br>
			<input name="password" type="password" placeholder="Insert password again"> <?php echo $password_error; ?> <br> <br>
			<input type="submit" value="Register"> <br> <br>
		</form>
	
	
</body>
</html>