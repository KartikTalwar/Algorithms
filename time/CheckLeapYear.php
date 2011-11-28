<?php



function is_leap($year)
{
	$check = ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
	
	return $check;
}


?>