<?php


/**
 * Luhn Check Algorithm
 *
 * @param	$digits numbers (eg. credit cards)
 * @return	(bool) If the number is valid 
 */
function LuhnCheck($digits)
{
	$digits = (string) $digits;
	$sum = 0;
	$alt = false;
	
	for($i = strlen($digits) - 1; $i >= 0; $i--) 
	{
		if($alt)
		{
			$temp = $digits[$i];
			$temp *= 2;
			$digits[$i] = ($temp > 9) ? $temp = $temp - 9 : $temp;
		}
		
		$sum += $digits[$i];
		$alt = !$alt;
	}

	return $sum % 10 == 0;
}



?>