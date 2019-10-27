<?php

$action = $_GET["action"];
$name = $_GET["name"];
$value = $_GET["value"];

if ($action == "set")
{
	if ($name && $value)
		setcookie($name, $value);
}
else if ($action == "get")
{
	if ($name && $_COOKIE[$name])
		echo $_COOKIE[$name]."\n";
}
else if ($action == "del")
{
	if ($name)
		setcookie($name, "", 0);
}

?>
