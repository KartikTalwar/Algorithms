<?php


/**
 * Bubble Sort
 *
 * @runtime	O(n)
 */
function bubbleSort($array) 
{
	$length = count($array);
	
	for ($i=0; $i<$length; $i++) 
	{
		for ($j=0; $j<$length-1-$i; $j++) 
		{
			// Begin Swapping
			if ($array[$j+1] < $array[$j]) 
			{
				$tmp = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $tmp;
			}
		}
	}
	
	return $array;
}




?>