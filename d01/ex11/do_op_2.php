#!/usr/bin/php
<?php

function	do_op($nb1, $op, $nb2)
{
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
	print($result."\n");
}

function	error()
{
	print("Syntax Error\n");
}

function	is_op($s)
{
	if (strpbrk($s, "+-*/%"))
		return (true);
	return (false);
}

if ($argc != 2)
	print("Incorrect Parameters\n");
else
{
	$s = trim(preg_replace("/ +/", "", preg_replace("/\t+/", "", $argv[1])));
	$i = 0;
	if ($s[0] == '-' || $s[0] == '+')
		$i++;
	for ($i; $s[$i] >= '0' && $s[$i] <= '9' || $s[$i] == '.'; $i++)
		;
	$nb1 = substr($s, 0, $i);
	$op = $s[$i];
	$nb2 = substr($s, $i + 1);
	if (is_op($op) == false || is_numeric($nb1) == false || is_numeric($nb2) == false)
		return (error());
	if (($op == '/' || $op == '%') && $nb2 == 0)
		exit(1);
	do_op($nb1, $op, $nb2);
}

?>
