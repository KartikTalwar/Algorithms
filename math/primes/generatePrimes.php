<?php


function primes($upto)
{
	$limit = $upto;
	$sqrtlimit = sqrt($limit);
	$range = 0;
	$i = "";
	
	while($range<$limit)
	{
		$i .= "11";
		$range += 2;
	}

	$n = 2;
	while($n < $sqrtlimit)
	{
		if ($i[$n])
		{
			$sqn = $n*$n;
			$k = $sqn;
			$i[$k]=0;

			while($k<=$limit)
			{
				$k += $n;
				$i[$k]=0;
			}
		}
		++$n;
	}
	
	$n = 1;
	while($n<$limit)
	{
		if($i[$n])
		{
			$primes[] = $n;
		}
		
		$n+=2;
	}

	if($limit>=2)
	{
		$primes[0] = 2;
	}
	
	return $primes;
}



print_r(primes(10000));



?>