<?php

/**
 * Bucket Sort
 *
 * @runtime O(n+k)
 */
function bucketSort($array) 
{
	$count = array_fill(0, count($array), 0);

	foreach ($array as $value) 
	{
		$count[$value]++;
	}

	$array = array();
	
	foreach ($count as $nr => $amount) 
	{
		for ($i=0; $i < $amount;$i++) 
		{
			array_push($array, $nr);
		}
	}

  return $array;
}



?>