<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoGallery</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/main.css">
	<script src='../js/main_login.js'></script>
</head>

<body>
    <header>
        <div class="header">
            <div class="wrapper">
                <div class="header__container">
                    <div class="header__left">
                        <p class="header__logo"></p>
                        <p class="header__photogallery">
                            Фотогалерея
                        </p>
                    </div>
                    <div class="header__right">
                        <p class="header__username">
                            <span class="hello-word">Здравствуйте, </span>
<?php

session_start();

if(empty($_SESSION['name']) || empty($_SESSION['email'])){
	die();
}

echo $_SESSION['name'];

?>
                        </p>
                        <button class="header__logout">
                            Выход
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="wrapper">
            <div class="hline"></div>
        </div>
    </header>


    <main>
        <div class="add-panel">
            <div class="wrapper">
                <div class="add-panel__container">
                    <p class="add-panel__date">
                        Июль, 2022
                    </p>
                    <button class="add-panel__button">
                        <div class="add-panel__button-container">
                            <div class="add-panel__button-plus"></div>
                            <p class="add-panel__button-text">
                                Добавить фото
                            </p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    
    
        <div class="content">
            <div class="wrapper">
                <div class="content__container">
    
                    <button class="content__element">
                        <img class="content__image" src="../img/images/image 1.png" alt="Фото не найдено" />
                        <p class="content__image-name">
                            July. Summer butterflies.
                        </p>
                        <p class="content__image-date">
                            Добавлено 15 августа
                        </p>
                    </button>
    
                </div>
            </div>
        </div>
    
    
        <div class="show-more">
            <div class="wrapper">
                <button class="show-more__button">
                    <div class="show-more__arrow"></div>
                    <p class="show-more__text">
                        Показать ещё
                    </p>
                </button>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-hline-container">
            <div class="wrapper">
                <div class="hline"></div>
            </div>
        </div>
    
        <div class="footer">
            <div class="wrapper">
                <div class="footer__container">
                    <a class="footer__link" href="#!">info@gmail.com</a>
                    <p class="footer__info" href="#!">Информация о разработчике</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
