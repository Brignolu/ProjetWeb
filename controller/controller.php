<?php
//direction de base
$page ="home";

//script de connection et l'inscription
if(isset($_GET["ac"])){
	if($_GET["ac"]=="signin"){
		if(user_signin($_POST["pseudo"], $_POST["password"], $c, $encryption_key)){
		}
		else{
			$page = "connection_failed";
		}
	}
	//incription et connection automatique
	if($_GET["ac"]=="signup"){
		if(user_signup($_POST["fname"], $_POST["lname"], $_POST["adressepostal"], $_POST["codepostal"], $_POST["ville"], $_POST["email"], $_POST["password"], $_POST["tel"], $c, $encryption_key)){
			user_signin($_POST["email"], $_POST["password"], $c, $encryption_key);

		}
		else {
			$page = "sub_failed";
		}
	}
		//test de la reservation
	if($_GET["ac"]=="reserv"){
		if(user_reserv($_POST["fnameenfant"], $_POST["lnameenfant"], $_POST["age"], $_POST["date"], $_POST["creneau"], $c, $encryption_key)){
		}
		else {
			$page = "reserv_failed";
		}
	}

}


//vérification si le user est enregister

if(isset($_SESSION['stats']) and $page != "connection_failed" and
	$page != "sub_failed"){
	if(isset($_SESSION['pseudo'])){
			$page ="user_log";
	}
	else{
		$page ="home";
	}
}
else
{
	$_SESSION['stats']="new_user";
}



//formulaire d'incription
if(isset($_GET["subform"])){
    $page="user_sub";
}
//formulaire d'incription
if(isset($_GET["reservform"])){
    $page="user_reserv";
}
//formulaire de modification d'information
if(isset($_GET["infoform"])){
    $page="update_info_form";
}





//déconnection
if(isset($_GET["logout"])){
	streamer_logout();
	header('location: index.php');
}


