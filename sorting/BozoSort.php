<?php

/**
 * Bozo Sort
 *
 * @runtime O(n*n!)
 */
function bozoSort($array)
{
	$sorted = $array;
	sort($sorted);
	
	while($sorted !== $array)
	{
		$i = array_rand($array);
		$j = array_rand($array);
		
		if($i < $j)
		{
			if($array[$i] > $array[$j])
			{
				$z = $array[$j];
				$array[$j] = $array[$i];
				$array[$i] = $z;
			}
		}
		else
		{
			if($array[$j] > $array[$i])
			{
				$z = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $z;
			}
		}
	}

	return $array;
}



?>