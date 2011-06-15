<?php


/**
 * Selection Sort
 *
 * @runtime O(n^2)
 */
function selectionSort($array) 
{
	$n = count($array);
	for($i = 0; $i < count($array); $i++) 
	{
		$min = $i;
		for($j = $i + 1; $j < $n; $j++)
		{
			if($array[$j] < $array[$min])
			{	
				$min = $j;
			}
		}

		list($array[$i],$array[$min]) = array($array[$min],$array[$i]);
	}
	
	return $array;
}
 
 

?>