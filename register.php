<?php
require_once("php\connection.php");
if (isset($_POST['button-reg'])) {

    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordTwo = $_POST['passwordTwo'];
    $errorPass = 0;
    if($password == $passwordTwo){
        $password = $password;
        $reg = "INSERT INTO `users` (`id_user`, `fio`, `login`, `email`, `password`, `role`) VALUES 
    (NULL, '$fio', '$login', '$email', '$password', '1');";
    $regInsert = mysqli_query($link, $reg);
    }
    else{
        $errorPass = true;
        echo "пароли не совпадают";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style\style.css">
</head>
<body>
<header>
        <a href="index.html" class="logo-main"><img src="media\logo.png" alt="logo" class="logo" title="На главную"></a> 
        <div class="title">
            <h1 class="title">Сделаем лучше вместе!</h1>
            <h2 class="title">портал добрых дел</h2>    
        </div>
    </header>
    <main>
    <div class="good-deals">
        <div class="container-admin reg-title">
            <p class="admin">РЕГИСТРАЦИЯ</p>
        </div>
    </div>

    <div class="last-good-deal">
        <form action="#" class="reg" method="POST">
            <input type="text" name="fio" placeholder="Введите ФИО" required>
            <input type="text" name="login" placeholder="Введите логин" required>
            <input type="email" name="email" placeholder="Введите email" required>
            <input type="password" name="password" placeholder="Введите пароль" required>
            <input type="password" name="passwordTwo" placeholder="Повторите пароль" required>
            <input type="checkbox" name="check" required>
            <input type="submit" value="Зарегистривоваться" name="button-reg">
        </form>
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