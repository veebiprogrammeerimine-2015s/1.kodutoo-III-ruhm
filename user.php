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
		
		//kontrollin et e-mail ei ole tühi
		
		if( empty($_POST["email"])){
			$email_error = "See väli on kohustuslik";
		}
		//kontrollin, et parool ei ole tühi
		
		if( empty($_POST["password"])){
			$password_error = "See väli on kohustuslik";
		} else {
			
			if(strlen ($_POST["password"]) < 8){
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}
		if( empty($_POST["name"])){
		$name_error = "See väli on kohustuslik";
		}
		if( empty($_POST["birthday"])){
			$birthday_error = "See väli on kohustuslik";
		}
		if( empty($_POST["gender"])){
			$gender_error = "See väli on kohustuslik";
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
			<h3>Email</h3>
			<input name="email" type="email" placeholder="something@something.stng"> <?php echo $email_error; ?><br><br>
			<h3>Password</h3><br>
			<input name="password"type="password" placeholder="Password"> <?php echo $password_error; ?> <br><br>
			<h3>Birthday</h3><br>
			<input name="birthday" type="birthday" placeholder="day/month/year"> <?php echo $birthday_error; ?><br><br>
			<h3>Gender</h3><br>
			<input name="gender" type="gender" placeholder="male/female"> <?php echo $gender_error; ?><br><br>
			<input type="submit" value="Log in">
		</form>
	<h2>Creat user</h2>
</body>


</html>