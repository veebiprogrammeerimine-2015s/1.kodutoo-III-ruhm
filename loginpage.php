<?php
	$EMAIL = "";
	$PASSWORD = "";
	$AVATAR = "";
	$SEX = "";
	$ERRORMESSAGE = "";

?>
<html>

<head>
<title>Login page testing</title>
<div align="center">
<h1>LOGIN PAGE</h1>
</div>
</head>

<body>
	<div align="center">
		<input name="EMAIL" type=email placeholder="EMAIL"> <br><br>
		<input name="PASSWORD" type=password placeholder="PASSWORD"> <br><br>
		<input name="SEX" type="radio" value="MALE">MALE<br><br>
		<input name="SEX" type="radio" value="FEMALE">FEMALE<br><br>
		<input name="AVATAR" type="file"  accept="image/*">
		<input name="SALVESTA" type="submit"><br><br>
	<input type=submit value="Log in"><br>
	</div>
</body>

</html>