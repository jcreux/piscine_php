<?php
function auth($login, $passwd)
{
    $same = FALSE;
	$pwd = hash("whirlpool", $passwd);
	if (!file_exists("./private/") || !file_exists("./private/passwd"))
		return (FALSE);
	$tab = file_get_contents("./private/passwd");
	$test = unserialize($tab);
	foreach ($test as $v) 
	{
		if ($v['login'] === $login && $v['passwd'] === $pwd)
			$same = TRUE;
	}
	if ($same == FALSE)
		return (FALSE);
	else
		return (TRUE);
}
?>
