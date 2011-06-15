<?php

/**
 * Heap Sort
 *
 * @runtime O( nlog(n) )
 */
function heapSort($array) 
{
	$init = (count($array) - 1) / 2;
	
	for($i=$init; $i >= 0; $i--)
	{
		$count = count($array) - 1;
		buildHeap($array, $i, $count);
	}

	for ($i = (count($array) - 1); $i >= 1; $i--)  
	{
		$tmp_var = $array[0];
		$array [0] = $array [$i];
		$array [$i] = $tmp_var;
		buildHeap($array, 0, $i - 1);
	}
	
	return $array;
}



function buildHeap(&$array, $i, $t)
{
	$tmp_var = $array[$i];    
	$j = $i * 2 + 1;

	while ($j <= $t)  
	{
		if($j < $t)
		if($array[$j] < $array[$j + 1]) 
		{
			$j = $j + 1; 
		}
		
		if($tmp_var < $array[$j]) 
		{
			$array[$i] = $array[$j];
			$i = $j;
			$j = 2 * $i + 1;
		} 
		else 
		{
			$j = $t + 1;
		}
	}
	
	$array[$i] = $tmp_var;
}

 
?>