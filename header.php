<?php
	$nimi1_error = "";
	$nimi2_error = "";
	$kasutajanimi_error = "";
	$email1_error = "";
	$email2_error = "";
	$parool1_error = "";
	$parool2_error = "";

	if($_SERVER["REQUEST_METHOD"] == "POST") {


		if (empty($_POST["nimi1"]) )  {
	$nimi1_error = "see väli on kohustuslik";
	
	}if (empty($_POST["nimi2"]) )  {
	$nimi2_error = "see väli on kohustuslik";
	
	}if (empty($_POST["kasutajanimi"]) )  {
	$kasutajanimi_error = "see väli on kohustuslik";
	}
		
	if (empty($_POST["email1"]) )  {
	$email1_error = "see väli on kohustuslik";
	
	}
	if (empty($_POST["email2"]) )  {
	$email2_error = "see väli on kohustuslik";
	
	}
	if (empty($_POST["parool1"]) )  {
			$parool1_error = "see väli on kohustuslik";
	} 		
	if (empty($_POST["parool2"]) )  {
			$parool2_error = "see väli on kohustuslik";
		} else {
			//siis pole parool tyhi
			if(strlen($_POST["parool2"]) < 8)	{
				$parool2_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
			if(strlen($_POST["parool1"]) < 8)	{
				$parool1_error = "Peab olema vähemalt 8 tähemärki pikk!";
			}
		}			
}
?>
