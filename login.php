<?php
	//LOGIN.PHP
	//echo $_POST["email"];
	$email_error = "";
	$email1_error = "";
	$password_error = "";
	$password1_error = "";
	$password_repeat_error = "";
	
	//Muutujad andmebaasi väärtuste jaoks
	$email = "";
	$email1 = "";
	$password = "";
	$password1 = "";
	$password_repeat = "";
	
	
	//kontrollin et input nuppu vajutati
	
	if($_SERVER["REQUEST_METHOD"]== "POST") {
		//echo "Keegi vajutas nupppu";
		
		if(empty($_POST["email"])) {
			$emai_error = "See väli on kohustuslik";
		}
		//Kontrollin, et parool ei ole tühi
		if(empty($_POST["password"])) {
			$password_error = "See väli on kohustuslik";
		}	else {
			//kui siia jõudnud siis pole tühi
			//Kontrollin parooli pikkust
			if(strlen($_POST["password"]) <8) {
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}
	}
	
	//Kontrollin, et registreeri nuppu vajutati
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		//echo "keegi vajutas register nuppu";
		if(isset($_POST["register"])) {
			echo "Vajutas register nuppu";
			 
		}
			
		if (empty($_POST["email"])) {
				$email1_error = "See väli on kohustuslik";
		} //else {
			//	$email = test_input($_POST["email"]);
		}	
		if(empty($_POST["password"])) {
			$password1_error = "See väli on kohustuslik.";
			
		}
	
	
	
	function test_input($data) {
		// võtab ära tühikud, enterid, tabid
		$data = trim($data);
		// tagurpidi kaldkriipsud
		$data = stripslashes($data);
		// teeb htmli tekstiks
		$data = htmlspecialchars($data);
		return $data;
	}
		
	?>	

<html>
<head>
	<title>Login page></title>
</head>
<body>
	<h2>Log in</h2>
	<form action="login.php" method="post" >
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input type ="submit" value="Logi sisse">
	</form>
	<h2>Create user</h2>
	<form action="login.php" method="post" >
		E-post:<br>
		<input name="email" type="email" placeholder="E-post" value="<?php echo $email1; ?>"> <?php echo $email1_error; ?><br>
		Parool:<br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password1_error; ?><br><br>
		<input name="register" type="submit" value="Registreeri"><br><br>
	</form>	
</body>
</html>