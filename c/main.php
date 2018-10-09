<?php


include_once('m/functions.php');
	
	
	if(!isAuth()){
		header('Location: login.php');
		exit();
	}
include("v/v_main.php");