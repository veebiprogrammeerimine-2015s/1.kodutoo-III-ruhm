<?php

	//login.php
	
	$email1_error = "";
	$email2_error = "";
	$password1_error = "";
	$password2_error = "";
	$password3_error ="";
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//echo "Keegi vajutas nuppu"; sedasi tehakse kontroll ainult siis, kui vajutatakse login nuppu
		if(isset($_POST['login'])){
			//kontrollin, et epost ei ole tühi
			if ( empty($_POST["email1"]) ) {
				$email1_error = "See väli on kohustuslik";
			}
			//kontrollin, et parool ei ole tühi
			if ( empty($_POST["password1"]) ) {
				$password1_error = "See väli on kohustuslik";	
			} else if(strlen($_POST["password1"]) < 8) {
					$password1_error ="Peab olema vähemalt 8 sümbolit pikk!";
			}
		if(isset($_POST['registreeri'])) {
			//kontrollin, et epost ei ole tühi
			if ( empty($_POST["email2"]) ) {
				$email2_error = "See väli on kohustuslik";
			}
			//kontrollin, et parool ei ole tühi
			if ( empty($_POST["password12"]) ) {
				$password2_error = "See väli on kohustuslik";	
			} else if(strlen($_POST["password2"]) < 8) {
					$password2_error ="Peab olema vähemalt 8 sümbolit pikk!";
			}
			//kontrollin, et paroolid klapiksid
			if ($_POST["password1"] != $_POST["password2"]) {
				$password3_error = "Paroolid ei kattu. Proovi uuesti.";		
			}
				
			}
		} 
					//Millegipärast registreerimise all ei kontrollita väljasid?
	}
	
?>
<html>

<head>
	<title>Login page</title>
	<metadata encoding="UTF8">
</head>
<body bgcolor="#BF9E7C"><br><br>
		<center><h2>Log in</h2></center>
		<center><form action="login2.php" method="post"></center>
			<center><input name="email1" type="email" placeholder="E-post"> <?php echo $email1_error; ?></center><br><br>
			<center><input name="password1" type="password" placeholder="Parool"> <?php echo $password1_error; ?> </center><br><br>
			<center><input type="submit" name="login" value="Log in"></center><br>
			<center><a href="http://www.tlu.ee/~earist/">Unustasid parooli?</a></center>
		</form>
	
	<center><h2>Create user</h2></center>
		<form action ="login2.php" method="post">
			<center><input type="text" name="eesnimi" placeholder="Eesnimi"></center><br>
			<center><input type="text" name="perekonnanimi" placeholder="Perekonnanimi"></center><br>
			<center><input name="email2" type="email" placeholder="E-post"><?php echo $email2_error; ?></center><br>
			<center><input name="password2" type="password" placeholder="Parool"><br><?php echo $password2_error; ?></center><br>
			<center><input name="password3" type="password" placeholder="Korda parooli"><?php echo $password3_error; ?></center><br><br>
			<center>Sugu?<br><input type="checkbox" name="sugu" value="mees">Mees&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sugu" value="naine">Naine</center><br><br>
			<center><input type="submit" name="registreeri" value="Registreeri"></center><br>
		</form>
</body>

</html>