#!/usr/bin/php
<?php

while (1)
{
	$i = 0;
	$var = 0;
	print("Entrez un nombre: ");
	$line = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		print("^D\n");
		exit(1);
	}
	if (!(is_numeric($line)))
		$var = 1;
	$last = $line[strlen($line) - 1];
	if ($var == 1 || $line == '')
		print("'".$line."'"." n'est pas un chiffre\n");
	else if ($last % 2 == 0)
		print("Le chiffre ".$line." est Pair\n");
	else if ($last % 2 == 1 || $last % 2 == -1)
		print("Le chiffre ".$line." est Impair\n");
}

?>
