<?php
	//LOGIN.PHP
	
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$surename_error = "";
	$username_error = "";
	
	//echo $_POST€["email"];
	
	//kontrollime et keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
			//echo "keegi vajutas nuppu";
			
			//kontrollin et e-post ei ole tühi
			
			if ( empty($_POST["email"]) ) {
				$email_error = "See väli on kohustuslik";
				
			}
			
			//kontrollin et parool ei ole tühi
			 if ( empty($_POST["password"]) ) {
				 $password_error = "See väli on kohustuslik";
			} else {
				
				//kui oleme siia jõudnud, siis parool ei ole tühi
				//konrollin et oleks vähemalt 8 üsmbolit pikk
				if(strlen($_POST["password"]) < 8) {
					
					$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
					}
			}
			
			//kontrollin et nimi ja perekonnanime väljad ei oleks tühjad
			if ( empty($_POST["name"]) ) {
				$name_error = "See väli on kohustuslik";
				
			}
			if ( empty($_POST["surename"]) ) {
				$surename_error = "See väli on kohustuslik";
				
			}
			//kontrooli et kasutajanimi ei oleks tühi ja et see oleks vährmalt 3 tähemärki pikk
			if ( empty($_POST["username"]) ) {
				$username_error = "See väli on kohustuslik";
				
			} else {
				
				if(strlen($_POST["username"]) < 3) {
					
					$username_error = "Peab olema vähemalt 3 tähemärki pikk!";
					}
			}
			
	}
?>

<html>


<body bgcolor="99FFCC">

	<h2>Log in</h2>
		
	  <form action="login.php" method="post">	
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error;?><br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error;?><br><br>
		<input type="submit" value="Log in">
	  </form>	
	<h2>Create user</h2>
	
		<form action="Create user.php" method="post">	
		<input name="name" type="name" placeholder="Eesnimi"><?php echo $name_error;?>&nbsp;&nbsp;&nbsp;&nbsp;<input name="username" type="username" placeholder="Kasutajanimi"><?php echo $username_error;?> <br><br>
		<input name="surename" type="surename" placeholder="Perekonnanimi"><?php echo $surename_error;?>&nbsp;&nbsp;&nbsp;&nbsp;<input name="password" type="password" placeholder="Parool"> <?php echo $password_error;?> <br><br>
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error;?><br><br>
		<input type="submit" value="Create user">
	  </form>	
</body>
</html>