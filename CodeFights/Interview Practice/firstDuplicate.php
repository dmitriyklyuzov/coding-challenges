<?php 

	/**

	O(n) time complexity and O(1) additional space complexity

	Given an array a that contains only numbers in the range from 1 to a.length
	find the first duplicate number for which the second occurrence has the minimal index.

	In other words, if there are more than 1 duplicated numbers, return the number for which the second occurrence has a smaller index than the second occurrence of the other number does. If there are no such elements, return -1.

	Example

	For a = [2, 3, 3, 1, 5, 2], the output should be
	firstDuplicate(a) = 3.

	There are 2 duplicates: numbers 2 and 3. The second occurrence of 3 has a smaller index than than second occurrence of 2 does, so the answer is 3.
	*/

	function firstDuplicate($a){
		// use case
		if(count($a)==1){
			return -1;
		}

		$secondDups = array_diff_assoc($a, array_unique($a));
		// no dups - return -1
		if(count($secondDups)==0){
			return -1;
		}
		// dupes exist
		else{
			return array_values($secondDups)[0];
		}

	}

	$a = [2, 3, 3, 1, 5, 2]; // 3
	$a = [2, 4, 3, 5, 1]; // -1
	// $a = [2, 2]; // 2
	// $a = [2, 3, 3]; // 3
	// $a = [3, 3, 3]; // 3
	// $a = [8, 4, 6, 2, 6, 4, 7, 9, 5, 8]; // 6

	print firstDuplicate($a) . "\n";

?>