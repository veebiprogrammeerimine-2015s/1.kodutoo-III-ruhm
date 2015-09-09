<?php

	// LOGIN.PHP
	$email_error = "";
	$passw_error = "";
	//echo $_POST["email"];
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		//echo "keegi vajutas nuppu";
		//kontrollin et e-post ei ole tühi
		if (empty($_POST["email"])){
			$email_error = "see väli on kohustulik";
		}
		if (empty($_POST["password"])){
			$passw_error = "see väli on kohustulik";
		} else {
			
			//kui oleme siia jõudnud, siis parool pole tühi
			if(strlen($_POST["password"]) < 8){
				$passw_error="peab olema vähemalt 8 tähemärki";
			}
		}
	}
?>
<html>
<head>
	<title>Login Page</title>
</head>

<body>
	<h2>Log in</h2>
	
		<form action="login.php" method="post">
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $passw_error; ?> <br><br>
			<input type="submit" value="log in"> <br><br>
		</form>
	<h2>Create user</h2>
</body>


</html>