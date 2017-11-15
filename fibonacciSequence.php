<?php

	// Write function to compute Nth Fibonacci number? Both iterative and recursive?
	// sum of two previous numbers
	// 0, 1, 1, 2, 3, 5, 8, 13, 21

	$lim = 10;

	function sequence($lim){
		$seq = [0, 1];
		for($i=1; $i<$lim-1; $i++){
			array_push($seq, $seq[$i]+$seq[$i-1]);
		}
		return $seq;
	}
	
	if($argc>1){
		print_r(sequence($argv[1]));	
	}
	else echo "specify limit  - php fibonacciSequence.php 100\n\n";
	

?>