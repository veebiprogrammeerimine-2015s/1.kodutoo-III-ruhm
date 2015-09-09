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
		} else {
			//siis pole parool tyhi
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
		<input name="password" type="password" placeholder = "parool"> <?php echo $password_error;  ?><br><br>
		<input type="submit" value="login">
		</form>


	<h2>create user</h2>


<div class='formcontainer'>
<h1>Register</h1>
<form method="post"  action="">
	<div class='para'>
		<label for='name'>Name: </label><br />
		<input type="text" id='name' name="name"/>
	</div>
	<div class='para'>
		<label for='email'>Email:</label><br />
		<input type="text" id='email' name="email"/>
	</div>
	<div class='para'>
		<label for='regpwd'>Password:</label> <br />
		<div class='pwdwidgetdiv' id='thepwddiv'></div>
		<script  type="text/javascript" >
		var pwdwidget = new PasswordWidget('thepwddiv','regpwd');
		pwdwidget.MakePWDWidget();
		</script>
		<noscript>
		<div><input type='password' id='regpwd' name='regpwd' /></div>		
		</noscript>
	</div>
	<div class='para'><br /><br />
	<input type="submit" name='submit' value="submit" />
	</div>
</form>
</body>


</html>