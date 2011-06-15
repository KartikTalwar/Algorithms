<?php

/**
 * Cocktail Sort
 *
 * @runtime O(n^2)
 */
function cocktailSort($array)
{
	if(is_string($array)) 
	{
		$array = str_split(preg_replace('/\s+/','',$array));
	}

	do
	{
		$swapped = False;
		
		for($i=0; $i<count($array); $i++)
		{
			if(isset($array[$i+1]))
			{
				if($array[$i] > $array[$i+1])
				{
					list($array[$i], $array[$i+1]) = array($array[$i+1], $array[$i]);
					$swapped = True;
				}
			}			
		}

		if ($swapped == False)
		{
			break;
		}

		$swapped = False;
		
		for($i=count($array)-1;$i>=0; $i--)
		{
			if(isset($array[$i-1]))
			{
				if($array[$i] < $array[$i-1]) 
				{
					list($array[$i],$array[$i-1]) = array($array[$i-1],$array[$i]);
					$swapped = True;
				}
			}
		}
	}
	while($swapped);

	return $array;
}



?>