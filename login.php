<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Li N.A</title>


<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Авторизация</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="login.php">
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

    $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'Website');

    if (isset($_POST['submit'])) {
        $username = $_POST['login'];
        $password = $_POST['password'];

        if (!$username || !$password) die('Пожалуйста введите все значения!');
        
        $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) == 1) {
            setcookie("User", $username, time()+7200);
            header('Location: profile.php');
        } else {
            echo "не правильное имя или пароль";
        }
          
    }
?>