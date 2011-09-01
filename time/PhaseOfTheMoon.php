<?php


/*

	Calculates the phase of the moon by date

*/



function PhaseOfTheMoon($month, $day, $year)
{
	$ages = array(18, 0, 11, 22, 3, 14, 25, 6, 17, 28, 9, 20, 1, 12, 23, 4, 15, 26, 7);
	$offsets = array(-1, 1, 0, 1, 2, 3, 4, 5, 7, 7, 9, 9);
	$description = array("new (totally dark)", "waxing crescent (increasing to full)", "in its first quarter (increasing to full)", "waxing gibbous (increasing to full)", "full (full light)", "waning gibbous (decreasing from full)", "in its last quarter (decreasing from full)","waning crescent (decreasing from full)");  
	$months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

	if( $day == 31)
	{
		$day = 1;
	}
	
	$days_into_phase = (($ages[($year + 1) % 19] + (($day + $offsets[$month-1]) % 30) + ($year < 1900)) % 30);
	$index = (int) ($days_into_phase + 2) * 16/59.0;
	if($index > 7)
	{
		$index = 7;
	}
	$status = $description[$index];

	$light = (int) 2 * $days_into_phase * 100/29;
	$date = $day.$months[$month-1].$year;
	if($light > 100)
	{
		$light = abs($light - 200);
	}
	
	//return array("Date" => $date, "Phase" => $status, "Light" => $light);
	return $status;
}


echo PhaseOfTheMoon(8, 30, 2011);





?>