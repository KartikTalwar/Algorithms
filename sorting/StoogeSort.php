<?php

/**
 * Stooge Sort
 *
 * @runtime O(n)
 */
function stoogeSort($array, $i, $j)
{
	if($array[$j] < $array[$i])
	{
		list($array[$j],$array[$i]) = array($array[$i], $array[$j]);
	}
	if(($j - $i) > 1)
	{
		$t = ($j - $i + 1) / 3;
		stoogesort($array, $i, $j - $t);
		stoogesort($array, $i + $t, $j);
		stoogesort($array, $i, $j - $t);
	}
	
	return $array;
}


?>