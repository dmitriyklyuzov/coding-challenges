<?php 

	// Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.

	// For sequence = [1, 3, 2, 1], the output should be
	// almostIncreasingSequence(sequence) = false;

	// For sequence = [1, 3, 2], the output should be
	// almostIncreasingSequence(sequence) = true.

	$sequence = [1, 3, 2, 1]; // false
	$sequence = [1, 3, 2]; // true
	$sequence = [10, 1, 2, 3, 4, 5]; // true
	$sequence = [1, 1, 1, 2, 3]; // false
	$sequence = [0, -2, 5, 6]; // true
	// $sequence = [1, 2, 3, 4, 5, 3, 5, 6]; // false
	// $sequence = [1, 2, 1, 2]; //false

	function almostIncreasingSequence($sequence){
		
		$count=0;
		
		for($i=0; $i<count($sequence)-1; $i++){
			if($sequence[$i]<=@$sequence[$i-1]){
				$count++;
				// if item at pos $i is less than item at $i-2 AND
				// item to the right of $i less than or equal to item to the left of $i
				if($sequence[$i]<=@$sequence[$i-2] && $sequence[$i+1]<=@$sequence[$i-1]){
					return false;
				}
			}
		}

		if($count<=1){ return 'true'; } else return 'false';
	}

	echo almostIncreasingSequence($sequence)."\n";
 ?>