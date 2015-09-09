<?php

	$email_error = "";
	$password_error = "";
	
	//echo $_POST["email"]
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		echo "Keegi vajutas nuppu!";
		
		if ( empty($_POST["email"]) ) {
			$email_error = "*E-mail on vale.";
		}
		if ( empty($_POST["password"]) ) {
			$password_error = "Password on vale.";

		} else {
			
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "Peab olema vähemalt 8 tähemärki pikk.";	
				
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
	
		<form action="login.php" method="post">
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
			<input type="submit" value="Log in">
		</form>
	<h2>Create User</h2>
</body>
</html>