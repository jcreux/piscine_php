#!/usr/bin/php
<?php

function	fct($s)
{
	return (str_replace($s[1], strtoupper($s[1]), $s[0]));
}

if ($argc == 2)
{
	if (file_exists($argv[1]) && $argv[1] != "/dev/zero")
	{
		$fd = fopen($argv[1], 'r');
		{
			while (!feof($fd))
			{
				$line = fgets($fd);
				$line = preg_replace_callback("/<a.*?>(.*?)</", "fct", $line);
				$line = preg_replace_callback("/<a.*?title=\"(.*?)\">/", "fct", $line);
				print($line);
			}
		}
	}
}

?>
