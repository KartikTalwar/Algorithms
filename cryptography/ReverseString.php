<?php


/**
 * Reverse String Function
 *
 */
function ReverseString($string)
{
	$len = "";
	for($j=0; $j<70000; $j++)
	{
		if(@$string[$j] != "")
		{
			$len++;
		}
		else
		{
			break;
		}
	}
	
	$rev = "";
	
	for($i=0; $i<$len; $i++)
	{
		$rev .= $string[$len-1-$i];
	}
	
	return $rev;
}


?>