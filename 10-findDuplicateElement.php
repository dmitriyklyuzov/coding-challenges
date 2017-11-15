<?php 
	// In an array 1-100 exactly one number is duplicate how do you find it?
	$a = [1, 2, 3, 3, 4, 5];

	// count number of times each value is repeated
	$b = array_count_values($a);

	// $b = [
	// [1] = 1
	// [2] = 1
	// [3] = 1
	// [4] = 2
	// [5] = 1
	// ]

	// find the element with max number and find it's key, which is the value we are searching for
	echo array_search(max($b), $b) . "\n";
 ?>