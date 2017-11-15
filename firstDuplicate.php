<?php

// array $a = [2, 3, 3, 1, 5, 2];
// [0, 2]

function firstDuplicate($a) {
	// array that holds positions of all of the second occurences
	// $x=[];
    // variable that holds position of the lowest key
    $x = count($a);

    for($i=0; $i<count($a); $i++){
        $current = $a[$i]; // ex 2, index 0
        
        // get all occurances of $current
        $result = array_keys($a, $current); // ex, ([0]=>0, [1]=>5), so 2 exists in the 0th and 5th position

        // for 2 - ([0]=>0, [1]=>5)
        // for 3 - ([0]=>1, [1]=>2)
        
        // see if $current exists more than once in array
        if(count($result)>1){
			// add second pos to the $x array
			// array_push($x, $result[1]);
            if($result[1]<$x){
                $x = $result[1];
            }
        }
        // else continue looping
        
    }
    if($x!=-1){
        return $a[$x];
    }
    else return -1;
}

// contains numbers from 1 to a.length()
// find first duplicate

// for example, firstDuplicate([2, 3, 3, 1, 5, 2]) = 3
// because 2 repeats two times, 3 repeats two times
// but second three comes in before second 2