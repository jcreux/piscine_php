<?php

if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] && $_POST["submit"] == "OK")
{
	if (!file_exists("../private/"))
		mkdir("../private");
	if (!file_exists("../private/passwd"))
		file_put_contents("../private/passwd", NULL);
	$log = unserialize(file_get_contents("../private/passwd"));
	if ($log)
	{
		foreach ($log as $elem => $value)
		{
			if ($value["login"] == $_POST["login"])
			{
				echo "ERROR\n";
				return ;
			}
		}
	}
	$new_log["login"] = $_POST["login"];
	$new_log["passwd"] = hash("whirlpool", $_POST["passwd"]);
	$log[] = $new_log;
	file_put_contents("../private/passwd", serialize($log));
	echo "OK\n";
}
else
	echo "ERROR\n";

?>
