<?php
	//login.php
	$email_error = "";
	$password_error ="";
	
	//echo $_POST["email"];  //ANNAB MUUTUJA MIS AADRESSIREAL ON
	// kontrollime et keeegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		//echo "keegi vajutas nuppu";
		
		//kontrollin et e-mail ei ole tühi
		
		if( empty($_POST["email"])){
			$email_error = "See väli on kohustuslik";
		}
		//kontrollin, et parool ei ole tühi
		
		if( empty($_POST["password"])){
			$password_error = "See väli on kohustuslik";
		} else {
			
			if(strlen ($_POST["password"]) < 8){
				$password_error = "Peab olema vähemalt 8 tähemärki pikk";
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
			<input name="email" type="email" placeholder="E-mail"> <?php echo $email_error; ?><br><br>
			<input name="password"type="password" placeholder="Password"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in">
		</form>
	<h2>Creat user</h2>
</body>


</html>