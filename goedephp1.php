<?php
	date_default_timezone_set('Europe/Amsterdam');
	date_default_timezone_get();
	$t = date("H");
	if ($t < "6") {
		$welcome = "Have a good night!<br>";
		$body = '<body background="backgrounds/night.png">';
	} elseif ($t < "12") {
		$welcome = "Have a good morning!<br>";
		$body = '<body background="backgrounds/morning.png">';
	} elseif ($t < "18"){
		$welcome = "Have a good afternoon!<br>";
		$body = '<body background="backgrounds/afternoon.png">';
	} else {
		$welcome = "Have a good evening!<br>";
		$body = '<body background="backgrounds/evening.png">';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>test</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="goedecss.css">
	</head>
	<?php
	echo $body;
	echo "<h1>".$welcome.date("h:i:sa d-m-Y")."</h1>";
	?>
	</body>
</html>