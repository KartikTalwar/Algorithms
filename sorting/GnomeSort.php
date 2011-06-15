<?php

/**
 * Gnome Sort
 *
 * @runtime O(n^2 )
 */
function gnomeSort($array) 
{ 
	for ($i = 1; $i < count($array);) 
	{ 
		if ($array[$i-1] <= $array[$i]) 
		{
			$i++;
		} 
		else 
		{ 
			$temp = $array[$i]; 
			$array[$i] = $array[$i-1]; 
			$array[$i-1] = $temp; 
			$i--; 
			
			if ($i == 0) 
			{
				$i = 1;
			} 
		} 
	} 
	
	return $array; 
}


?>