<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<div class='container'>
		<div class='title'>
			<h1>Registration</h1>
		</div>

		<div class="subtitle">
			<form method="POST" action="login.php">
				<input class='form' type="text" name="login" placeholder="Login">
				<input class='form' type="password" name="password" placeholder="Password">
				<button type="submit" name="submit">Продолжить</button>

			</form>
		</div>

	</div>
</body>
</html>

<?php
require_once('db.php')

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])){
	$username = $_POST['login'];
	$pass = $_POST['password'];
	if (!$username || !$pass) die ("Пожалуйста введите все значения!");

	$sql = "SELECT * FROM users WHERE username='$login' AND pass='$pass'";

	$result = mysqli_query($link, $sql);

	if (mysqli_num_rows($result) == 1) {
	  setcookie("User", $username, time()+7200);
	  header('Location: profile.php');
	} else {
	  echo "не правильное имя или пароль";
	}

}



?>