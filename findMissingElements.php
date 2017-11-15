<?php
	// two arrays, sorted/unsorted, числа от 1 - 100, какие-то миссинг

	$a = [1, 2, 9, 4, 10, 7, 6, 5];

	function findMissingElements($a){
		
		// sort($a);

		$full = range(1, 10);

		$missing = array_diff($full, $a);

		// print_r($a);

		print_r($missing);
	}

	findMissingElements($a);
?>