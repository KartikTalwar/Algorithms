<?php

/**
 * Rotates a string by N letters
 *
 */
function rotate($string, $n) 
{
	$length = strlen($string);
	$result = '';

	for($i = 0; $i < $length; $i++) 
	{
		$ascii = ord($string{$i});

		$rotated = $ascii;

		if ($ascii > 64 && $ascii < 91) 
		{
			$rotated += $n;
			$rotated > 90 && $rotated += -90 + 64;
			$rotated < 65 && $rotated += -64 + 90; 
		} 
		elseif ($ascii > 96 && $ascii < 123) 
		{
			$rotated += $n;
			$rotated > 122 && $rotated += -122 + 96;
			$rotated < 97 && $rotated += -96 + 122; 
		}

		$result .= chr($rotated);
	}

	return $result;
}



?>