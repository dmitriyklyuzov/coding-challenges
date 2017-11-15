<?php 
	$s1 = 'rail safety';
	$s2 = 'fairy tales';

	// replace all spaces with ''
	// check if strings are same lengths
	// check if one has all letters of other
		// loop through $s1
			// see if substr_count($s1, $s1[$i]) != substr_count($s2, $s1[$i])

	$s1 = str_replace(" ", "", $s1);
	$s2 = str_replace(" ", "", $s2);

	if(strlen($s1) == strlen($s2)){
		echo "strings are same length\n";
		
		$flag = true;

		for($i=0; $i<strlen($s1); $i++){
			
			if(substr_count($s1, $s1[$i]) != substr_count($s2, $s1[$i])){
				$flag = false;
				break;
			}
		}

		if($flag==true){
			echo "strings are anagram\n";
		}
		else echo "strings are not anagram\n";
	}
	else echo "strings are not same length\n";


?>