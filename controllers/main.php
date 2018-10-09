<?php


include_once('models/functions.php');
	
	
	if(!isAuth()){
		header('Location: login.php');
		exit();
	}
include("views/v_main.php");