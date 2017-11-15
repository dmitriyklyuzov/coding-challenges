<?php

	$s = "HHello wwoerld";
	$a = [];
	$x = strlen($s);

	for($i=0; $i<strlen($s); $i++){
		$current = $s[$i];
		// if repeats more than once
		if(substr_count($s, $current)==1 && $current!=" "){
			array_push($a, strpos($s, $current));
		}
	}

	echo $s[$a[0]] . "\n";
 ?>