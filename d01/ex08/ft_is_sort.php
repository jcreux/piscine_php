#!/usr/bin/php
<?php

function	ft_is_sort($tab1)
{
	$tab2 = $tab1;
	sort($tab1);
	if ($tab2 == $tab1)
		return (true);
	else
		return (false);
}

?>
