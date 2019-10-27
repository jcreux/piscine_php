#!/usr/bin/php
<?php

function	ft_split($s)
{
	$tab = preg_split("/ +/", trim($s));
	sort($tab);
	return ($tab);
}

?>
