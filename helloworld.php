<?php
	$first_name = "Hendrik";
	$last_name = "Vallimägi";
	$age = 20;
	
	echo $first_name." ".$last_name;
?>
<br>
<?php
	
	// testib loogikat, juhul kui vanus on väiksem kui 18 siis kirjuta ""alaealine""
	// muul juhul ""täisealine""

	// if'i sisse loogikatehe 
	if($age >= 18) {
		//tõene
		
		echo "täisealine";
	} else {
		//väär
		
		echo "alaealine";
	}
	
?>
<br>
<?php

	//vastavalt vanusele trükima välja niimitu korda välja sõna "palju"
	
	for($i = 0; $i < $age; $i = $i + 1) {
		
		// tegevus mis kordub
		echo "palju ".$i." ";
	}
	
	echo "õnne!";
	
?>
<br>
<?php
	// trüki välja kuupäev kujul nädalapäev, kuupäev, aasta
	echo date("l. F j, Y");




?>