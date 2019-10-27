<?php
header("Location: index.php");
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	$account = unserialize(file_get_contents('./private/passwd'));
	if ($account)
	{
		$exist = 0;
		foreach ($account as $key=>$elem)
		{
			if ($elem['login'] === $_POST['login'] && $elem['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$exist = 1;
				$account[$key]['passwd'] =  hash('whirlpool', $_POST['newpw']);
			}
		}
		if ($exist)
			file_put_contents('./private/passwd', serialize($account));
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
} 
else
	echo "ERROR\n";
?>
