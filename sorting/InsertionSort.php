<?php


/**
 * Insertion Sort
 *
 * @runtime O(n^2)
 */
function insertionSort($array) 
{
	for($j=1; $j < count($array); $j++) 
	{
		$tmp = $array[$j];
		$i = $j;

		while(($i >= 0) && ($array[$i-1] > $tmp)) 
		{
			$array[$i] = $array[$i-1];
			$i--;
		}

		$array[$i] = $tmp;
	}
	
	return $array;
}



?>