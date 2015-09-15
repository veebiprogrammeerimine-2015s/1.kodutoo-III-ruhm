<?php
	//$EMAIL = "";
	//$PASSWORD = "";
	//$AVATAR = "";
	//$SEX = "";
	$PWERROR = "";
	$EMAILERROR = "";
	$PWERROR2 = "";
	$EMAILERROR2 = "";
	//$GENDERERROR = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//echo "Har";
		
		if (empty($_POST["PASSWORD"]) && empty($_POST["PASSWORD2"] )){
			$PWERROR = "REQUIRED FIELD";
		}
		if (empty($_POST["PASSWORD2"]) && empty($_POST["PASSWORD"] )){
			$PWERROR2 = "REQUIRED FIELD";
		}
		
		if (empty($_POST["EMAIL"]) && empty($_POST["EMAIL2"]) ){
			$EMAILERROR = "REQUIRED FIELD";
		}
		if (empty($_POST["EMAIL"]) && empty($_POST["EMAIL2"]) ){
			$EMAILERROR2 = "REQUIRED FIELD";
		}
		
	}
?>
<html>

<head>
<title>Login page testing</title>

</head>

<body bgcolor="#E6E6FA">
	<h1>LOGIN PAGE</h1>
	<form action ="loginpage.php" method="post">
	<div style="color:#ff3333">
		<input name="EMAIL" type=email placeholder="EMAIL"> <?php echo $EMAILERROR; ?><br><br>
		<input name="PASSWORD" type=password placeholder="PASSWORD"> <?php echo $PWERROR; ?><br><br>
		<input type=submit value="Log in"><br>
	</div>
	</form>
	<h1>REGISTRATION</h1>
	<form action ="loginpage.php" method="post">
	<div style="color:#ff3333">
		<input name="EMAIL2" type=email placeholder="EMAIL"> <?php echo $EMAILERROR2; ?><br><br>
		<input name="PASSWORD2" type=password placeholder="PASSWORD"> <?php echo $PWERROR2; ?><br><br>
		<select>
			<option value="gender">Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<br><br>
	<!--<input name="SEX" type="radio" value="MALE">MALE<br><br>
		<input name="SEX" type="radio" value="FEMALE">FEMALE<br><br>-->
		<div style="color:#000000">
		<p>Avatar</p>
		</div>
		<input name="AVATAR" type="file" placeholder="AVATAR" accept="image/*"><br><br>
	<!--<input name="SALVESTA" type="submit"><br><br>-->
	<input type=submit value="Register"><br>
	</div>
	</form>
	<br><br><br><br>
	<h2>MVP Idee</h2>
	<p>Mõtlesin teha midagi IRC taolist? Erinevus oleks küll, et registreeritud kasutajaid kasutaks.</p>
</body>

</html>