<?php

/**
 * Shell Sort
 *
 * @runtime O(n)
 */
function shellSort($array)
{
	$inc = round(count($array)/2);
	
	while($inc > 0)
	{
		for($i = $inc; $i < count($array);$i++)
		{
			$temp = $array[$i];
			$j = $i;
			
			while($j >= $inc && $array[$j-$inc] > $temp)
			{
				$array[$j] = $array[$j - $inc];
				$j -= $inc;
			}
		
			$array[$j] = $temp;
		}
		
		$inc = round($inc/2.2);
	}
	
	return $array;
}


?>