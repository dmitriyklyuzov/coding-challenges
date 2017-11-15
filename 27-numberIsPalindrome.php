<?php 
	$input = 1221;

	// == compares values, so no need to convert input to string for comparison
	if(strrev((string)$input) == $input){
		echo "$input is a palindrome\n";
	}
	else echo "Not a palindrome\n";
 ?>