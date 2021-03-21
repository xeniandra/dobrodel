<?php
require_once("php\connection.php");
if (isset($_POST['button-auth'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $queryUser = mysqli_query($link, "SELECT `login`, `password` FROM `users` WHERE `login` = '$login' 
    AND `password` = '$password';");
    $user = mysqli_num_rows($queryUser);
    if ($user == 1) {
        session_start();
        $_SESSION['login'] = $login;
        header('Location: user.php');
        exit();
    }
    else{
        echo "Такого пользователя не существует";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Авторизация</title>
</head>
<body>
<header>
        <a href="index.php" class="logo-main"><img src="media\logo.png" alt="logo" class="logo" title="На главную"></a> 
        <div class="title">
            <h1 class="title">Сделаем лучше вместе!</h1>
            <h2 class="title">портал добрых дел</h2>    
        </div>
</header>
<main>
<div class="good-deals">
        <div class="container-admin reg-title">
            <p class="admin">АВТОРИЗАЦИЯ</p>
        </div>
    </div>

    <div class="last-good-deal">
        <form action="#" class="reg" method="POST">
            <input type="text" name="login" placeholder="Введите логин" required>
            <input type="password" name="password" placeholder="Введите пароль" required>
            <input type="submit" value="Войти" name="button-auth">
        </form>
        <a href="register.php" class="already-reg">К регистрации</a>
    </div>

</main>
<footer>
    <div class="container-send">
            <h3 class="send-us">Cвяжитесь с нами</h3>
            <div class="links">
                <p class="phone">+7-900-665-72-08</p>
                <p class="mail">good-deal@gmail.com</p>
                <p class="address">г.Москва, ул.Строителей, д.16 к.3, офис 36</p>

            </div>
        </div>
    </footer>

</body>
</html>