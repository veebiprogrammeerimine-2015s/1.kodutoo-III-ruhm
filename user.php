<?php
	//login.php
	$email_error = "";
	$password_error ="";
	$name_error ="";
	$birthday_error="";
	$gender_error="";
	
	
	//echo $_POST["email"];  //ANNAB MUUTUJA MIS AADRESSIREAL ON
	// kontrollime et keeegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		//echo "keegi vajutas nuppu";
		
		//kontrollin et e-mail ei ole t�hi
		
		if( empty($_POST["email"])){
			$email_error = "See v�li on kohustuslik";
		}
		//kontrollin, et parool ei ole t�hi
		
		if( empty($_POST["password"])){
			$password_error = "See v�li on kohustuslik";
		} else {
			
			if(strlen ($_POST["password"]) < 8){
				$password_error = "Peab olema v�hemalt 8 t�hem�rki pikk!";
			}
		}
		if( empty($_POST["name"])){
		$name_error = "See v�li on kohustuslik";
		}
		if( empty($_POST["birthday"])){
			$birthday_error = "See v�li on kohustuslik";
		}
		if( empty($_POST["gender"])){
			$gender_error = "See v�li on kohustuslik";
		}
}	
	
	
	
?>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<h2>Creat account</h2>
	
		<form action="user.php" method="post">
			<p>Name</p>
			<input name="name" type="name" placeholder="First name"> <?php echo $name_error; ?>
			<input name="name" type="name" placeholder="Last name"> <?php echo $name_error; ?><br><br>
			<p>Email</p>
			<input name="email" type="email" placeholder="something@something.stng"> <?php echo $email_error; ?><br><br>
			<p>Password</p>
			<input name="password"type="password" placeholder="********"> <?php echo $password_error; ?> <br><br>
			<p>Birthday</p>
			<input name="birthday" type="birthday" placeholder="day/month/year"> <?php echo $birthday_error; ?><br><br>
			<p>Gender</p>
			<input name="gender" type="gender" placeholder="male/female"> <?php echo $gender_error; ?><br><br>
			<input type="submit" value="Creat user">
		</form>
	
</body>


</html>