<?php

	$email_error = "";
	$password_error = "";
	$name_error = "";
	
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
		if ( empty($_POST["name"]) ) {
			$name_error = "* Nimi puudub.";
			
		} else {
			
			if(ctype_alpha($_POST["name"]) ){
				
				$name_error = "Kasutada võib ainult tähti.";
				
			}
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
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
			<input type="submit" value="Log in">
		</form>
	<h2>Kasutaja loomine</h2>
	
		<form action="login.php" method="post">
			<input name="name" type="text" placeholder="Eesnimi"><?php echo $name_error = "";?><br><br>
			<input name="surname" type="text" placeholder="Perekonnanimi"><br><br>
			<input name="birth" type="date" placeholder="Sünniaasta"><br><br>
			<input name="username" type="text" placeholder="Kasutajanimi"><br><br>
			<input name="password" type="password" placeholder="Teie parool"> <?php echo $password_error; ?><br><br>
			<input name="password2" type="password" placeholder="Korda parool"><br><br>
			<input name="email" type="email" placeholder="Teie E-mail"> <?php echo $email_error; ?><br><br>
			<input type="submit" value="Loo kasutaja">
		</form>
</body>
</html>