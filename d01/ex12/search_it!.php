#!/usr/bin/php
<?php

$token = 0;

if ($argc >= 3)
{
	foreach ($argv as $elem)
	{
		if ($elem != $argv[0] && $elem != $argv[1])
		{
			if ($argv[1] == strtok($elem, ":"))
			{
				$s = strstr($elem, ":");
				$ret = $s;
				$token = 1;
			}
			else if ($argv[1] == "" && $elem[0] == ':')
			{
				$ret = $elem;
				$token = 1;
			}
		}
	}
	for ($i = 1; $ret[$i]; $i++)
		print($ret[$i]);
	if ($token == 1)
		print("\n");
}

?>
