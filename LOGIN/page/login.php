<?php
	
	
		// IDEE : Algeline idee on luua koduleht  Silkroad Treasures'ile(https://www.facebook.com/silkroadtreasuresjewelry?fref=ts&ref=br_tf). 
	  //Kardan ainult, et see on liig keerukas kohe alguses teha seega alternatiiviks teha äkki sümbolite ja kivide kogu/nimekiri/kirjeldus leht. 
	
	
	//LOGIN.PHP
	
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$surename_error = "";
	$username_error = "";
	
	$mail_error = "";
	$passwordtwo_error = "";
	
	//muutjuad ab väärtuste jaoks
	$name = "";
	
	//echo $_POST€["email"];
	
	//kontrollime et keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//vajutas login nuppu
		if(isset($_POST["login"])){
			
			echo "vajutas login nuppu!";
			
			//kontrollin et e-post ei ole tühi
			
			if ( empty($_POST["email"]) ) {
				$email_error = "See väli on kohustuslik";
				
			}
			
			//kontrollin et parool ei ole tühi
			 if ( empty($_POST["password"]) ) {
				 $password_error = "See väli on kohustuslik";
			} else {
				
				//kui oleme siia jõudnud, siis parool ei ole tühi
				//konrollin et oleks vähemalt 8 üsmbolit pikk
				if(strlen($_POST["password"]) < 8) {
					
					$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
					}
			}
		
		
		//kontrollime et keegi vajutas nuppu
		}elseif(isset($_POST["create"])){
			
			echo "vajutas create nuppu!";
			
			//kontrollin et nimi ja perekonnanime väljad ei oleks tühjad
			if ( empty($_POST["name"]) ) {
				$name_error = "See väli on kohustuslik";
			}else{
				//kõik korras
				//test_input eemaldab pahatahtlikud osad
				$name = test_input($_POST["name"]);
				
			}
			if($name_error == ""){
				echo "salvestan ab'i ".$name;
			}
				
			if ( empty($_POST["surename"]) ) {
				$surename_error = "See väli on kohustuslik";
				
			}
			//kontrooli et kasutajanimi ei oleks tühi ja et see oleks vährmalt 3 tähemärki pikk
			if ( empty($_POST["username"]) ) {
				$username_error = "See väli on kohustuslik";
				
			} else {
				
				if(strlen($_POST["username"]) < 3) {
					
					$username_error = "Peab olema vähemalt 3 tähemärki pikk!";
					}
			}
			if (empty($_POST["email"])) {
				$mail_error = "See väli on kohustuslik";
			}
			if (empty($_POST["password"])) {
				$passwordtwo_error = "See väli on kohustuslik";
			}
		
		}
	}
			
function test_input($data) {
	//võtab ära tühikud,enterid,tabid
  $data = trim($data);
  //tagurpidi kaltkriipsud
  $data = stripslashes($data);
  //teeb html'i tekstiks <lährb &lt;
  $data = htmlspecialchars($data);
  return $data;
}
	
	
?>

<?php
	$page_title = "Sisselgimis leht";
	$page_file_name = "login.php";
?>

<?php require_once("../header.php"); ?>



<body bgcolor="E0FFF0">

	<h2>Log in</h2>

		
	  <form action="login.php" method="post">	
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error;?><br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error;?><br><br>
		<input name="login" type="submit" value="Log in">
	  </form>	
	<h2>Create user</h2>
	
		<form action="login.php" method="post">	
		<input name="name" type="name" value="<?php echo $name; ?>" placeholder="Eesnimi"><?php echo $name_error;?>&nbsp;&nbsp;&nbsp;&nbsp;<input name="username" type="username" placeholder="Kasutajanimi"><?php echo $username_error;?> <br><br>
		<input name="surename" type="surename" placeholder="Perekonnanimi"><?php echo $surename_error;?>&nbsp;&nbsp;&nbsp;&nbsp;<input name="password" type="password" placeholder="Parool"> <?php echo $passwordtwo_error;?> <br><br>
		<input name="email" type="email" placeholder="E-post"> <?php echo $mail_error;?><br><br>
		<input name="create" type="submit" value="Create user">
	  </form>	
</body>


<?php require_once("../footer.php"); ?>




	