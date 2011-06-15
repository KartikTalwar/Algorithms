<?php

/**
 * Gnome Sort
 *
 * @runtime O(n^2)
 */
function strandSort($array) 
{
	$result = array();
	
	while (count($array)) 
	{
		$sublist = array();
		$sublist[] = array_shift($array);
		$last = count($sublist)-1;
		
		foreach ($array as $i => $val) 
		{
			if ($val > $sublist[$last]) 
			{
				$sublist[] = $val;
				unset($array[$i]);
				$last++;
			}
		}

		if (!empty($result)) 
		{
			foreach ($sublist as $val) 
			{
				$spliced = false;
				
				foreach ($result as $i => $rval) 
				{
					if ($val < $rval) 
					{
						array_splice($result, $i, 0, $val);
						$spliced = true;
						break;
					}
				}

				if (!$spliced) 
				{
					$result[] = $val;
				}
			}
		}
		else 
		{
			$result = $sublist;
		}
	}

	return $result;
}



?>