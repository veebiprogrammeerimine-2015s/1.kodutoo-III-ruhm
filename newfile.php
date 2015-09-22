<?php

	// LOGIN.PHP
	
	$email_error = "";
	$password_error = "";
	
	$name_error = "";
	
	$firstname = "";
	$lastname = "";
	
	$email = "";
	$name = "";
	
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
				$name_error = "See väli on kohustuslik";
			}else{
				$firstname= test_input($_POST["firstname"]);
			}
			
			if ( empty($_POST["lastname"]) ) {
				$name_error = "See väli on kohustuslik";
			}else{
				$lastname = test_input($_POST["lastname"]);
			}
			
			if($name_error == ""){
				echo "salvestab ab'i".$firstname." ".$lastname;
			}
		}
		
		
		
	}
	// eemaldab tahapahtlikud osad
	function test_input($data) {
		 $data = trim($data);
		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
		 return $data;
	}

?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
	
		<form action="newfile.php" method="post" >
			<input name="email" type="email" placeholder="Email"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Password"> <?php echo $password_error; ?><br><br>
			<input name="login" type="submit" value="Log in">
		</form>
		
	<h2>Create user</h2>
		<form action="newfile.php" method="post" >
			<input name="firstname" type="name" placeholder="First name"> <?php echo $name_error; ?>*<br><br>
			<input name="lastname" type="name" placeholder="Last name"> <?php echo $name_error; ?>*<br><br>
			<?php
			// Число
			echo "<select name='sel_date'>";
			$i = 1;
			while ($i <= 31) {
				echo "<option value='" . $i . "'>$i</option>";
				$i++;
			}
			echo "</select>";
			// Месяц
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
			// Год
			echo "<select name='sel_year'>";
			$j = 1920;
			while ($j <= 2015) {
				echo "<option value='" . $j . "'>$j</option>";
				$j++;
			}
			echo "</select>";
			?><br><br>
			<input name="create_email" type="email" placeholder="Email"> <?php echo $name_error; ?>*<br><br>
			<input name="create_email" type="email" placeholder="Re-enter email"> <?php echo $name_error; ?>*<br><br>
			<input name="create_password" type="password" placeholder="Password"> <?php echo $name_error; ?>*<br><br>
			<input name="create_password" type="password" placeholder="Password"> <?php echo $name_error; ?>*<br><br>
			<input name="create" type="submit" value="Create">
		</form>
		
		<form>
		Minu idee on selline, et teha päeviku, kus saab salvestada oma mõtted, ideed ja tuleviku plaanid, et pärast neid ei
		unusta või lihtsalt kirjutada oma elust, et pärast lugeda parimatest momentidest ja näidata oma lugud näiteks oma tuleviku lapsele.
		Seda päeviku võib ka kasutada nagu blogi ja jagada postitused sõpradele... Postitusel võib olla tekst, pildid, videod
		või muusika...
		</form>
</body>
</html>