<?php


/**
 * Calculate Day of the Week Function
 *
 * @param	$month Full month name
 * @param	$date Date of the year
 * @param	$year The year
 * @return	$day The day of the week
 */
function dayOfWeek($month, $date, $year)
{

	$daystable = array( "Sunday" => 0,
			    "Monday" => 1,
			    "Tuesday" => 2,
			    "Wednesday" => 3,
			    "Thursday" => 4,
			    "Friday" => 5,
			    "Saturday" => 6
			  );
						 
	$monthtable = array( "January" => 0,
			     "February" => 3,
			     "March" => 3,
			     "April" => 6,
			     "May" => 1,
			     "June" => 4,
			     "July" => 6,
			     "August" => 2,
			     "September" => 5,
			     "October" => 0,
			     "November" => 3,
			     "December" => 5,
			     "Januaryleap" => 6,
			     "Febrauryleap" => 2
			    );					 

	$century = getCentury($year);
	$year = strval($year);
	$lasttwoyear = $year[2].$year[3];;
	
	if( is_leap($year) )
	{
		$month = str_replace(array("January", "February"), array("Januaryleap", "Februaryleap"), ucwords(strtolower($month)));
	}
	
	$month = $monthtable[ucwords(strtolower($month))];
	
	$step1 = floor($lasttwoyear / 4);
	$step2 = $century + $lasttwoyear + $step1 + $month + $date;
	$step3 = $step2 % 7;
	
	$day =  array_search($step3, $daystable);
	
	return $day;
}


function getCentury($year)
{
	if($year >= 1700 && $year <=1799)
	{
		return 4;
	}
	elseif($year >= 1800 && $year <=1899)
	{
		return 2;
	}
	elseif($year >= 1900 && $year <=1999)
	{
		return 0;
	}
	elseif($year >= 2000 && $year <=2099)
	{
		return 6;
	}
	elseif($year >= 2100 && $year <=2199)
	{
		return 4;
	}
	elseif($year >= 2200 && $year <=2299)
	{
		return 2;
	}	
	elseif($year >= 2300 && $year <=2399)
	{
		return 0;
	}	
	elseif($year >= 2400 && $year <=2499)
	{
		return 6;
	}		
	elseif($year >= 2500 && $year <=2599)
	{
		return 4;
	}
	elseif($year >= 2600 && $year <=2699)
	{
		return 2;
	}	
	
}


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

echo dayOfWeek("June", 29, 2011);

?>