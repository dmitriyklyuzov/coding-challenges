<?php

/** Given a string S of length N find longest substring without repeating characters.
Example:
Input: "stackoverflow"
Output: "stackoverfl"
If there are two such candidates, return first from left. I need linear time and constant space algorithm.
*/
	$input = "stackoverflow";
	$input = "substring";

	function findLongestSubstring($input){

		$string2 = "";

		for($i=0; $i<strlen($input); $i++){

			// check if this character is in the second string
			if(strpos($string2, $input[$i])){
				// if character is already in second string, break
				echo "Character $input[$i] is already in string 2\n";
				break;
			}
			else{
				// if not, add it to second string, keep looping
				$string2 = $string2 . $input[$i];
				echo "Character $input[$i] is NOT string 2. Adding...\n";
			}
		}

		echo "Longest substr without repeating chars: '$string2'\n";

	}
	
	// If args provided, use argv[1] as input string
	if($argc>1){
		findLongestSubstring($argv[1]);
		// echo "argv[1] is $argv[1]\n";
	}
	// otherwise, use 'stackoverflow' as input string
	else{
		echo "No input provided, using '$input'\n";
		findLongestSubstring($input);
	}

?>