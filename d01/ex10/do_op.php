#!/usr/bin/php
<?php

if ($argc != 4)
	print("Incorrect Parameters\n");
else
{
	$nb1 = trim($argv[1]);
	$nb2 = trim($argv[3]);
	$op = trim($argv[2]);
	if ((($op == "/" || $op == "%") && $nb2 == 0) || !is_numeric($nb1) || !is_numeric($nb2))
		exit(1);
	if ($op == "+")
		$result = $nb1 + $nb2;
	else if ($op == "-")
		$result = $nb1 - $nb2;
	else if ($op == "*")
		$result = $nb1 * $nb2;
	else if ($op == "/")
		$result = $nb1 / $nb2;
	else if ($op == "%")
		$result = $nb1 % $nb2;
	else
		exit(1);
	print($result."\n");
}

?>
