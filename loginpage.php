<?php
	$EMAIL = "";
	$PASSWORD = "";
	$AVATAR = "";
	$SEX = "";
	$ERRORMESSAGE = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		echo "Har";
	}
?>
<html>

<head>
<title>Login page testing</title>
<div align="center">
</div>
</head>

<body>
	<h1>LOGIN PAGE</h1>
	<br><br>
	<form action ="loginpage.php" method="post">
	<div align="center">
		<input name="EMAIL" type=email placeholder="EMAIL"> <br><br>
		<input name="PASSWORD" type=password placeholder="PASSWORD"> <br><br>
		<input type=submit value="Log in"><br>
	</div>
	<form>
	<h1>REGISTRATION</h1>
	<form action ="loginpage.php" method="post">
	<div align="center">
		<input name="EMAIL" type=email placeholder="EMAIL"> <br><br>
		<input name="PASSWORD" type=password placeholder="PASSWORD"> <br><br>
		<select>
			<option value="gender">Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<br><br>
	<!--<input name="SEX" type="radio" value="MALE">MALE<br><br>
		<input name="SEX" type="radio" value="FEMALE">FEMALE<br><br>-->
		<input name="AVATAR" type="file"  accept="image/*">
		<input name="SALVESTA" type="submit"><br><br>
	<input type=submit value="Register"><br>
	</div>
	<form>
	
</body>

</html>