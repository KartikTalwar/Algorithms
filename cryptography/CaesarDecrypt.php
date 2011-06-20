<?php


/**
 * Caesar Decrypt Function
 *
 */
function CaesarDecrypt($str, $key)
{
	if( is_string($str) && is_string($key) && ctype_alpha($key) ) 
	{
		$sl = strlen($str); $kl = strlen($key);
		$fk = str_split(str_repeat($key, ceil($sl/$kl)));
		$s = cltn($key);
		$al = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$nstr = '';
		
		foreach( str_split($str) as $i => $v ) 
		{
			if( cltn($v) ) 
			{
				$fkn = cltn($fk[$i]);
				$ltn = cltn($v) - 1;
				
				if( ( $ltn - $fkn ) < 0 ) 
				{
					$nstr .= $al[( $ltn - $fkn ) + 25];
				}
				else
				{
					$nstr .= $al[$ltn-$fkn];
				}
			}
			else
			{
				$nstr .= $v;
			}
		}
		return $nstr;
	}
	else
	{
		return false;    
	}
}

function cltn($char)
{
	$char = strtoupper($char);
	$ord = ord($char);
	
	return ($ord > 64 && $ord < 91) ? ($ord - 64) : false;
}

echo CaesarDecrypt("ftexs", "world");

?>