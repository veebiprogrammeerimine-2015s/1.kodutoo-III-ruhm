<?php

		// LOGIN.PHP
		//echo $_POST["email"];
		//echo $_POST["password"];
		// errori muutujad peavad igal juhul olemas olema
		$email_error = "";
		$password_error= "";	
		$username_error= "";
		$email1_error= "";
		$password1_error="";
		
		//kontrollime et keegi vajutas input nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST")  {
			//echo "keegi vajutas nuppu";
			//kontrollin et e-post ei oleks tühi
			
			if (empty($_POST["email"]) ) {
				$email_error = "See väli on kohustuslik";
				
				
			}
			
			//kontrollin, et parool ei ole tühi
			if (empty($_POST["password"]) ) {
				$password_error= "Kirjuta parool";
			} else {
				// kui oleme siia jõudnud, siis parool ei ole veel tühi
				// kontrollin
				if(strlen($_POST["password"]) < 8) {
				$password_error= "Peab olema vähemalt 8 tähemärki pikk"; 
				}
				
			}
			
			if (empty($_POST["username"]) ) {
				$username_error = "Kirjuta oma kasutajanimi";
			}
			if (empty($_POST["email1"]) ) {
				$email1_error = "Kirjuta oma email";
			}
			if (empty($_POST["password1"]) ) {
				$password1_error= "Kirjuta parool";
			} else {
			
				if(strlen($_POST["password1"]) < 8) {
					$password1_error= "Peab olema vähemalt 8 tähemärki pikk"; 
				}
				
			}
			
			
			
		}
		

?>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<h2>Login</h2>
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"><?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"><?php echo $password_error;?> <br><br>
			<input type="submit" value="Log in"> 
		</form>
		
	<h2>Loo kasutaja</h2>
		<form action="login.php" method="post">
			<input name="create_username" type="text" placeholder="Kasutaja"><?php echo $username_error; ?><br></br>  
			<input name="create_email" type="email" placeholder="E-post"><?php echo $email_error;?> <br></br>
			<input name="create_password" type="password" placeholder="Parool"><?php echo $password_error;?> <br></br>
			<input type="submit" value="Loo kasutaja">
		</form>

	Minu mvp ideeks oleks midagi redditi sarnast või siis mingi foorumi taoline leht. Foorumis saaks igaüks oma teema luua ja vastavalt selle oma pilte või mõtteid postitada. Kui sellest asja ei saa siis võiks mingi teemale see foorumi
		keskenduda(näiteks arvuti,internet jne.).
</body>
</html>