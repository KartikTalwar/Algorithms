<?php

/**
 * Comb Sort
 *
 * @runtime O(n^2)
 */
function combSort($array)
{
	$gap = count($array);
	$swap = True;
	
	while ($gap > 1 || $swap)
	{
		if($gap > 1)
		{
			$gap /= 1.25;
		}
		
		$swap = False;
		$i = 0;
		while($i+$gap < count($array))
		{
			if($array[$i] > $array[$i+$gap])
			{
				list($array[$i], $array[$i+$gap]) = array($array[$i+$gap],$array[$i]);
				$swap = True;
			}
			$i++;
		}
	}
	
	return $array;
}

?>
