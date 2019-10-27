<?php

function	auth($login, $passwd)
{
	$log = unserialize(file_get_contents("../private/passwd"));
	if ($log)
	{
		foreach ($log as $elem => $value)
		{
			if ($value["login"] == $login && $value["passwd"] == hash("whirlpool", $passwd))
				return (true);
		}
		return (false);
	}
}

?>
