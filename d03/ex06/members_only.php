<?php

$user = $_SERVER["PHP_AUTH_USER"];
$pass = $_SERVER["PHP_AUTH_PW"];

if ($user == "zaz" && $pass == "jaimelespetitsponeys")
{
	$img = "../img/42.png";
	$data = base64_encode(file_get_contents($img));
	echo "<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,".$data."'>
</body></html>
";
}
else
{
	header('HTTP/1.0 401 Unauthorized');
	header('WWW-Authenticate: Basic realm="Espace membres"');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
}

?>
