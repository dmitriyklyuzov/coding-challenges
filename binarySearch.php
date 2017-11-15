<?php 

	// return index of x if present in array, else return -1

	function binarySearch($array, $left, $right, $x){
		
		if($right>=$left){
			$mid = $left + ($right-1)/2;
		}
	}

	
	// search algorithm that finds target value within a sorted array.
	// Compares the target value to the middle of element of the array
	// If unequal, the part in which it cannot be is discarded, the search continues in the other part. Applies to a wide range of problems.

	// $needle = 3;

	// $haystack = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

	// $lowIndex = $haystack[0];
	// $highIndex = $haystack[count($haystack)-1];
	
	// $lowElement = min($haystack);
	// $highElement = max($haystack);

	// echo "low element is $lowElement\n";
	// echo "high element is $highElement\n";
	// // echo "low index is $lowIndex\n";
	// // echo "high index is $highIndex\n";

	// while($lowElement<=$highElement){

	// 	// $middleIndex = (int)(count($haystack)/2-1);
	// 	// echo "middle index is $middleIndex\n";
		
	// 	$middleElement = (int)(($highElement-$lowElement)/2);
	// 	echo "middle element is $middleElement\n";

	// 	if($middleElement != $needle){
	// 		echo "Not in the middle, need to divide array\n";
	// 		// right array
	// 		if($needle>$middleElement){
	// 			echo "needle>middleElement, lowElement is now $lowElement\n";
	// 			$lowElement = $middleElement;
	// 		}
	// 		// left array
	// 		else{
	// 			echo "needle<=middleElement, highElement is now $highElement\n";
	// 			$highElement = $middleElement;
	// 		}
	// 	}
	// 	else{
	// 		echo "Needle found at (int)(count($haystack)/2 - 1)\n";
	// 		break;
	// 	}
	// }
 ?>