<?php
    //login.php
	//echo $_POST["email"];
	
	$email_error = "";
	$password_error = "";
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		//echo "keegi vajutas nuppu";
		
		//kontrollin, et e-post ei ole tühi
	if(empty($_POST["email"]) ){
		$email_error = "See väli on kohustuslik";
		}
		
		//kontrollin, et parool ei ole tühi
		if(empty($_POST["password"]) ){
		$password_error = "See väli on kohustuslik";	
		} else {
			//kui oleme siia jõudnud. siis parool ei ole tühi
			//kontrollin, et oleks vähemalt 8 sümbolit pikk
			
			if(strlen($_POST["password"]) < 8){
				$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
			
			   
				
			}
		}
		
		
		//kontrollin, et parool ei ole tühi
		
	}
	
    
?>


<html>
<head>
    <title>Login page</title>
</head>
<body>
    
	<h2>Logi sisse</h2>
	
	<form action="login.php" method="post" >
	<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
	<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
	<input type ="submit" value="log in">
	</form>
	
<h2>Loo kasutaja</h2>

<form id='register' action='register.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Your Full Name*: </label>
<input type='text' name='name' id='name' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>

	
</body
</html>