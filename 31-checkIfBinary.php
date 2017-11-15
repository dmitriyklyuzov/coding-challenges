<?php 

	// How to check if a number is binary?
	// For this question, you need to write a function which will accept an integer and return true if it contains only 0 and 1 e.g. if input is 123 then your function will return false, for 101 it should return true.

	function checkIfBinary($input){
		
		// ex. 10101;
		$number = $input;

		$flag = true;
		
		while($number!=0){
			// if remainder of $number%10 is not 0 or 1
			if($number%10>1){
				// set flag to false
				$flag = false;
				// exit loop
				break;
			}
			// set number to $number/10, so that 10101 -> 1010 -> 101 - >10 -> 1
			$number = (int)($number/10);
		}

		if($flag){
			return "$input is binary";
		}
		else return "$input is NOT binary";
	}

	if($argc>1){
		echo checkIfBinary($argv[1]) . "\n";
	}
	else echo "Missing second argument 'number'\n";

 ?>