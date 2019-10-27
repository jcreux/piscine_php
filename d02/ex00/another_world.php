#!/usr/bin/php
<?php

if ($argc >= 2)
	print(trim(preg_replace("/ +/", " ", preg_replace("/\t+/", " ", $argv[1])))."\n");

?>
