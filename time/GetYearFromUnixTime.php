<?php



/**
 * Gets the Year from the given unix timestamp
 *
 * @param	$epoch The unix timestamp
 * @return	$year The 4-digit year representation
 */
function getYearFromUnixTime($epoch)
{
	$years = $epoch/(365*86400);
	$year = 1970+floor($years);
	
	return $year;
}


?>