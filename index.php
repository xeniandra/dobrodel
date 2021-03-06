<?php
require_once("php\connection.php");
session_start();

echo $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная - Сделаем лучше вместе!</title>
    <link rel="stylesheet" href="style\style.css">
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
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
            <div class="container">
                    <div class="number-deals">
                            <p class="deals">ДОБРЫХ ДЕЛ СДЕЛАНО</p>
                            <p class="numbers">776</p>
                    </div>
                    <div class="buttons-deals">
                        <a href="register.php" class="reg">РЕГИСТРАЦИЯ</a>
                        <a href="auth.php" class="login">ВХОД</a>
                    </div>        
            </div>
        </div>
        <div class="send-us">
            <div class="container-send">
                    <h3 class="send-us">Сообщите нам</h3>
                    <p class="send-us">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Illo sapiente tenetur beatae libero saepe neque autem sunt! 
                        Doloribus, exercitationem. Illum libero dicta, 
                        iste est exercitationem esse atque deserunt doloremque repellendus?
                    </p>
                    <a href="#" class="send-us">СООБЩИТЬ</a>
            </div>
        </div>
        <div class="last-good-deal">
                <h3 class="send-us">Последние добрые дела</h3>
                <div class="deal">
                    <img src="media\news.jpg" alt="deal" class="deal">
                    <div class="deal-info">
                        <h4 class="name-deal">Название заявки</h4>
                        <div class="date-from">
                            <p class="date">21/02.2021</p>
                            <p class="from">От Вячеслава Агутина</p>
                        </div>
                        <p class="text-deal">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, eos sint, quas perspiciatis, voluptatibus consectetur alias vitae maiores 
                            adipisci enim ad soluta repudiandae. Laboriosam, deleniti! A
                             quod voluptatum porro atque.
                        </p>
                    </div>
                </div>
                <div class="deal">
                    <img src="media\news.jpg" alt="deal" class="deal">
                    <div class="deal-info">
                        <h4 class="name-deal">Название заявки</h4>
                        <div class="date-from">
                            <p class="date">21/02.2021</p>
                            <p class="from">От Вячеслава Агутина</p>
                        </div>
                        <p class="text-deal">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, eos sint, quas perspiciatis, voluptatibus consectetur alias vitae maiores 
                            adipisci enim ad soluta repudiandae. Laboriosam, deleniti! A
                             quod voluptatum porro atque.
                        </p>
                    </div>
                </div>
                        
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