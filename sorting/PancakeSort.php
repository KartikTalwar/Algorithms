<?php

/**
 * Pancake Sort
 */
function pancakeSort($array)
{
	$count = count($array);
	$powercount = $count - 1;
	$i = 0;
	
	while($i < $powercount)
	{
		$n = 0;
		$largest = 0;
		
		while($n < $count)
		{
			if($array[$largest]<$array[$n])
			{
				$largest = $n;
			}
			++$n;
		}
		
		$num = $largest/2;
		$j = 0;
		
		while($j < $num)
		{
			$z = $array[$largest-$j];
			$array[$largest-$j] = $array[$j];
			$array[$j] = $z;
			++$j;
		}
		
		$num = --$count/2;
		$j = 0;
		
		while($j<$num)
		{
			$z = $array[$count-$j];
			$array[$count-$j] = $array[$j];
			$array[$j] = $z;
			++$j;
		}
		++$i;
	}
	
	return $array;
}


?>