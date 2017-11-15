<?php 
	
	// In an array 1-10 numbers are stored, one number is missing how do you find it?

	$input = [1, 2, 3, 4, 5, 7, 8, 9, 10];
	
	// create array 1-10
	$full = range(1, 10);
	
	// find differences - elements that are in $full but not in input
	$diff = array_diff($full, $input);

	// serialize $diff array
	$diff = array_values($diff);

	// return element that's different
	echo $diff[0] . "\n";


 ?>