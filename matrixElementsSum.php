<?php

	/** After they became famous, the CodeBots all decided to move to a new building and live together. The building is represented by a rectangular matrix of rooms.

	Each cell in the matrix contains an integer that represents the price of the room. Some rooms are free (their cost is 0), but that's probably because they are haunted, so all the bots are afraid of them. That is why any room that is free or is located anywhere below a free room in the same column is not considered suitable for the bots to live in.

	Help the bots calculate the total price of all the rooms that are suitable for them.

	3 x 4 matrix - 3 rows of 4 elements

	$matrix =[	[0, 1, 1, 2],
				[0, 5, 0, 0], 
				[2, 0, 3, 3] ]; // sum is 9

	$matrix[1][1] = 5

	count($matrix) = 3

	*/

	$matrix =[	[0, 1, 1, 2], 
				[0, 5, 0, 0], 
				[2, 0, 3, 3]]; // sum is 9

	$matrix = [	[1,1,1,0], 
				[0,5,0,1], 
				[2,1,3,10]]; // sum is 9

	$matrix = [	[1,1,1],
				[2,2,2], 
				[3,3,3]]; // sum is 18

	function matrixElementsSum($matrix) {

		$rows = count($matrix);
		$cols = count($matrix[0]);

		$total = 0;
		
		// echo "$rows rows, $cols columns\n";
		
		// iterate through rows
		for($i=0; $i<$rows; $i++){
			
			// print_r($matrix[$i]);
			
			// iterate through cols
			for($j=0; $j<$cols; $j++){

				$thisEl = $matrix[$i][$j];
				// echo "row $i, col $j -> ";
				// echo $matrix[$i][$j];
				// echo "\n";
				
				// if this el is NOT 0
				if($thisEl!=0){
					// if first row, don't check aboves
					if($i==0){
						$total += $thisEl;
					}
					// if NOT first row
					else{
						// check if el above is NOT 0
						if($matrix[$i-1][$j]!=0){
							$total += $thisEl;
						}
						// if el above is 0
						else{
							// set this el to 0
							$matrix[$i][$j] = 0;
						}
					}
				}
				// else{
				// 	echo "0 at row $i, col $j\n";
				// }
			}
		}

		echo "Total Price: $total\n";
		// print_r($matrix);
	}

	matrixElementsSum($matrix);

?>