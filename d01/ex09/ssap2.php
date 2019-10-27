#!/usr/bin/php
<?php

function	ft_split($s)
{
	$tab = preg_split("/ +/", trim($s));
	sort($tab);
	return ($tab);
}

function	fct($elem1, $elem2)
{
	$i = 0;
	$str = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while ($i < strlen($elem1) && $i < strlen($elem2))
	{
		$pos1 = strpos($str, $elem1[$i]);
		$pos2 = strpos($str, $elem2[$i]);
		if ($pos1 > $pos2)
			return (1);
		else if ($pos1 < $pos2)
			return (-1);
		else
			$i++;
	}
	if ($elem1[$i] && $i != 0)
		return (1);
}

$tab1 = array();

foreach ($argv as $elem)
{
	if ($elem != $argv[0])
	{
		$tab2 = ft_split($elem);
		$tab1 = array_merge($tab1, $tab2);
	}
}

usort($tab1, "fct");

foreach ($tab1 as $elem)
	print($elem."\n");

?>
