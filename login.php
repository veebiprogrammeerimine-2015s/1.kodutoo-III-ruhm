<?php
		//LOGIN.PHP
		//tühjade väljade kontrolliks
		$email_error = "";
		$pw_error = "";
		$pw_error2 = "";
		$user_error = "";
		$user_error2 = "";
		
		
		
		//kontrollime et keegi vajutas input nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			
			
			
			//kontrollin et e-post, password ei ole tühi
			
			if (empty($_POST["username"])) {
				
				$user_error = "See väli on kohustuslik";
				
				
			}
			
			if (empty($_POST["username1"])) {
				
				$user_error2 = "See väli on kohustuslik";
				
				
			}
			if (empty($_POST["email"])) {
				
				$email_error = "See väli on kohustuslik";
				
				
			}
			if (empty($_POST["password"])) {
				
				$pw_error = "See väli on kohustuslik";
			}
				if (empty($_POST["password2"])) {
				
				$pw_error2 = "See väli on kohustuslik";
					
			}
			else {
			//siis pole parool tyhi
			if(strlen($_POST["password"]) < 8)	{
				$pw_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
			if(strlen($_POST["password2"]) < 8)	{
				$pw_error2 = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}			
	}
		
		
		
?>
<html>
<head>
	<title>Login peidž</title>
</head>
<body>
	<h2>Logi sisse</h2>
	
	<form action="login.php" method="post" >
		<input type="text" name="username" placeholder="Kasutajanimi"> <?php  echo $user_error;  ?> <br><br>
		<input type="password" name="password" placeholder="Parool"> <?php  echo $pw_error;  ?> <br><br>
		<input type="submit" value="Log in"> <br><br>
	</form>
	<br><br>
	<h2>Loo kasutaja</h2>
		
	<form action="login.php" method="post" >
		<input type="text" name="username1" placeholder="Kasutajanimi"> <?php  echo $user_error2;  ?> <br><br>
		<input type="password" name="password2" placeholder="Parool"> <?php  echo $pw_error2;  ?> <br><br>
		<input type="email" name="email" placeholder="E-mail"> <?php echo $email_error2; ?> <br> <br>
		<input type="submit" value="Registreeri"> <br><br>
	</form>
	
	<p style="text-align:center">Mõte on luua koht, kuhu inimesed saavad sisestada mõne koha, kus pakutakse teenust, näiteks restoranid,
	autorehvivahetus, rattaparanduse kohad jne. Ei suutnud meelde tuletada selle ingliskeelset versiooni, kuid näide sellest kuidas asi välja näeks: <br>
	Lähed rehve vahetama kuhugi mitte kõige prestiižemasse kohta, mingit infot internetist selle kohta ei leia. Käid ära ning märkad et velje peal
	on täkked, rehvijooks valet pidi, teenindus halb ja sada muud häda ning tahaksid selle kuhugi üles visata, et teised samasse auku ei astuks. <br>
	Kohti saavad inimesed ise sisestada(aadress, pildid nimi jne) ja selle kohta siis oma arvustus lisada. Võivad ka olla muidugi positiivsed soovitused.
	Kindlasti tuleks teha ka mingi jaotus erinevate teenuste vahel, et vajadusel kui keegi näiteks lähebki otsima kohta kus oma rehve vahetada, siis 
	saab ta seda lihtsalt ja kiirelt teha ning jääb lõpptulemusega rahule.<p>
	
	
</body>
</html>
