<?php
header("Location: index.php");
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "Create")
{
	if (!file_exists("./private"))
		mkdir("./private");
	if (!file_exists("./private/passwd"))
		file_put_contents("./private/passwd", "");
	$account = unserialize(file_get_contents("./private/passwd"));
	if ($account)
	{
		$exist = 0;
		foreach ($account as $elem)
		{
			if ($elem['login'] === $_POST['login'])
				$exist = 1;
		}
	}
	if ($exist)
		echo "ERROR\n";
	else 
	{
		$tmp['login'] = $_POST['login'];
		$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
		$account[] = $tmp;
		file_put_contents('./private/passwd', serialize($account));
	}
} 
else {
	echo "ERROR\n";
}
?>
