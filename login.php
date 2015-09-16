<?php

	// LOGIN.PHP
	//echo $_POST["email"];
	$email_error = "";
	$password_error = "";
	$name_error = "";
	
	
	
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST" ) {
		
		//echo "keegi vajutas nuppu";
		//kontrollin, et email ei ole tühi
		
		
		if ( empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
		
		}
		
		//kontrollin, et parool ei ole tühi
		
		if (empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			
			// kui oleme siia jõudnud, siis parool ei ole tühi
			//kontrollin, et oleks vähemalt 8 sümbolit pikk
			if(strlen($_POST["password"]) <8) {
				$password_error = "Parool on liiga lühike, peab olema vähemalt 8 tähemärki pikk!";
			}
		}

	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST" ) {
		
		if (empty($_POST["e-mail"])){
			$email_error = "See väli on kohustuslik";
		}
		if (empty($_POST["pass"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			

			if(strlen($_POST["pass"]) <8) {
				$password_error = "Parool on liiga lühike, peab olema vähemalt 8 tähemärki pikk!";
			}
	
		}
		if (empty ($_POST["name"])){
			$name_error = "See väli on kohustuslik";
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
			<input name="email" type="email" placeholder="e-mail"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="password"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in" >
		</form>
		
		
		

	<h2>Create user</h2>
		
		<form action="create_user.php" method="post" >
			<input name="e-mail" type="email" placeholder="e-mail" > <?php echo $email_error; ?> <br><br>
			<input name="pass" type="password" placeholder="password" > <?php echo $password_error; ?> <br><br><br><br>
			<input name="name" type="name" placeholder="first name" > <?php echo $name_error; ?> <br><br>
			<input name="name" type="name" placeholder="last name" > <?php echo $name_error; ?> <br><br>
			<input type="submit" value="Create user" >
		</form>	
			
			
			
			
 	
</body>


</html>