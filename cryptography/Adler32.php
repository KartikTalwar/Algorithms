<?php

/**
 * Adler 32 Checksum
 *
 * @param	$data to be checked
 * @return	Checksum
 */
function Adler32($data) 
{
	$a = 1; $b = 0; $len = strlen($data);
	
	for ($index = 0; $index < $len; ++$index) 
	{
		$a = ($a + $data[$index]) % 65521;
		$b = ($b + $a) % 65521;
	}
	
	return ($b << 16) | $a;
}


?>