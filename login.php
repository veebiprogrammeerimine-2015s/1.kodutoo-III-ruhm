<?php

	// LOGIN.PHP
	//echo $_POST["email"];
	$email_error = "";
	$password_error = "";
	
	
	
	
	
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
		if
	}
?>

<html>

<head>
	<title>Login page</title>
</head>

<body>

		<span style="color:#80BFFF">
		
	<h2>Log in</h2>
		
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="e-mail"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="password"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in" >
		</form>
	

		<body style="background-color:#CCEEFF">
		
		
		<span style="color:#80BFFF">

	<h2>Create user</h2>
		
		<form action="create_user.php" method="post" >
			<input name="email" type="email" placeholder="e-mail" > <br><br>
			<input name="password" type="password" placeholder="repeat password" > <?php echo $password_error; ?> <br><br><br><br>
			<input name="name" type="name" placeholder="first name" > <br><br>
			<input name="name" type="name" placeholder="last name" > <br><br>
			<input type="submit" value="Create user">
		</form>	
			
			
			
			
 	
</body>


</html>



