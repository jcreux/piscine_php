<?php

if (file_exists("../private/") && file_exists("../private/passwd"))
{
	if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] == "OK")
	{
		$log = unserialize(file_get_contents("../private/passwd"));
		if ($log)
		{
			foreach ($log as $elem => $value)
			{
				if ($value["login"] == $_POST["login"] && $value["passwd"] == hash("whirlpool", $_POST["oldpw"]) && $_POST["newpw"])
				{
					$log[$elem]["passwd"] = hash("whirlpool", $_POST["newpw"]);
					$token = 1;
				}
			}
			if ($token != 1)
			{
				echo "ERROR\n";
				return ;
			}
			else
			{
				echo "OK\n";
				file_put_contents("../private/passwd", serialize($log));
				return ;
			}
		}
	}
}
echo "ERROR\n";

?>
