<?php

	// LOGIN.PHP
	$email_error = "";
	$passw_error = "";
	$fname_error = "";
	$lname_error = "";
	//echo $_POST["email"];
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		//kontrollin et e-post ei ole tühi
		if (empty($_POST["email"])){
			$email_error = "see väli on kohustulik";	
		}
		//kontrollin et parool ei ole tühi
		if (empty($_POST["password"])){
			$passw_error = "see väli on kohustulik";
		} else {
			
			//kui oleme siia jõudnud, siis parool pole tühi
			if(strlen($_POST["password"]) < 8){
				$passw_error="peab olema vähemalt 8 tähemärki";
			}
		}
		//kontrollin et eesnimi ei ole tühi
		if (empty($_POST["first name"])){
			$fname_error = "see väli on kohustulik";
		}
		//kontrollin et perekonnanimi ei ole tühi
		if (empty($_POST["last name"])){
			$lname_error = "see väli on kohustulik";
		}	
		if (empty($_POST["email"])){
			$email_error = "see väli on kohustulik";	
		}
		if (empty($_POST["password"])){
			$passw_error = "see väli on kohustulik";	
		} else {			
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
	
		<form action="login.php" method="post">
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $passw_error; ?> <br><br>
			<input name="first name" type="text" placeholder="Eesnimi"> <?php echo $fname_error; ?><br><br>
			<input name="last name" type="text" placeholder="Perekonnanimi"> <?php echo $lname_error; ?><br><br>
			Sugu:
			<input name="sugu" type="radio" value="Naine">Naine
			<input name="sugu" type="radio" value="Mees">Mees<br><br>
			<input name="vanus" type="number_format" placeholder="Vanus"><br><br>
			<input type="submit" value="Submit"> <br><br>
		</form>	
	
</body>


</html>