<?php 
	
	$_fp = open("php:stdin", "r");

	// get a line from stdin and save it to a variable
	$inputString = fgets($_fp);

	print($inputString);

	fclose($_fp);

 ?>