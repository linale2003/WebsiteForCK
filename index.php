<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Li N.A</title>
</head>
<body>
	<div class="container">
	<h1>Авторизуйтесь</h1>

	<?php
	if (!isset($_COOKIE['User'])){
	?>
		<a href="/registration.php">Зарегистрируйтесь</a> или <a href='/login.php'>войдите</a>!
	<?php
	} else {
	}

	</div>
</body>
</html>