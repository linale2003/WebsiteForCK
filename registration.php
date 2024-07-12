<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Li N.A</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Регистрация</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="registration.php">
                    <div class="row form__reg"><input class="form" type="email" name="email" placeholder="Email"></div>
                    <div class="row form__reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                    <div class="row form__reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                    <button type="submit" class="btn_red btn__reg" name="submit">Продолжить</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    require_once('db.php');

    if (isset($_COOKIE['User'])) {
        header("Location: login.php");
    }    

    $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'Website');

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $username = $_POST['login'];
        $password = $_POST['password'];

        if (!$email || !$username || !$password) die('Пожалуйста введите все значения!');

        $sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$password')";

        if(!mysqli_query($link, $sql)) {
            echo "Не удалось добавить пользователя";
        }
    }
?>