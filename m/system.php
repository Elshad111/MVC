<?php

function template($fname, $vars = []){
	extract($vars);
	
	ob_start();
	include "v/$fname.php";
	return ob_get_clean();
}


