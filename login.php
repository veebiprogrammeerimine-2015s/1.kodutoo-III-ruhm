<?php

	$email_error = "";
	$logpassword_error = "";
	$name_error = "";
	$surname_error = "";
	$username_error = "";
	$password2_error = "";
	$password_error = "";
	
	//echo $_POST["email"]
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		echo "Keegi vajutas nuppu!";
		
		if ( empty($_POST["email"]) ) {
			$email_error = "* E-mail on vale.";
		}
		if ( empty($_POST["logpassword"]) ) {
			$logpassword_error = "* Password on puudu.";

		} else {
			
			if(strlen($_POST["logpassword"]) < 8) {
				
				$logpassword_error = "* Peab olema vähemalt 8 tähemärki pikk.";
				
			}
			
		}
		if ( empty($_POST["password"]) ) {
			$password_error = "* Password on puudu.";

		} else {
			
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "* Peab olema vähemalt 8 tähemärki pikk.";
				
			}
			
		}
		if ( empty($_POST["name"]) ) {
			$name_error = "* Nimi puudub.";
			
		} else {
			
			if(ctype_alpha(str_replace(' ', '', $_POST["name"])) === false){
				
				$name_error = "* Kasutada võib ainult tähti.";
				
			}
		}
		if ( empty($_POST["surname"]) ) {
			$surname_error = "* Perekonnanimi puudub.";
			
		} else {
			
			if(ctype_alpha(str_replace(' ', '', $_POST["surname"])) === false){
				
				$surname_error = "* Kasutada võib ainult tähti.";
				
			}
		}
		if ( empty($_POST["username"]) ) {
			$username_error = "* Puudub kasutajanimi.";
			
		}
		if ($_POST["password"] != $_POST["password2"] )  {
			$password2_error = "* Parool pole sama.";
			
		}
		
	}
	
?>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
	
		<form action="login.php" method="post">
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
			<input name="logpassword" type="password" placeholder="Parool"> <?php echo $logpassword_error; ?><br><br>
			<input type="submit" value="Log in">
		</form>
	<h2>Kasutaja loomine</h2>
	
		<form action="login.php" method="post">
			<input name="name" type="text" placeholder="Eesnimi"> <?php echo $name_error; ?><br><br>
			<input name="surname" type="text" placeholder="Perekonnanimi"> <?php echo $surname_error; ?><br><br>
			<input name="birth" type="date" placeholder="Sünniaasta"><br><br>
			<input name="username" type="text" placeholder="Kasutajanimi"> <?php echo $username_error; ?><br><br>
			<input name="password" type="password" placeholder="Teie parool"> <?php echo $password_error; ?><br><br>
			<input name="password2" type="password" placeholder="Korda parool"> <?php echo $password2_error; ?><br><br>
			<input name="email" type="email" placeholder="Teie E-mail"> <?php echo $email_error; ?><br><br>
			<input type="submit" value="Loo kasutaja">
		</form>
</body>
</html>