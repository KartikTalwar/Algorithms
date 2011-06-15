<?php


/**
 * Quick Sort
 *
 * @runtime O(nlog(n) )
 */
function quickSort($array) 
{
	if( count($array) < 2 )
	{
		return $array;
	}

	$left = $right = array();

	reset($array);
	$pivot_key = key($array);
	$pivot = array_shift($array);

	foreach($array as $k => $v) 
	{
		if($v < $pivot)
		{
			$left[$k] = $v;
		}
		else
		{
			$right[$k] = $v;
		}
	}

	$sorted =  array_merge( quicksort($left), array($pivot_key => $pivot), quicksort($right) );
	
	return $sorted;
}
 
 
 

?>