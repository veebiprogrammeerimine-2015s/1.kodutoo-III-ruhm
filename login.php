<?php
		$email_error = "";
		$password_error = "";

		$nimi1_error = "";
		$nimi2_error = "";
		$kasutajanimi_error = "";
		$email1_error = "";
		$email2_error = "";
		$parool1_error = "";
		$parool2_error = "";
		// LOGIN.PHP
		// echo $_POST["email"];
	function login()
	{


		
			
		//echo "keegi vajutas nuppu";
		
		if (empty($_POST["email"]) )  
		{
			$email_error = "see väli on kohustuslik";
		}
		if (empty($_POST["password"]) ) 
		{
			$password_error = "see väli on kohustuslik";
		}
		else
		{
			//siis pole parool tyhi
			if(strlen($_POST["password"]) < 8)
			{
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}			
	}
		
		//regamine
	function register()
	{


		if (empty($_POST["nimi1"]) )  
		{
			$nimi1_error = "see väli on kohustuslik";
		}

		if (empty($_POST["nimi2"]) )  
		{
			$nimi2_error = "see väli on kohustuslik";
		}

		if (empty($_POST["kasutajanimi"]) )  
		{
			$kasutajanimi_error = "see väli on kohustuslik";
		}
		
		if (empty($_POST["email1"]) )  
		{
			$email1_error = "see väli on kohustuslik";
		}

		if (empty($_POST["email2"]) )  
		{
			$email2_error = "see väli on kohustuslik";
		}

		if (empty($_POST["parool1"]) )  
		{
			$parool1_error = "see väli on kohustuslik";
		} 		

		if (empty($_POST["parool2"]) ) 
		{
			$parool2_error = "see väli on kohustuslik";
		} 
		else 
		{
			//siis pole parool tyhi
			if(strlen($_POST["parool2"]) < 8)	
			{
				$parool2_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
			if(strlen($_POST["parool1"]) < 8)	
			{
				$parool1_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}			
	
	}
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(isset($_POST["login"]))
		{
			login();
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
		<input name="password" type="password" placeholder = "parool"> <?php echo $password_error;  ?><br><br>
		<input type="submit" value="login" name="login">
		</form>


	<h2>Registreeru</h2>





<form action="login.php" method="POST"><br><br>
<input name="nimi1" type="text" placeholder="eesnimi" /><?php echo $nimi1_error;  ?><br><br>
<input name="nimi2" type="text" placeholder="perekonna nimi" /><?php echo $nimi2_error;  ?><br><br>
<input name="kasutajanimi" type="text" placeholder="kasutajanimi" /><?php echo $kasutajanimi_error;  ?><br><br>
<input name="email1" type="email" placeholder="Email" /><?php echo $email1_error;  ?><br><br>
<input name="email2" type="email" placeholder="uuesti Email" /><?php echo $email2_error;  ?><br><br>
<input name="parool1" type="password" placeholder="Parool" /><?php echo $parool1_error;  ?><br><br>
<input name="parool2" type="password" placeholder="uuesti parool" /><?php echo $parool2_error;  ?><br><br>
<input type="submit" value="Registreeri" name="registreeru" /><br><br>



</body>


</html>