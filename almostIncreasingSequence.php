<?php 

	// Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.

	$sequence = [1, 3, 2, 1]; // false
	// $sequence = [1, 3, 2]; // true
	// $sequence = [10, 1, 2, 3, 4, 5]; // true
	// $sequence = [1, 1, 1, 2, 3]; // false
	// $sequence = [0, -2, 5, 6]; // true
	// $sequence = [1, 2, 3, 4, 5, 3, 5, 6]; // false
	// $sequence = [1, 2, 1, 2]; //false

	function almostIncreasingSequence($sequence){
		
		$count=0;

		$len = count($sequence);
		echo "sequence length is $len\n";
		
		// start with the 1st element, not 0th
		// that way you don't get the 'undefined offset' notice
		for($i=1; $i<=$len-1; $i++){
			$thisEl = $sequence[$i];
			$prevEl = $sequence[$i-1];
			echo "iteration #$i, element is '$thisEl'\n";
			if($count>=2){
				echo "Count >= 2, breaking...\n";
				break;
			}
			// if current item <= previous
			if($thisEl<=$prevEl){
				echo "Element '$sequence[$i]' is <= previous el '$prevEl'\n";
				// increase count
				$count++;
				echo "increased count to $count\n";
				// if item at pos $i is less than item at $i-2 AND
				// item to the right of $i less than or equal to item to the left of $i
				if(isset($sequence[$i-2]) && isset($sequence[$i+1])){
					if($sequence[$i]<=$sequence[$i-2] && $sequence[$i+1]<=$sequence[$i-1]){
						return 'false';
					}
				}

				// if(isset($sequence[$i-2]){
				// 	if($thisEl <= $sequence[$i-2]){
				// 		return 'false';
				// 	}
				// }
			}
			else echo "$thisEl is not <= $prevEl\n";
		}

		if($count<=1){ return 'true'; } else return 'false';
	}

	echo almostIncreasingSequence($sequence)."\n";
 ?>