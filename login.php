<?php


	// LOGIN.PHP
	// echo $_POST["email"];


	$email_error = "";
	$password_error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") {		
			//echo "keegi vajutas nuppu";
		if (empty($_POST["email"]) )  {
			$email_error = "see väli on kohustuslik";
		}
		if (empty($_POST["password"]) )  {
			$password_error = "see väli on kohustuslik";
		} 
		else {
				//siis pole password tyhi
			if(strlen($_POST["password"]) < 8)	{
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}			
	}

?>
<html>
<head>
<title>Login page</title>
</head>

<body>
	<h2>log in</h2>
		
		<form action="login.php" method="post">
		<input name="email"e type="email" placeholder = "email"> <?php echo $email_error;  ?><br><br>
		<input name="password" type="password" placeholder = "password"> <?php echo $password_error;  ?><br><br>
		<input type="submit" value="login" name="login">
		</form>


	<h2>Registreeru</h2>
<?php

	$name1_error = "";
	$name2_error = "";
	$username_error = "";
	$email1_error = "";
	$email2_error = "";
	$password1_error = "";
	$password2_error = "";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name1"]) )  {
			$name1_error = "see väli on kohustuslik";
		}
		if (empty($_POST["name2"]) )  {
			$name2_error = "see väli on kohustuslik";
		}
		if (empty($_POST["username"]) )  {
			$username_error = "see väli on kohustuslik";
		}	
		if (empty($_POST["email1"]) )  {
			$email1_error = "see väli on kohustuslik";
		}
		if (empty($_POST["email2"]) )  {
			$email2_error = "see väli on kohustuslik";
		}
		if (empty($_POST["password1"]) )  {
			$password1_error = "see väli on kohustuslik";
		} 		
		if (empty($_POST["password2"]) )  {
			$password2_error = "see väli on kohustuslik";
		} 
		else {
			//siis pole password tyhi
			if(strlen($_POST["password2"]) < 8)	{
				$password2_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
			if(strlen($_POST["password1"]) < 8)	{
				$password1_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}			
	}
?>

<form action="login.php" method="POST"><br><br>
<input name="name1" type="text" placeholder="eesname" /><?php echo $name1_error;  ?><br><br>
<input name="name2" type="text" placeholder="perekonna name" /><?php echo $name2_error;  ?><br><br>
<input name="username" type="text" placeholder="username" /><?php echo $username_error;  ?><br><br>
<input name="email1" type="email" placeholder="Email" /><?php echo $email1_error;  ?><br><br>
<input name="email2" type="email" placeholder="uuesti Email" /><?php echo $email2_error;  ?><br><br>
<input name="password1" type="password" placeholder="password" /><?php echo $password1_error;  ?><br><br>
<input name="password2" type="password" placeholder="uuesti password" /><?php echo $password2_error;  ?><br><br>
<input type="submit" value="Registreeri" name="registreeru" /><br><br>



</body>
<h2>MVP teemaks luua kasutajate põhine anonüümne vestlus portaal ajax päringutega</h2>
<br><br>
<h2>Samuti tahtsin luua php koodi mis suudab tuvastada login ja registreerimise serveri poolse päringu eraldiseisvalt funktsooni põhiliselt komenteerisin välja all pool</h2>


</html>


<?php

	// 	// LOGIN.PHP
	// 	// echo $_POST["email"];
	// function login()
	// {
	// 	//echo "keegi vajutas nuppu";
		
	// 	if (empty($_POST["email"]) )  
	// 	{
	// 		$email_error = "see väli on kohustuslik";
	// 	}
	// 	if (empty($_POST["password"]) ) 
	// 	{
	// 		$password_error = "see väli on kohustuslik";
	// 	}
	// 	else
	// 	{
	// 		//siis pole password tyhi
	// 		if(strlen($_POST["password"]) < 8)
	// 		{
	// 			$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
	// 		}
	// 	}			
	// }
		
	// 	//regamine
	// function register()
	// {


	// 	if (empty($_POST["name1"]) )  
	// 	{
	// 		$name1_error = "see väli on kohustuslik";
	// 		echo $name1_error;
	// 	}

	// 	if (empty($_POST["name2"]) )  
	// 	{
	// 		$name2_error = "see väli on kohustuslik";
	// 		echo $name2_error;
	// 	}

	// 	if (empty($_POST["username"]) )  
	// 	{
	// 		$username_error = "see väli on kohustuslik";
	// 		echo $username_error;
	// 	}
		
	// 	if (empty($_POST["email1"]) )  
	// 	{
	// 		$email1_error = "see väli on kohustuslik";
	// 		echo $email1_error;
	// 	}

	// 	if (empty($_POST["email2"]) )  
	// 	{
	// 		$email2_error = "see väli on kohustuslik";
	// 		echo $email2_error;
	// 	}

	// 	if (empty($_POST["password1"]) )  
	// 	{
	// 		$password1_error = "see väli on kohustuslik";
	// 		echo $password1_error;
	// 	} 		

	// 	if (empty($_POST["password2"]) ) 
	// 	{
	// 		$password2_error = "see väli on kohustuslik";
	// 		echo $password2_error ;
	// 	} 
	// 	else 
	// 	{
	// 		//siis pole password tyhi
	// 		if(strlen($_POST["password2"]) < 8)	
	// 		{
	// 			$password2_error = "Peab olema vähemalt 8 tähemärki pikk!";
	// 			echo $password2_error;
	// 		}
	// 		if(strlen($_POST["password1"]) < 8)	
	// 		{
	// 			$password1_error = "Peab olema vähemalt 8 tähemärki pikk!";
	// 			echo $password1_error;
	// 		}
	// 	}
	// 	if () {
	// 					# code...
	// 				}			
	
	// }
	// if($_SERVER["REQUEST_METHOD"] == "POST") 
	// {
	// 	if(isset($_POST["login"]))
	// 	{
	// 		login();
	// 	}
	// 	if(isset($_POST["register"])) {
	// 		register();
	// 	}
	// }

?>
<!-- <html>
<head>
<title>Login page</title>
</head>

<body>
	<h2>log in</h2>
		
		<form action="login.php" method="post">
		<input name="email"e type="email" placeholder = "email"> <br><br>
		<input name="password" type="password" placeholder = "password">  <br><br>
		<input type="submit" value="login" name="login">
		</form>


	<h2>Registreeru</h2>





<form action="login.php" method="POST"><br><br>
<input name="name1" type="text" placeholder="eesname" /> <br><br>
<input name="name2" type="text" placeholder="perekonna name" /> <br><br>
<input name="username" type="text" placeholder="username" /> <br><br>
<input name="email1" type="email" placeholder="Email" /> <br><br>
<input name="email2" type="email" placeholder="uuesti Email" /> <br><br>
<input name="password1" type="password" placeholder="password" /> <br><br>
<input name="password2" type="password" placeholder="uuesti password" /> <br><br>
<input type="submit" value="Registreeri" name="register" /><br><br>



</body>


</html> -->