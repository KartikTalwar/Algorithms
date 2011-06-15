<?php

/**
 * Permutation Sort
 */
function permutationSort($items, $perms = array() ) 
{
    if (empty($items)) 
	{
		if(inOrder($perms))
		{
			return $perms;
		}
    }  
	else 
	{
        for ($i = count($items) - 1; $i >= 0; --$i) 
		{
			$newitems = $items;
			$newperms = $perms;
			list($foo) = array_splice($newitems, $i, 1);
			array_unshift($newperms, $foo);
			$res = permute($newitems, $newperms);

			if($res)
			{
				return $res;
			}		 		 
        }
    }
}



function inOrder($array)
{
	for($i=0;$i<count($array);$i++)
	{
		if(isset($array[$i+1]))
		{
			if($array[$i] > $array[$i+1])
			{
				return False;
			}
		}
	}
	
	return True;
}


?>