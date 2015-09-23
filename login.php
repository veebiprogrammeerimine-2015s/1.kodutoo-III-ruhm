<?php

	// LOGIN.PHP
	
	$email_error = "";
	$password_error = "";
	
	$first_name_error = "";
	$last_name_error = "";
	
	$email_add = "";
	$email_add_error = "";
	
	$email_confirm = "";
	$email_confirm_error = "";
	
	$password_one = "";
	$password_one_error = "";
	
	$password_confirm = "";
	$password_confirm_error = "";
	
	$first_name = "";
	$last_name = "";
	
	$email = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if(isset($_POST["login"])){ 
			
			echo "vajutas login nuppu!";
			if ( empty($_POST["email"]) ) {
				$email_error = "See väli on kohustuslik";
			}
			
			if ( empty($_POST["password"]) ) {
				$password_error = "See väli on kohustuslik";
			} else {
				
				if(strlen($_POST["password"]) < 8) { 
				
					$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
					
				}
				
			}
			
			if($email_error == "" && $password_error ==""){
				
				echo "kontrollin sisselogimist ".$email." ja parool ";
			}
		
		
		
		// keegi vajutas create nuppu
		}elseif(isset($_POST["create"])){
			
			echo "vajutas create nuppu!";
			
			//valideerimine create user vormile
			//kontrollin et e-post ei ole tühi
			if ( empty($_POST["firstname"]) ) {
				$firstname_error = "See väli on kohustuslik";
			}else{
				$firstname= test_input($_POST["firstname"]);
			}
			
			if ( empty($_POST["lastname"]) ) {
				$lastname_error = "See väli on kohustuslik";
			}else{
				$lastname = test_input($_POST["lastname"]);
			}
			
			if ( empty($_POST["create_email"]) ) {
				$create_email_error = "See väli on kohustuslik";
			}
			
			if ( empty($_POST["create_email_confirm"]) ) {
				$create_email_confirm_error = "See väli on kojustuslik";
			}
			
			if ( empty($_POST["create_password"]) ) {
				$create_password_error = "See väli on kohustuslik";
			} else {
				
				if(strlen($_POST["create_password"]) < 8) { 
				
					$create_password_error = "Peab olema vähemalt 8 tähemärki pikk!";
					
				}
			}
				
			if ( empty($_POST["create_password_confirm"]) ) {
				$create_password_confirm_error = "See väli on kohustuslik";
			} else {
				
				if(strlen($_POST["create_password_confirm"]) < 8) { 
				
					$create_password_confirm_error = "Peab olema vähemalt 8 tähemärki pikk!";
					
				}
			}
			
		}
		
		
		
	}
	


?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
	<form action="login.php" method="POST" >
		<input name="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input type="submit" value="Log in">
		
	</form>
	
	<h2>Create user</h2>
	<form action="login.php" method="POST" >
		<input name="First_name" placeholder="First name"> <?php echo $first_name_error; ?> <br><br>
		<input name="Last_name" placeholder="Last name"> <?php echo $last_name_error; ?> <br><br>
		<input name="email_add" placeholder="Email"> <?php echo $email_add_error; ?> <br><br>
		<input name="email_confirm" placeholder="Re-enter Email"> <?php echo $email_confirm_error; ?> <br><br>
				<?php
				echo "<select name='sel_date'>";
				$i = 1;
				while ($i <= 31) {
					echo "<option value='" . $i . "'>$i</option>";
					$i++;
				}
				echo "</select>";

				echo "<select name='sel_month'>";
				$month = array(
					"Jan",
					"Feb",
					"Mar",
					"Apr",
					"May",
					"Jun",
					"Jul",
					"Aug",
					"Sep",
					"Oct",
					"Nov",
					"Dec"
				);
				foreach ($month as $m) {
					echo "<option value='" . $m . "'>$m</option>";
				}
				echo "</select>";
				echo "<select name='sel_year'>";
				$j = 1920;
				while ($j <= 2015) {
					echo "<option value='" . $j . "'>$j</option>";
					$j++;
				}
				echo "</select>" ;
				?> <br><br>
		<input name="password_one" type="password" placeholder="Password"> <?php echo $password_one_error; ?> <br><br>
		<input name="password_confirm" type="password" placeholder="Re-enter Password"> <?php echo $password_confirm_error; ?>  <br><br>
		<input type="submit" value="Registreeru"><br>
		 
		 <form>
		 Minu idee on teha spordilehekülg jalgpalli meeskonnas Manchester United, kus ma lisan uudiseid meeskonnas, siis võib teha foorumi, kus userid võivad arutleda meeskonna mänge ja jalgpallureid ja teha enda
		 teemasid.
		 </form>

</body>

</html>