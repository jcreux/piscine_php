<?php

include "auth.php";

session_start();
if ($_GET["login"] && $_GET["passwd"])
{
	if (!file_exists("../private/") || !file_exists("../private/passwd"))
	{
		echo "ERROR\n";
		return ;
	}
	if (auth($_GET["login"], $_GET["passwd"]))
	{
		$_SESSION["loggued_on_user"] = $_GET["login"];
		echo "OK\n";
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";
	}
	return ;
}
else
	echo "ERROR\n";

?>
