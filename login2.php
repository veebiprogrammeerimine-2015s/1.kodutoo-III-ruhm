<?php
	//login.php
	
	$email1_error = "";
	$email2_error = "";
	$password1_error = "";
	$password2_error = "";
	$password3_error ="";
	$eesnimi_error ="";
	$perekonnanimi_error ="";
	$eesnimi ="";
	$perekonnanimi ="";
	$email1 ="";
	$email2 ="";
	$password1 ="";
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//echo "Keegi vajutas nuppu"; sedasi tehakse kontroll ainult siis, kui vajutatakse login nuppu
		if(isset($_POST['login'])){
			
			//kontrollin, et epost ei ole tühi
			if ( empty($_POST["email1"]) ) {
				$email1_error = "See väli on kohustuslik";
			}else{
				//kõik korras, test_input eemaldab pahatahtlikud osad
				$email1 = test_input($_POST["email1"]);
				}
				
			//kontrollin, et parool ei ole tühi
			if ( empty($_POST["password1"]) ) {
				$password1_error = "See väli on kohustuslik";	
			} else if(strlen($_POST["password1"]) < 8) {
					$password1_error ="Peab olema vähemalt 8 sümbolit pikk!";
			}
		}elseif(isset($_POST['registreeri'])) {
			
			//kontrollin, et nimi pole tühi
			if ( empty($_POST["eesnimi"]) ) {
				$eesnimi_error = "See väli on kohustuslik";
			}else{
				//kõik korras, test_input eemaldab pahatahtlikud osad
				$eesnimi = test_input($_POST["eesnimi"]);
				}
				
				
			// kontrollin et perekonnanimi pole tühi
			if ( empty($_POST["perekonnanimi"]) ) {
				$perekonnanimi_error = "See väli on kohustuslik";
			}else{
				//kõik korras, test_input eemaldab pahatahtlikud osad
				$perekonnanimi = test_input($_POST["perekonnanimi"]);
				}
				
			//kontrollin, et epost ei ole tühi
			if ( empty($_POST["email2"]) ) {
				$email2_error = "See väli on kohustuslik";
			}else{
				//kõik korras, test_input eemaldab pahatahtlikud osad
				$email2 = test_input($_POST["email2"]);
				}
			
			//kontrollin, et parool ei ole tühi
			if ( empty($_POST["password2"]) ) {
				$password2_error = "See väli on kohustuslik";	
			} else {
				
				
				if(strlen($_POST["password2"]) < 8) {
					$password2_error ="Peab olema vähemalt 8 sümbolit pikk!";
				}else{
					$password2 = test_input($_POST["password2"]);
				}
			}
			//kontrollin, et paroolid klapiksid
			if ($_POST["password2"] != $_POST["password3"]) {
				$password3_error = "Paroolid ei kattu. Proovi uuesti.";		
			}
				
			}
		} 
		
	
	function test_input($data) {	
		$data = trim($data);	//võtab ära tühikud,enterid,tabid
		$data = stripslashes($data);  //võtab ära tagurpidi kaldkriipsud
		$data = htmlspecialchars($data);	//teeb htmli tekstiks, nt < läheb &lt
		return $data;
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
			<center><input name="email1" type="email" value="<?php echo $email1 ?>" placeholder="E-post"> <?php echo $email1_error; ?></center><br><br>
			<center><input name="password1" type="password" placeholder="Parool"> <?php echo $password1_error; ?> </center><br><br>
			<center><input type="submit" name="login" value="Log in"></center><br>
			<center><a href="http://www.tlu.ee/~earist/">Unustasid parooli?</a></center>
		</form>
	
	<center><h2>Create user</h2></center>
		<form action ="login2.php" method="post">
			<center><input type="text" name="eesnimi" value ="<?php echo $eesnimi ?>" placeholder="Eesnimi"><?php echo $eesnimi_error;?></center><br>
			<center><input type="text" name="perekonnanimi" value ="<?php echo $perekonnanimi ?>" placeholder="Perekonnanimi"><?php echo $perekonnanimi_error;?></center><br>
			<center><input name="email2" type="email" placeholder="E-post" value ="<?php echo $email2 ?>"><?php echo $email2_error; ?></center><br>
			<center><input name="password2" type="password" placeholder="Parool"><br><?php echo $password2_error; ?></center><br>
			<center><input name="password3" type="password" placeholder="Korda parooli"><?php echo $password3_error; ?></center><br><br>
			<center>Sugu?<br><input type="radio" name="sugu" value="mees">Mees&nbsp;&nbsp;&nbsp;<input type="radio" name="sugu" value="naine">Naine</center><br><br>
			<center><input type="submit" name="registreeri" value="Registreeri"></center><br>
		</form>
</body>

</html>