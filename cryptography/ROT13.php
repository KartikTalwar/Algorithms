<?php


/**
 * Rotates a string by 13 characters
 *
 */
function rot13($s) 
{ 
	$n = 13;
	
	$n = (int)$n % 26; 
	
	if (!$n)
	{
		return $s; 
	}
	
	for ($i = 0, $l = strlen($s); $i < $l; $i++) 
	{ 
		$c = ord($s[$i]); 
		if ($c >= 97 && $c <= 122) 
		{ 
			$s[$i] = chr(($c - 71 + $n) % 26 + 97); 
		} 
		else if ($c >= 65 && $c <= 90) 
		{ 
			$s[$i] = chr(($c - 39 + $n) % 26 + 65); 
		} 
	} 
	
	return $s; 
} 


?>