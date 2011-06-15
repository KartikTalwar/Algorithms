<?php

error_reporting(0);

/**
 * Piegon Sort
 *
 * @runtime O(n+N)
 */
function pigeonSort($array)
{
	$min = $max = $array[0];

	foreach ($array as $num)
	{       
		if ($num < $min)
		{
			$min = $num;
		}
		if ($num > $max)
		{
			$max = $num;
		}
	}

	foreach ($array as $num)
	{
		$d[$num-$min]++;
	}
	
	for ($i = 0; $i <= $max - $min; $i++ )
	{
		while ($d[$i + $min]-- > 0)
			{
			$res[] = $i+$min;
		}
	}
	
	return $res;
}



?>