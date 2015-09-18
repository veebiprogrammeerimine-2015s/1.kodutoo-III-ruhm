<?php
    $first_name = "Merilin";
	$last_name = "Takk";
	echo $first_name." ".$last_name;

?>
<br>
<?php

    $age = 3;
	
	//testib loogikat, juhul kui vanus on väiksem 
	//kui 18 siis kirjuta "alaealine", muul juhul "täisealine"
    
	//if's sisse loogikaehe
	if($age < 18) {
		//tõene
		
		echo "alaealine";
		
    } else {
		//väär
		
		echo "täisealine";
		
	}

?>	
<br>
<?php
    //vastavalt vanusele trükime nii mitu korda välja sõna "palju"
	
    for ($i = 0; $i < $age; $i = $i + 1){
		//see, mida korratakse
		echo "palju ".$i." ";
	
	}
	
	echo "õnne!";
		
	
	?>
<br>
<?php
    // trüki välja kuupäev: nädalapäev,kp,kuu,aasta - date
    echo date("l, j F Y e");
?>