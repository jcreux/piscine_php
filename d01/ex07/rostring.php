#!/usr/bin/php
<?php

function	ft_split($s)
{
	$tab = preg_split("/ +/", trim($s));
	return ($tab);
}

if ($argc != 1)
{
	$tab = ft_split($argv[1]);

	for ($i = 1; $tab[$i] != NULL; $i++)
		print($tab[$i]." ");
	print($tab[0]."\n");
}

?>
