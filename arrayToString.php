<?php 
	
	function arrayToString($array){
		$string='';
		for ($i=0; $i < count($array); $i++) { 
			$string.=$array[$i];
		}
		return $string;
	}

	$a = ['H', 'e', 'Y'];

	echo arrayToString($a) . "\n";
 ?>