<?php
	session_start();
	if(isset($_POST["street"]) && isset($_POST["number"]) && isset($_POST["city"]) && isset($_POST["postalCode"])) {
		$_SESSION["street"] = $_POST["street"];
		$_SESSION["number"] = $_POST["number"];
		$_SESSION["city"] = $_POST["city"];
		$_SESSION["postalCode"] = $_POST["postalCode"];
	}
	if(!isset($_SESSION["email"]) || !isset($_SESSION["nickname"]) || !isset($_SESSION["street"]) || !isset($_SESSION["number"])
		|| !isset($_SESSION["city"]) || !isset($_SESSION["postalCode"])) {
		header("Location: opdracht_sessions_1.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Oplossing sessions: deel 3</title>
	</head>
	<body>
		<h1>Overzichtspagina</h1>
		<ul>
			<?php foreach($_SESSION as $key => $item): ?>
				<?php if($key == "email" || $key == "nickname"): ?>
					<li><?= $key . ": " . $item ?> | <a href="oplossing_sessions_1.php?edit=<?= $key ?>">Wijzig</a></li>
				<?php else: ?>
					<li><?= $key . ": " . $item ?> | <a href="oplossing_sessions_2.php?edit=<?= $key ?>">Wijzig</a></li>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
		<a href="opdracht_sessions_2.php">Terug</a>
	</body>
</html>