<?php

function display_home(){

	require ("pages/home.php");

}

function display_apropos(){

    require ("pages/propos.php");

}

function display_attraction(){

    require ("pages/attraction.php");

}

function display_user_session(){

	if($_SESSION['stats']=="login-done"){

	    require ("pages/user_session_true.php");

	}else{

		require ("pages/user_session_false.php");

	}
}

function display_signin_failed(){

	require ("pages/signin_failed.php");

}

function display_signup_failed(){

    require ("pages/signup_failed.php");

}

function display_reserv_failed(){

    require ("pages/reserv_failed.php");

}