<?php
									//mvp: Tahaksin teha midagi Instagram'i laadset.
	//echo$_POST["email"];
	//echo$_POST["password"];
	
	$email1_error = "";
	$email2_error = "";
	$password1_error = "";
	$password2_error = "";
	$name1_error = "";
	$name2_error = "";
	
	//muutujad ab väärtuste jaoks
	
	$email1 = "";
	$email2 = "";
	$name1 = "";
	$name2 = "";
	$password1 = "";
	$password2 = "";
	
	//kontrollime, et keegi vajutas input nuppu.
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "Keegi vajutas nuppu";
		
		
		//keegi vajutas login nuppu
		if(isset($_POST["login"])){
			
			echo "Vajutas login nuppu!";
			
			//kontrollin, et e-post ei ole tühi
			if(empty($_POST["email1"]) ){
				$email1_error = " See väli on kohustuslik.";
			}else{
				
				$email1 = test_input($_POST["email1"]);
			
			}	
				
			//kontrollin, et parool ei ole tühi
			if(empty($_POST["password1"]) ){
				$password1_error = "See väli on kohustuslik.";
			}else{
				
				// kui oleme siia jõudnud, siis parool ei ole tühi
				// kontrollin, et oleks vähemalt 8 sümbolit pikk
				if(strlen($_POST["password1"])<8) {
					
				$password1_error = "Peab olema vähemalt 8 tähemärki pikk";
				
				}
			
			
			}
			
			//kontrollin et ei oleks ühtegi errorit
			if($email1_error == ""&& $password1_error ==""){
				
				echo "kontrollin sisselogimist".$email1." ja parool ";
			}
			
			
		
		// keegi vajutas create  nuppu
		}elseif(isset($_POST["create"])){
			
			echo "Vajutas create nuppu!";
			
			if(empty($_POST["email2"]) ){
				$email2_error = " See väli on kohustuslik.";
			}else{
				
				$email2 = test_input($_POST["email2"]);
			}
			
			//kontrollin, et parool ei ole tühi
			if(empty($_POST["password2"]) ){
				$password2_error = "See väli on kohustuslik.";
			}else{
				
				// kui oleme siia jõudnud, siis parool ei ole tühi
				// kontrollin, et oleks vähemalt 8 sümbolit pikk
				if(strlen($_POST["password2"])<8) {
					
				$password2_error = "Peab olema vähemalt 8 tähemärki pikk";
				
				}
			}
				
			//valideerimine create user vormile
			//kontrollin, et perekonnanimi ei ole tühi
			if( empty($_POST["name1"]) ) {
				$name1_error = "See väli on kohustuslik";
			}else{
				//kõik korras
				//test_input eemaldab pahatahtlikud osad
				$name1 = test_input($_POST["name1"]);
			
				
			}
			if($name1_error == ""){
				echo "salvestan ab'i".$name1;
			}
			
			//valideerimine create user vormile
			//kontrollin, et eesnimi ei ole tühi
			if( empty($_POST["name2"]) ) {
				$name2_error = "See väli on kohustuslik";
			}else{
				//kõik korras
				//test_input eemaldab pahatahtlikud osad
				$name2 = test_input($_POST["name2"]);
			
				
			}
			if($name2_error == ""){
				echo "salvestan ab'i".$name2;
			}
		
		}
	}	
	function test_input($data) {
		//võtab ära tühikud, enterid ja tabid
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		
	}
?>  
<?php
	$page_title = "Sisselogimise leht";
	$page_file_name = "login.php";
?>                                                    
<html>
<head>
	<title><?php echo $page_title; ?></title>
	
</head>
<body>
	
	<h2>Log in</h2>
		<form action="login.php" method="post">
			<input name="email1" type="email" placeholder="E-post" value="<?php echo $email1; ?>">* <?php echo $email1_error; ?> <br><br>
			<input name="password1" type="password" placeholder="Parool" value="<?php echo $password1; ?>">* <?php echo $password1_error; ?> <br><br>
			<input name="login" type="submit" value="Log in"> 
		</form>
		
	<h2>Create user</h2>
	
		<form action="login.php" method="post">
			<input name="email2" type="email" placeholder="E-post" value="<?php echo $email2; ?>">* <?php echo $email2_error; ?> <br><br>
			<input name="password2" type="password" placeholder="Parool" value="<?php echo $password2; ?>">* <?php echo $password2_error; ?> <br><br>
			<input name="name1" type="text" placeholder="Perekonnanimi" value="<?php echo $name1; ?>">* <?php echo$name1_error; ?><br><br>
			<input name="name2" type="text" placeholder="Eesnimi" value="<?php echo $name2; ?>">* <?php echo$name2_error; ?><br><br>
			<input name="create" type="submit" value="Create">
		</form>
		
		
		
<p><i>Lehe tegi Henrik, 2015a.</i></p>
</body>     
</html>