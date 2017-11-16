<?php

	// you have a sorted/unsorted array, 1-100
	// one number is missing
	// find that number
	
	$a = [1, 2, 3, 5, 6, 7, 8, 9, 10]; // 4
	$a = [1, 2, 3, 4, 5, 6, 7, 8, 10]; // 9

	function findMissingElement($a){
		
		// sum of elements from 1 to 1 = n(n+1)/2
		// lets say the array is 1-10, then it's sum will be 10(10+1)/2

		echo (10*(10+1)/2) - (array_sum($a)) . "\n";		

		// $totalSumOfElements = 10*(10+1)/2;
		// $sumOfElementsOfInput = array_sum($a);
		// echo $totalSumOfElements - $sumOfElementsOfInput . "\n";

	}

	findMissingElement($a);

	?>