<?php 
	// How do you find second highest number in an integer array?
	
	$a = [1, 2, 3, 4, 5, 8, 6, 7, 9, 11, 12];
	// highest - 10
	// second highest - 9

	// sort lowest to highest, not keeping keys
	sort($a);

	// return ith element, which is element in position count($a)-2
	echo $a[count($a)-2] . "\n";

?>