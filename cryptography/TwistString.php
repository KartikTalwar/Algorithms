<?php


/**
 * Twists and jumbles words in an array and outputs the array as one word
 *
 */
function twistString($array)
{
	$twisted = "";
	$arraylen = array();

	foreach($array as $element)
	{
		$arraylen[] = strlen($element);
	}

	for($i=0; $i<max($arraylen); $i++)
	{
		foreach($array as $element)
		{
			if($i < strlen($element) )
			{
				$twisted = $twisted . $element{$i};
			}
		}
	}

	return $twisted;
}

?>