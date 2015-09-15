<?php
// LOGIN.PHP
	//echo $_POST["email"]
	//Kontrollida, et keegi vajutas "Log in"
	$email_error = "";
	$password_error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// echo "Har";
		 
		
	if ( empty($_POST["email"] ) ){
		$email_error = "See väli on kohustuslik";
			
			
		}
	if ( empty($_POST["password"] ) ){
		$password_error = "See väli on kohustuslik";
			
			
	/*}else{
		//Kui siin, siis parool ei ole tühi
		if(strlen($_POST["email"]) < 8){
			$password_error = "Password liiga lühike"
		
		} */
	}
	}
?>
<html>
<head>
<title>Facebook competitor 2015</title>
</head>
<body>
	<div style="color:#ff3333">
	<h1> LOGIN PAGE </h1>
	<h2> Log in </h2>
	<form action ="login.php" method="post">
		<!-- <h3>Kasutaja</h3> -->
		<input name="email" type=email placeholder="Email"> <?php echo $email_error; ?> <br><br>
		<!-- <h3>Parool</h3> -->
		<input name="password" type=password placeholder="parool"> <?php echo $password_error; ?><br>
		<input type=submit value="Log in">
		
	</div>
	
	</form>
	<h2> CREATE USER </h2>

</body>
</html>