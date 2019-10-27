#!/usr/bin/php
<?php

function	ft_split($s)
{
	$tab = preg_split("/ +/", trim($s));
	sort($tab);
	return ($tab);
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

sort($tab1);

foreach ($tab1 as $elem)
	print($elem."\n");

?>
