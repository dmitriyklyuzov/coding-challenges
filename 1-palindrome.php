<?php 
	// ex "alula"

	if($argc>1){
		if(ucwords(strtolower($argv[1])) == ucwords(strtolower(strrev($argv[1])))){
			echo "$argv[1] is a palindrome\n";
		}
		else echo "$argv[1] is NOT a palindrome\n";
	}
	else echo "String should be passed as a second argument\n";

?>