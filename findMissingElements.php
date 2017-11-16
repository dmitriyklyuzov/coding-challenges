<?php

	// you have a sorted/unsorted array, 1-100
	// multiple numbers are missing
	// find those numbers

	$a = [1, 2, 9, 4, 10, 7, 6, 5]; // 3, 8

	function findMissingElements($a){
		
		// sort($a);

		$full = range(1, 10);

		$missing = array_diff($full, $a);

		// print_r($a);

		print_r($missing);
	}
	
	findMissingElements($a);

?>