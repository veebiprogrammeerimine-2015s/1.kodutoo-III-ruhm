<?php

		//LOGIN.PHP
		//tühjade väljade kontrolliks
		$email_error = "";
		$pw_error = "";
		
		//kontrollime et keegi vajutas input nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			
			
			
			//kontrollin et e-post, password ei ole tühi
			
			if (empty($_POST["email"])) {
				
				$email_error = "See väli on kohustuslik";
				
				
			}
			if (empty($_POST["password"])) {
				
				$pw_error = "See väli on kohustuslik";
				
				
			} else {
				
				//parool ei ole tühi ja kontrollime mitu tähemärki on
				if(strlen($_POST["password"]) < 8 ) {
					$pw_error = "Parool peab olema vähemalt 8 tähemärki pikk!";
				}
				
			}
		if (empty($_POST["username"])) {
				
				$email_error = "See väli on kohustuslik";
				
				
			}
			
		
		
		
		
		
		}
		
		
		
		

?>
<html>
<head>
	<title>Login peidž</title>
</head>
<body>
	<h2>Logi sisse</h2>
	
	<form action="login.php" method="post" >
		<input type="email" name="email" placeholder="E-post"> <?php  echo $email_error;  ?> <br><br>
		<input type="password" name="password" placeholder="Parool"> <?php  echo $pw_error;  ?> <br><br>
		<input type="submit" value="Log in"> <br><br>
	</form>
	<br><br>
	<h2>Loo kasutaja</h2>
		
	<form action="login.php" method="post" >
		<input type="text" name="username" placeholder="Kasutajanimi"> <?php  echo $email_error;  ?> <br><br>
		<input type="password" name="password" placeholder="Parool"> <?php  echo $pw_error;  ?> <br><br>
		<input type="password" name="password" placeholder="Sisestage parool uuesti"> <?php  echo $pw_error;  ?> <br><br>
		<input type="submit" value="Registreeri"> <br><br>
	</form>
	
	
	
	
</body>
</html>