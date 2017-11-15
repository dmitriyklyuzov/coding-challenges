<?php 
	
	$input = 16;

	// checks condition, like if($input>1)
	// while($input>1){
	// 	echo $input . "\n";
	// 	$input--;
	// }

	while($input%2==0){
		$input = $input / 2;
		echo $input . "\n";
	}
 ?>