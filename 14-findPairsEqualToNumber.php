<?php 
	// How to find all pairs in array of integers whose sum is equal to given number

	// You can go further to find unique pairs if you want

	$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$input = 9;

	$pairs = []; // ex [[0] = "1, ", [2] = "4, 5"]

	// loop through array
	for($i=0; $i<count($a); $i++){
		
		// get current element 1
		$el1 = $a[$i];

		// loop through array again, seeking pairs
		for($j=0; $j<count($a); $j++){
			
			// get current element 2
			$el2 = $a[$j];

			// check if el1 != $el2
			if($el1!=$el2){

				// check if $el1 + $el2 == $input
				if($el1 + $el2 == $input){

					// add to array
					array_push($pairs, "$el1, $el2");
				}
			}
		}
	}

	// print out array
	print_r($pairs);

 ?>