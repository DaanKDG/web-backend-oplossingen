<?php
    session_start();
	$email = (isset($_SESSION["email"]) ? $_SESSION["email"] : "");
	$nickname = (isset($_SESSION["nickname"]) ? $_SESSION["nickname"] : "");
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>oplossing sessions: deel 1</title>
	</head>
	<body>
		<h1>oplossing sessions: deel </h1>
		<form action="opdracht_sessions_2.php" method="post">
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email" value="<?= $email ?>" <?= (isset($_GET["edit"]) && $_GET["edit"] == "email") ? "autofocus" : "" ?>>
			<label for="nickname">Nickname</label>
			<input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" <?= (isset($_GET["edit"]) && $_GET["edit"] == "nickname") ? "autofocus" : "" ?>>
			<button type="submit">Verzenden</button>
		</form>
	</body>
</html>