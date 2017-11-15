<?php

// Given number n. Print number from 1 to n. But:

// when number is divided by 3, print "fizz".
// when number is divided by 5, print "buzz".
// when number is divided by both 3 and 5, print "fizz buzz".


// input - number n, ex. 13
// divisible by 3? print "fizz"
// divisible by 5? print "buzz"
// divisible by 5 and 3? print "fizz buzz"

// print number from 1 to n


$n = 30;

for($i=1; $i<=$n; $i++){

	// if divisible by 3, but not by 5
	if($i%3==0 && $i%5!=0){
		print "fizz\n";
		// print "$i - divisible by 3\n";
	}
	// if divisible by 5, but not by 3
	else if($i%5==0 && $i%3!=0){
		print "buzz\n";
		// print "$i - divisible by 5\n";
	}
	// if divisible by 3 and 5
	else if($i%3==0 && $i%5==0){
		print "fizz buzz\n";
		// print "$i - divisible by 3 and 5\n";
	}
	else{
		print "$i\n";
		// print "$i - not divisible\n";
	}
}

?>