<?php


/**
 * CRC 16 Redundancy Check
 *
 * @param $data the string to check
 * @return	$crc Check result
 */
function crc16($string) 
{ 
	$crc = 0xFFFF; 
	
	for ($x = 0; $x < strlen ($string); $x++) 
	{ 
		$crc = $crc ^ ord($string[$x]); 
		
		for ($y = 0; $y < 8; $y++) 
		{ 
			if (($crc & 0x0001) == 0x0001) 
			{ 
				$crc = (($crc >> 1) ^ 0xA001); 
			} 
			else 
			{ 
				$crc = $crc >> 1; 
			} 
		} 
	} 
	
	return $crc; 
} 



?>