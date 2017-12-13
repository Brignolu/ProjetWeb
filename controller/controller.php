<?php

// Direction de base ---------------------------------------------------------------------------------------------------

$page ="home";


// Script de connection ------------------------------------------------------------------------------------------------
// et d'inscription ----------------------------------------------------------------------------------------------------

if(isset($_GET["ac"])){
	if($_GET["ac"]=="signin"){
		if(user_signin($_POST[ "pseudo"], $_POST["password"], $c, $encryption_key)){
		}
		else{
			$page = "connection_failed";
		}
	}

	// Incription et connection automatique ----------------------------------------------------------------------------

    if($_GET["ac"]=="signup"){
		if(user_signup($_POST["fname"], $_POST["lname"], $_POST["adressepostal"], $_POST["codepostal"], $_POST["ville"], $_POST["email"], $_POST["password"], $_POST["tel"], $c, $encryption_key)){
			user_signin($_POST["email"], $_POST["password"], $c, $encryption_key);

		}
		else {
			$page = "sub_failed";
		}
	}

	// Test de la reservation ------------------------------------------------------------------------------------------

    if($_GET["ac"]=="reserv"){
		if(user_reserv($_POST["fnameenfant"], $_POST["lnameenfant"], $_POST["age"], $_POST["date"], $_POST["creneau"], $c, $encryption_key)){
		}
		else {
			$page = "reserv_failed";
		}
	}
    if($_GET["ac"]=="hall-form"){
        if(user_reserv($_POST["fnameenfant"], $_POST["lnameenfant"], $_POST["age"], $_POST["date"], $_POST["creneau"], $c, $encryption_key)){
        }
        else {
            $page = "reserv_failed";
        }
    }

}


// Vérification si le user est enregister

if(isset($_SESSION['stats']) and $page != "connection_failed" and $page != "sub_failed"){
    $page = "home";

    if(isset($_GET["user_log"])){
        $page = "user_log";
    }
}
else {
	$_SESSION['stats'] = "new_user";
}


// Formulaire d'incription

if(isset($_GET["subform"])){
    $page = "user_sub";
}

// Page A propos

if(isset($_GET["propos"])){
    $page = "propos";
}

// Page Attraction

if(isset($_GET["attraction"])){
    $page = "attraction";
}

//formulaire de reservation
if(isset($_GET["reservform"])){
    if($_GET["reservform"] == "reserv"){
        $formules = recup_formule($c, $encryption_key);
        $page = "user_reserv";
    }
    if($_GET["reservform"] == "hall-select"){
        $salles = recup_hall($c, $encryption_key);
        $page = "hall-select";
    }
}

//formulaire de modification d'information
if(isset($_GET["infoform"])){
    $page = "update_info_form";
}





//déconnection
if(isset($_GET["logout"])){
	streamer_logout();
	header('location: index.php');
}


