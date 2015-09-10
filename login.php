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


	<h2>Registreeru</h2>
	<?php

if(isset($post['submit'])){

	$email1 = $_POST ['email1'];
	$email2 = $_POST ['email2'];
	$parool1 = $_POST ['parool1'];
	$parool2 = $_POST ['parool2'];


	if ($email1 == $email2) {
		if ($parool1 == $parool2) {

	}else{
		echo "vabandan, su email ei ole samad <br><br>";
		exit();
}
	}else{
		echo " vabandan su emailid ei ole samad <br><br>";

}

}else{

$form = <<<EOT
<form action="login.php" method="POST"><br><br>
<input name="nimi1" type="text" placeholder="eesnimi" /><br><br>
<input name="nimi2" type="text" placeholder="perekonna nimi" /><br><br>
<input name="kasutajanimi" type="text" placeholder="kasutajanimi" /><br><br>
<input name="email1" type="email" placeholder="Email" /><br><br>
<input name="email2" type="email" placeholder="uuesti Email" /><br><br>
<input name="parool1" type="password" placeholder="Parool" /><br><br>
<input name="parool2" type="password" placeholder="uuesti parool" /><br><br>
<input type="submit" value="Registreeri" name="registreeru" /><br><br>
EOT;

echo $form;

}

?>
</body>


</html>