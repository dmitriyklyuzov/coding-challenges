<?php 
	// Given two arrays, 1,2,3,4,5 and 2,3,1,0,5
	// find which number is not present in the second array.

	$a = [1,2,3,4,5];
	$b = [2,3,1,0,5];

	// find diff between $a and $b
	// serialize difference array
	// get 0th element

	echo array_values(array_diff($a, $b))[0] . "\n";
	


 ?>