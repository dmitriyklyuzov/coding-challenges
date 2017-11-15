<?php 
	// In an array 1-100 multiple numbers are duplicates, how do you find it?

	$a = [1, 2, 3, 3, 4, 4, 5];
	$new = [];

	// count occurrences
	$b = array_count_values($a);
	
	// $b = [
	// [1] = 1
	// [2] = 1
	// [3] = 2
	// [4] = 1
	// [5] = 2
	// ]

	// loop through b, get elements where count > 1

	for($i=1; $i<=count($b); $i++){
		// if count > 1
		if($b[$i]>1){
			// add to new array
			array_push($new, $i);
		}
	}
	// return new array containing all the dups
	print_r($new);
	// echo $new[0];

 ?>