<?php

/* 
 * MD5 Hash Generator
 *
 * Adapted from http://os2.zemris.fer.hr/algoritmi/hash/2002_lukicic/
 */	
function md5($str)
{
	error_reporting(0);
	
	$str = trim($str);

	$a = "01100111010001010010001100000001";
	$b = "11101111110011011010101110001001";
	$c = "10011000101110101101110011111110";
	$d = "00010000001100100101010001110110";

	$str = str2bin($str);
	$str = append($str);
	$len = strlen($str) / 512;
	
	for ($i = 0; $i < $len; $i++)
	{
		for ($j = 0; $j < 16; $j++)                        
		{
			$strii = substr($str, 0, 32);
			$str = substr_replace($str, "", 0, 32);
			
			for ($k = 0; $k < 4; $k++)
			{
				$x[$j] .= substr($strii, strlen($strii)-8, strlen($strii));
				$strii = substr_replace($strii, "", strlen($strii)-8, strlen($strii));
			}
		}

		$aa = $a;
		$bb = $b;
		$cc = $c;
		$dd = $d;                                      

		$a = md5_func_ff($a, $b, $c, $d, $x, $i+ 0, 7 , my_decbin(-680876936));
		$d = md5_func_ff($d, $a, $b, $c, $x, $i+ 1, 12, my_decbin(-389564586));
		$c = md5_func_ff($c, $d, $a, $b, $x, $i+ 2, 17, my_decbin(606105819)); 
		$b = md5_func_ff($b, $c, $d, $a, $x, $i+ 3, 22, my_decbin(-1044525330));  
		$a = md5_func_ff($a, $b, $c, $d, $x, $i+ 4, 7 , my_decbin(-176418897));  
		$d = md5_func_ff($d, $a, $b, $c, $x, $i+ 5, 12, my_decbin(1200080426));  
		$c = md5_func_ff($c, $d, $a, $b, $x, $i+ 6, 17, my_decbin(-1473231341));  
		$b = md5_func_ff($b, $c, $d, $a, $x, $i+ 7, 22, my_decbin(-45705983));  
		$a = md5_func_ff($a, $b, $c, $d, $x, $i+ 8, 7 , my_decbin(1770035416));  
		$d = md5_func_ff($d, $a, $b, $c, $x, $i+ 9, 12, my_decbin(-1958414417));  
		$c = md5_func_ff($c, $d, $a, $b, $x, $i+10, 17, my_decbin(-42063));  
		$b = md5_func_ff($b, $c, $d, $a, $x, $i+11, 22, my_decbin(-1990404162));  
		$a = md5_func_ff($a, $b, $c, $d, $x, $i+12, 7 , my_decbin(1804603682));  
		$d = md5_func_ff($d, $a, $b, $c, $x, $i+13, 12, my_decbin(-40341101));  
		$c = md5_func_ff($c, $d, $a, $b, $x, $i+14, 17, my_decbin(-1502002290));  
		$b = md5_func_ff($b, $c, $d, $a, $x, $i+15, 22, my_decbin(1236535329));  


		$a = md5_func_gg($a, $b, $c, $d, $x, $i+ 1, 5 , my_decbin(-165796510));  
		$d = md5_func_gg($d, $a, $b, $c, $x, $i+ 6, 9 , my_decbin(-1069501632));  
		$c = md5_func_gg($c, $d, $a, $b, $x, $i+11, 14, my_decbin(643717713));  
		$b = md5_func_gg($b, $c, $d, $a, $x, $i+ 0, 20, my_decbin(-373897302));  
		$a = md5_func_gg($a, $b, $c, $d, $x, $i+ 5, 5 , my_decbin(-701558691));  
		$d = md5_func_gg($d, $a, $b, $c, $x, $i+10, 9 , my_decbin(38016083));  
		$c = md5_func_gg($c, $d, $a, $b, $x, $i+15, 14, my_decbin(-660478335));  
		$b = md5_func_gg($b, $c, $d, $a, $x, $i+ 4, 20, my_decbin(-405537848));  
		$a = md5_func_gg($a, $b, $c, $d, $x, $i+ 9, 5 , my_decbin(568446438));  
		$d = md5_func_gg($d, $a, $b, $c, $x, $i+14, 9 , my_decbin(-1019803690));  
		$c = md5_func_gg($c, $d, $a, $b, $x, $i+ 3, 14, my_decbin(-187363961));  
		$b = md5_func_gg($b, $c, $d, $a, $x, $i+ 8, 20, my_decbin(1163531501));  
		$a = md5_func_gg($a, $b, $c, $d, $x, $i+13, 5 , my_decbin(-1444681467));  
		$d = md5_func_gg($d, $a, $b, $c, $x, $i+ 2, 9 , my_decbin(-51403784));  
		$c = md5_func_gg($c, $d, $a, $b, $x, $i+ 7, 14, my_decbin(1735328473));  
		$b = md5_func_gg($b, $c, $d, $a, $x, $i+12, 20, my_decbin(-1926607734));  


		$a = md5_func_hh($a, $b, $c, $d, $x, $i+ 5, 4 , my_decbin(-378558));  
		$d = md5_func_hh($d, $a, $b, $c, $x, $i+ 8, 11, my_decbin(-2022574463));  
		$c = md5_func_hh($c, $d, $a, $b, $x, $i+11, 16, my_decbin(1839030562));  
		$b = md5_func_hh($b, $c, $d, $a, $x, $i+14, 23, my_decbin(-35309556));  
		$a = md5_func_hh($a, $b, $c, $d, $x, $i+ 1, 4 , my_decbin(-1530992060));  
		$d = md5_func_hh($d, $a, $b, $c, $x, $i+ 4, 11, my_decbin(1272893353));  
		$c = md5_func_hh($c, $d, $a, $b, $x, $i+ 7, 16, my_decbin(-155497632));  
		$b = md5_func_hh($b, $c, $d, $a, $x, $i+10, 23, my_decbin(-1094730640));  
		$a = md5_func_hh($a, $b, $c, $d, $x, $i+13, 4 , my_decbin(681279174));  
		$d = md5_func_hh($d, $a, $b, $c, $x, $i+ 0, 11, my_decbin(-358537222));  
		$c = md5_func_hh($c, $d, $a, $b, $x, $i+ 3, 16, my_decbin(-722521979));  
		$b = md5_func_hh($b, $c, $d, $a, $x, $i+ 6, 23, my_decbin(76029189));  
		$a = md5_func_hh($a, $b, $c, $d, $x, $i+ 9, 4 , my_decbin(-640364487));  
		$d = md5_func_hh($d, $a, $b, $c, $x, $i+12, 11, my_decbin(-421815835));  
		$c = md5_func_hh($c, $d, $a, $b, $x, $i+15, 16, my_decbin(530742520));  
		$b = md5_func_hh($b, $c, $d, $a, $x, $i+ 2, 23, my_decbin(-995338651));  

		$a = md5_func_ii($a, $b, $c, $d, $x, $i+ 0, 6 , my_decbin(-198630844));  
		$d = md5_func_ii($d, $a, $b, $c, $x, $i+ 7, 10, my_decbin(1126891415));  
		$c = md5_func_ii($c, $d, $a, $b, $x, $i+14, 15, my_decbin(-1416354905));  
		$b = md5_func_ii($b, $c, $d, $a, $x, $i+ 5, 21, my_decbin(-57434055));  
		$a = md5_func_ii($a, $b, $c, $d, $x, $i+12, 6 , my_decbin(1700485571));  
		$d = md5_func_ii($d, $a, $b, $c, $x, $i+ 3, 10, my_decbin(-1894986606));  
		$c = md5_func_ii($c, $d, $a, $b, $x, $i+10, 15, my_decbin(-1051523));  
		$b = md5_func_ii($b, $c, $d, $a, $x, $i+ 1, 21, my_decbin(-2054922799));  
		$a = md5_func_ii($a, $b, $c, $d, $x, $i+ 8, 6 , my_decbin(1873313359));  
		$d = md5_func_ii($d, $a, $b, $c, $x, $i+15, 10, my_decbin(-30611744));  
		$c = md5_func_ii($c, $d, $a, $b, $x, $i+ 6, 15, my_decbin(-1560198380));  
		$b = md5_func_ii($b, $c, $d, $a, $x, $i+13, 21, my_decbin(1309151649));  
		$a = md5_func_ii($a, $b, $c, $d, $x, $i+ 4, 6 , my_decbin(-145523070));  
		$d = md5_func_ii($d, $a, $b, $c, $x, $i+11, 10, my_decbin(-1120210379));  
		$c = md5_func_ii($c, $d, $a, $b, $x, $i+ 2, 15, my_decbin(718787259));  
		$b = md5_func_ii($b, $c, $d, $a, $x, $i+ 9, 21, my_decbin(-343485551));


		$a = add($a, $aa);
		$b = add($b, $bb);
		$c = add($c, $cc);
		$d = add($d, $dd);

	}

	$rez = array($a, $b, $c, $d);

	$x[0] = little_endian($rez[0]);
	$x[1] = little_endian($rez[1]);
	$x[2] = little_endian($rez[2]);
	$x[3] = little_endian($rez[3]);

	$k1 = bin2char($x[0]);
	$k2 = bin2char($x[1]);
	$k3 = bin2char($x[2]);
	$k4 = bin2char($x[3]);

	$md5 =  $k1.$k2.$k3.$k4;

	return $md5;
}


function my_decbin($dec)
{
	$bin = decbin($dec);
	if ($dec >= 0)
	{
		$bin = str_pad($bin, 32, "0", STR_PAD_LEFT);
	}
	else
	{	
		$bin = str_pad($bin, 32, "1", STR_PAD_LEFT);  
	}
	
	return $bin;
}


function md5_func_ff($a, $b, $c, $d, $x, $n, $s, $ii)
{
	$t = add(add($a, md5_ff($b, $c, $d)), add($x[$n], $ii));
	$t = shift($t, $s);
	
	return add($t, $b);
} 


function md5_func_gg($a, $b, $c, $d, $x, $n, $s, $i)
{
	$t = add(add($a, md5_gg($b, $c, $d)), add($x[$n], $i));   
	$t = shift($t, $s);
	
	return add($t, $b);
}


function md5_func_hh($a, $b, $c, $d, $x, $n, $s, $i)
{
	$t = add(add($a, md5_hh($b, $c, $d)), add($x[$n], $i));  
	$t = shift($t, $s);
	
	return add($t, $b);
}
 

function md5_func_ii($a, $b, $c, $d, $x, $n, $s, $i)
{
	$t = add(add($a, md5_ii($b, $c, $d)), add($x[$n], $i));  
	$t = shift($t, $s);
	
	return add($t, $b);
} 
 
 
 
function md5_ff($x, $y, $z)
{
	return (or_(and_($x, $y), and_(non_($x), $z)));
}


function md5_gg($x, $y, $z)
{
	return or_(and_($x, $z), and_(non_($z), $y));
}


function md5_hh($x, $y, $z)
{
	return xor_($x, xor_($y, $z));
}


function md5_ii($x, $y, $z)
{
	return xor_($y, or_($x, non_($z)));
}

 
function shift($str, $s)
{
	for ($i = 0; $i < $s; $i++)
	{
		$buffer = $str{0};
		$str = substr($str, 1, strlen($str));
		$str .= $buffer; 
	}
	
	return $str;
} 
 

function non_($x)
{
	for ($i = 0; $i < strlen($x); $i++)
	{
		if ($x{$i} == 0)
		{
			$y .= "1";
		}
		else
		{
			$y .= "0";
		}
	}
	
	return $y;
}
 
 
function or_($x, $y)
{
	for ($i = 0; $i < strlen($x); $i++)
	{
		if (($x{$i} == 1) || ($y{$i} == 1))
		{
			$z .= "1";
		}
		else
		{
			$z .= "0";
		}
	}
	
	return $z;
}


function and_($x, $y)
{
	for ($i = 0; $i < strlen($x); $i++)
	{
		if (($x{$i} == 1) && ($y{$i} == 1))
		{
			$z .= "1";
		}
		else
		{
			$z .= "0";
		}
	}

	return $z;
}
 
 
function xor_($x, $y)
{
	for ($i = 0; $i < strlen($x); $i++)
	{
		if (($x{$i} == 1) && ($y{$i} == 0) || ($x{$i} == 0) && ($y{$i} == 1))
		{
			$z .= "1";
		}
		else
		{
			$z .= "0";
		}
	}
	
	return $z;
}
 

function add($x, $y)
{
	$x_len = strlen($x);
	$c = 0;
	
	for ($i = 0; $i < $x_len; $i++)
	{
		$res .= "0";
	}
	
	if ($x_len < strlen($y))
	{
		$x_len = strlen($y);
	}
	
	for ($i = $x_len; $i >= 0; $i--)
	{
		if ($x{$i} == $y{$i} && $y{$i} == "0" && $c == 0)
		{
			$res{$i} = "0";
		} 
		else if ($x{$i} == $y{$i} && $y{$i} == "0" && $c == 1)
		{
			$res{$i} = "1";      
			$c = 0;
		} 
		else if (($x{$i} != $y{$i}) && $c == 0)
		{
			$res{$i} = "1";
		} 
		else if (($x{$i} != $y{$i}) && $c == 1)
		{
			$rec{$i} = "0";
		} 
		else if ($x{$i} == $y{$i} && $y{$i} == "1" && $c == 0)
		{
			$res{$i} = "0";
			$c = 1;
		} 
		else if ($x{$i} == $y{$i} && $y{$i} == "1" && $c == 1)
		{
			$res{$i} = "1";      
		}
	}
	
	return $res;
}
 
 
function append($str)
{
	$len = strlen($str);
	$t = decbin($len);
	$len = $len % 512;
	$len = 512 - $len - 64;
	
	if ($len <= 0)
	{
		$len += 512;
	}
	
	$str .= "1";
	
	for ($i = 1; $i < $len; $i++)
	{
		$str .= "0";
	}
	
	$t = str_pad($t, 64, "0", STR_PAD_LEFT);

	for ($j = 0; $j < 2; $j++)                        
	{
		$strii = substr($t, 0, 32);
		$t = substr_replace($t, '', 0, 32);

		for ($k = 0; $k < 4; $k++)
		{
			$x[$j] .= substr($strii, strlen($strii)-8, strlen($strii));
			$strii = substr_replace($strii, '', strlen($strii)-8, strlen($strii));
		}
	}
	
	$str .= $x[1];
	$str .= $x[0];
	
	return $str; 
}
 
 
function str2bin($str)
{
	$bin_str = "";
	
	for ($i = 0; $i < strlen($str); $i++)
	{
		$dec = (string)ord($str{$i});
		$bin = (string)decbin($dec);
		$bin = str_pad($bin, 8, "0", STR_PAD_LEFT);
		$bin_str .= $bin;  
	}
	
	return $bin_str;
}


function little_endian($str)
{
	$x = substr($str, -8);
	$x .= substr($str, -16, -8);
	$x .= substr($str, -24, -16);
	$x .= substr($str, -32, -24);
	
	return $x;
}


function hex($str)
{
	switch ($str) 
	{
		case "1000":
			return "8";
			break;
		case "1001":
			return "9";
			break;
		case "1010":
			return "a";
			break;
		case "1011":
			return "b";
			break;
		case "1100":
			return "c";
			break;
		case "1101":
			return "d";
			break;
		case "1110":
			return "e";
			break;
		case "1111":
			return "f";
			break;
	}
}



function bin2char($str)
{
	$mask = "1000";
	
	for ($i = 0; $i < 8; $i++)
	{
		$num = substr($str, 0, 4);
		$str = substr_replace($str, '', 0, 4);
		if (and_($mask, $num) == "1000")
		{
			$x .= hex($num);
		}
		else
		{
			$x .= bindec($num);
		}
	}
	
	return $x; 
}


?>