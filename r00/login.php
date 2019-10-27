<?php
include "auth.php";
session_start();
if ($_POST["login"] && $_POST["passwd"])
{
	if (!file_exists("./private/") || !file_exists("./private/passwd"))
	{
		echo "ERROR\n";
		return ;
	}
	if (auth($_POST["login"], $_POST["passwd"]))
	{
		$_SESSION["loggued_on_user"] = $_POST["login"];
		header("Location: market1.php");
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
