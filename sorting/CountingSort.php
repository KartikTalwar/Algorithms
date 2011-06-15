<?php

/**
 * Counting Sort
 *
 * @runtime O(n+k)
 */
function countingSort($array)
{
	$count = array();
	$min =  min($array);
	$max = max($array);
	
	for($i = $min; $i <= $max; $i++)
	{
		$count[$i] = 0;
	}

	foreach($array as $number)
	{
		$count[$number]++; 
	}
	
	$z = 0;

	for($i = $min; $i <= $max; $i++) 
	{
		while( $count[$i]-- > 0 ) 
		{
			$array[$z++] = $i;
		}
	}
}

?>