<?php 

	$string = "ABCDEFG";
	$character = "D";

	// simply replace character with ''
	function removeCharacterFromString($string, $character){
		echo str_replace($character, '', $string) . "\n";
	}

	removeCharacterFromString($string, $character);
 ?>