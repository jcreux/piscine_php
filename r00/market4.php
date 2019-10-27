<?php
session_start();
if($_GET['jeu'] && file_exists("./db/") && file_exists("./db/panier"))
{
	$panier = unserialize(file_get_contents("./db/panier"));
	$tab["user"] = $_SESSION["loggued_on_user"];
	$tab["game"] = $_GET['jeu'];
	if ($_GET["jeu"] == "gta")
		$tab["price"] = 30;
	else if ($_GET["jeu"] == "rl")
		$tab["price"] = 20;
	else if ($_GET["jeu"] == "mc")
		$tab["price"] = 25;
	else if ($_GET["jeu"] == "d3")
		$tab["price"] = 20;
	else if ($_GET["jeu"] == "ds3")
		$tab["price"] = 60;
	else if ($_GET["jeu"] == "csgo")
		$tab["price"] = 10;
	$panier[] = $tab;
	file_put_contents("./db/panier", serialize($panier));
}
if ($_GET['action'] == "clear" && file_exists("./db/") && file_exists("./db/panier"))
{
	$panier = unserialize(file_get_contents("./db/panier"));
	if ($panier)
	{
		foreach ($panier as $key => $value)
		{
			if ($_SESSION["loggued_on_user"] == $value["user"])
				$panier[$key]['game'] = "";
		}
		file_put_contents("./db/panier", serialize($panier));
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
		<meta charset="UTF-8" />
		<title>Minishop</title>
	</head>
	<body>
		<header>
			<h2>Bonjour <?php echo $_SESSION["loggued_on_user"]; ?> !</h2>
			<a href="market4.php?action=clear"><button class="clear">Clear</button></a>
			<a href="panier.php"><button class="valid">Valider</button></a>
			<a href="index.php"><button action="logout.php" class="deco">Déconnexion</button></a>
		</header>
		<div class="button-div">
			<a href="market1.php"><button class="button">Tous</button></a>
			<a href="market2.php"><button class="button">Action</button></a>
			<a href="market3.php"><button class="button">Multi</button></a>
			<a href="market4.php"><button class="button">RPG</button></a>
		</div>
		<div class="image">
			<a href="market4.php?jeu=d3"><img class="logo" title="20€" src="img/diablo_iii_tyrael_icon_2_by_ivances-d4xxobr.png" /></a>
			<a href="market4.php?jeu=ds3"><img class="logo" title="60€" src="img/d9sfogt-97556d34-54d4-49a3-bb6a-5f24b52cffa1.png" /></a>
		</div>
		<div class="panier">
<?PHP
if (file_exists("./db/") && file_exists("./db/panier"))
{
	$panier = unserialize(file_get_contents("./db/panier"));
	if ($panier)
	{
		foreach ($panier as $value)
		{
			if ($value["game"] && $_SESSION["loggued_on_user"] == $value["user"])
			{
				if ($value["game"] == "gta")
					echo "Grand Theft Auto V  :  ";
				else if ($value["game"] == "rl")
					echo "Rocket League  :  ";
				else if ($value["game"] == "mc")
					echo "Minecraft  :  ";
				else if ($value["game"] == "d3")
					echo "Diablo 3  :  ";
				else if ($value["game"] == "ds3")
					echo "Dark Souls 3  :  ";
				else if ($value["game"] == "csgo")
					echo "Counter Strike GO  :  ";
				echo $value["price"]."€<br>";
				$tot += $value["price"];
			}
		}
?>
			<hr>
<?PHP
		if ($tot != 0)
			echo "TOTAL : $tot €";
		else
			echo "TOTAL : 0 €";
	}
}
?>
		</div>
	</body>
</html>
