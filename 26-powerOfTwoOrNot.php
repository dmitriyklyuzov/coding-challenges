<?php 
	// Write code to check whether a number is power of two or not?
	
	// 2^n

	// check n

	// ex input = 4
	// output TRUE, because 2^2 = 4

	$input = 4;

	function isPowerOfTwo($input){

		$n = $input;

		if($n==0){
			return "Not a power of 2";
		}
		while($n!=1){
			// if $n is NOT divisible by 2 without remainder
			if($n%2!=0){
				return "Not a power of two";
			}
			// if $n is divisible by 2
			else{
				// divide n by 2
				$n=$n/2;
			}
		}
		return "$input is a power of two";
	}
	
	echo isPowerOfTwo($input) . "\n";


?>