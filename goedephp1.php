<!DOCTYPE html>
<html>
	<head>
		<title>test</title>
		<link rel="stylesheet" type="text/css" href="goedecss.css">
	</head>
		<?php
		$t = date("H");
		if ($t < "6") {
			$welcome = "Have a good night!<br>";
			echo '<body background="backgrounds/night.png">';
		} elseif ($t < "12") {
			$welcome = "Have a good morning!<br>";
			echo '<body background="backgrounds/morning.png">';
		} elseif ($t < "18"){
			$welcome = "Have a good afternoon!<br>";
			echo '<body background="backgrounds/afternoon.png">';
		} else {
			$welcome = "Have a good evening!<br>";
			echo '<body background="backgrounds/evening.png">';
		}
		date_default_timezone_set('Europe/Amsterdam');
		date_default_timezone_get();
		echo "<h1>". $welcome . date("h:i:sa d-m-Y")."</h1>";
		?>
	</body>
</html>