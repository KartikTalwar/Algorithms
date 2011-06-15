<?php

/**
 * Radix Sort for 0 to 256
 *
 * @runtime O(kN)
 */
function radixSort($array)
{
	$n = count($array);
	$partition = array();
	
	for ($slot = 0; $slot < 256; ++$slot) 
	{
		$partition[] = array();
	}
	
	for($i = 0; $i < $n; ++$i) 
	{
		$partition[$array[$i]->age & 0xFF][] = &$array[$i];
	} 
	
	$i = 0;
	
	for ($slot = 0; $slot < 256; ++$slot) 
	{
		for ($j = 0, $n = count($partition[$slot]); $j < $n; ++$j) 
		{
			$array[$i++] = &$partition[$slot][$j];
		}
	}

	return $array;
}
 
 
?>