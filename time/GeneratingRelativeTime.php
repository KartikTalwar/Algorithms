<?php


/**
 * Generate Relative Time Function
 *
 * @param	$time unix timestamp
 * @return	$delta The relative human readable time
 */
function relativeTime($time)
{

	$second = 1;
	$minute = 60;
	$hour = 3600;
	$day = 86400;
	$month = 2592000;
	
	$delta = time() - $time;

	if ($delta < 1*$second)
	{
		if( $delta == 1 ) 
		{
			return "one second ago"; 
		}
		else
		{
			return $delta." seconds ago";
		}
	}
	
	if ($delta < 2 * $second)
	{
		return "a minute ago";
	}
	
	if ($delta < 45 * $minute)
	{
		return floor($delta / $minute) . " minutes ago";
	}
	
	if ($delta < 90 * $minute)
	{
		return "an hour ago";
	}
	
	if ($delta < 24 * $hour)
	{
		return floor($delta / $hour) . " hours ago";
	}
	
	if ($delta < 48 * $hour)
	{
		return "yesterday";
	}
	
	if ($delta < 30 * $day)
	{
		return floor($delta / $day) . " days ago";
	}
	
	if ($delta < 12 * $month)
	{
		$months = floor($delta / $day / 30);
		if( $months <= 1 ) 
		{
			return "one month ago"; 
		}
		else
		{
			return $months . " months ago";
		}
	}
	else
	{
		$years = floor($delta / $day / 365);
		if( $years <= 1 )
		{
			return "one year ago"; 
		}
		else
		{
			$years . " years ago";
		}
	}
	
}


echo relativeTime(1308192175);


?>