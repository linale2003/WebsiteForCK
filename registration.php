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
			<form method="POST" action="registration.php">
				<input class='form' type="email" name="email" placeholder="Email">
				<input class='form' type="text" name="login" placeholder="Login">
				<input class='form' type="password" name="password" placeholder="Password">
				<button type="submit" name="submit">Продолжить</button>

			</form>
		</div>

	</div>
</body>
</html>

<?php
require_once('db.php');

if (isset($_COOKIE['User'])) {
    header("Location: login.php");
}

$link = mysqli_connect('127.0.0.1', 'root', 'password', 'name_db');
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $username = $_POST['login'];
  $password = $_POST['password'];
}
if (!$email || !$username || !$password) die ('Пожалуйста введите все значения!');
$sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$password')";
if(!mysqli_query($link, $sql)) {
  echo "Не удалось добавить пользователя";
}



?>