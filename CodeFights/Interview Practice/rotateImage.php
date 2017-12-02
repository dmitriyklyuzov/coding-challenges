<?php 
	
	function printMatrix($a){
		$width = count($a[0]);
		$height = count($a);

		for($i=0; $i<$width; $i++){
			for ($j=0; $j<$height; $j++){
				echo $a[$i][$j];
				if(strlen($a[$i][$j])==1){
					echo "  ";
				}
				else echo " ";
			}
			echo "\n";
		}
	}
	/**

	a =[[1, 2, 3],
    	[4, 5, 6],
    	[7, 8, 9]]


   	a =[[1,  2,  3,  4],
   		[5,  6,  7,  8],
   		[9,  10, 11, 12],
   		[13, 14, 15, 16]]
	*/
	
	$a = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

	$a =[[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12],[13, 14, 15, 16]];

	function rotateImage($a){
		$width = count($a[0]);
		$height = count($a);

		for($i=0; $i<=floor($width/2)-1; $i++){

			for($j=$i; $j<$width-1-$i; $j++){

				$topLeft = 		$a[$i][$j];
				$topRight = 	$a[$j][$width-1-$i];
				$bottomRight = 	$a[$width-1-$i][$width-1-$j];
				$bottomLeft = 	$a[$width-1-$j][$i];

				$a[$i][$j] = 					$bottomLeft;
				$a[$j][$width-1-$i] = 			$topLeft;
				$a[$width-1-$i][$width-1-$j] = 	$topRight;
				$a[$width-1-$j][$i] = 			$bottomRight;
			}
		}

		return $a;

	}

	// print rotateImage($a) . "\n";
	printMatrix(rotateImage($a));
?>