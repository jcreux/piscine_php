#!/usr/bin/php
<?php

date_default_timezone_set("Europe/Paris");

function	gmonth($month)
{
	$month = strtolower($month);
	if ($month == "janvier")
		return (1);
	else if ($month == "fevrier")
		return (2);
	else if ($month == "mars")
		return (3);
	else if ($month == "avril")
		return (4);
	else if ($month == "mai")
		return (5);
	else if ($month == "juin")
		return (6);
	else if ($month == "juillet")
		return (7);
	else if ($month == "aout")
		return (8);
	else if ($month == "septembre")
		return (9);
	else if ($month == "octobre")
		return (10);
	else if ($month == "novembre")
		return (11);
	else if ($month == "decembre")
		return (12);
}

if ($argc == 2)
{
	$reg = "/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) [0-9]{1,2} ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/";
	if (!preg_match($reg, $argv[1]))
		print("Wrong Format\n");
	else
	{
		$day_str = strtok($argv[1], " ");
		$day = strtok(" ");
		$month = strtok(" ");
		$year = strtok(" ");
		$time = strtok(" ");
		$hour = strtok($time, ":");
		$min = strtok(":");
		$sec = strtok(":");
		print(mktime($hour, $min, $sec, gmonth($month), $day, $year)."\n");
	}
}

?>
