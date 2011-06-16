<?php



function is_leap($year)
{
	if($year % 400 == 0)
	{
		return True;
	}
	elseif($year % 100 == 0)
	{
		return False;
	}
	elseif($year %4 == 0)
	{
		return True;
	}
	else
	{
		return False;
	}
}


?>