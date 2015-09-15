<?php

	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema
	$email_error = "";
	$password_error = "";
	
	//echo $_POST["email"];
	
	//kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//kontrollin, et e-post ei ole tuhi
		
		$email_error = "";
		
		if (empty($_POST["email"]) ) {
			$email_error = "See vali on kohustuslik";
		}
		// kontrollime, et parool ei ole tuhi
		if (empty($_POST["password"]) ) {
			$passweord_error = "See vali on kohustuslik";
		} else {
			
		//kui oleme siia joudnud, siis parool ei ole tuhi
		
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "Peab olema vahemalt 8 tahemarki pikk!";
				
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
	
		<form action="newfile.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $email_error; ?><br><br>
			<input type="submit" value="Log in">
		</form>
		
	<h2>Create user</h2>
		<form action="newfile.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $email_error; ?><br><br>
			<input type="submit" value="Create">
		</form>
</body>
</html>