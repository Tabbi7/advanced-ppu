<?php
	include("query.php");

	if(!isLogged())
		die("Non siete loggati");

	if(!isset($_POST['id'])){
		$id=getId();
	}else{
		$id=$_POST['id'];
	}
	$utente=$_POST['utente'];
	$email=$_POST['email'];
	$ruolo=$_POST['ruolo'];/*check privilege escalation*/
	$branca=$_POST['branca'];
	if(($id==getId())&&(getRuolo()<=$ruolo)){//Mi sto cambiando il privilegio da solo (posso solo scendere)
		if(updateUserInfo($id,$utente,$email,$ruolo,$branca)!=0)
			echo 202;
		else
			echo 500;
	}else{
		$ruolo_originale=getUser()[0]['ruolo'];
		if(($id!=getId())&&(getRuolo()<=$ruolo)&&($ruolo>=$ruolo_originale)){//sto cambiando il privilegio ad un altro posso solo farlo aumentare fino al mio livello
			if(updateUserInfo($id,$utente,$email,$ruolo,$branca)!=0)
				echo 202;
			else
				echo 500;
		}else{
			echo 403;
		}
	}
?>
