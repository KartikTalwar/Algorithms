<?php


/**
 * Bogo Sort
 *
 * @runtime O(n*n!)
 */
function bogoSort($array)
{
	while(!is_sorted($array))
	{
		shuffle($array);
	}
}


function is_sorted($array) 
{
	for($i = 0; $i < count($array); $i++)
	{
		if($array[$i] < $array[$i-1])
		{
			return False;
		}
	}
	
	return True;
}


?>