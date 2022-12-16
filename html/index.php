<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoGallery</title>
    <link type="text/css" rel="stylesheet" href="../css/font.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <script type="text/javascript" src="../js/main.js"></script>
</head>

<?php

require_once("config.php");

$months = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');

?>

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
                        <button class="header__registration">
                            Регистрация
                        </button>
                        <button class="header__login">
                            Вход
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
    
<?php

try{
	$conn = new PDO("pgsql:host=localhost;dbname=" . $dbname, $username, $password);
}
catch(Exception $e){
	echo $e->getMessage();
}

?>

                    <button class="content__element">
                        <img class="content__image" src="../img/images/image 1.png" alt="Фото не найдено" />
                        <p class="content__image-name">
                            July. Summer butterflies.
                        </p>
                        <div class="content__image-date">
                            <div class="content__image-clock-icon"></div>
                            <p>
                                <span class="added-word">Добавлено</span> 15 августа
                            </p>
                        </div>
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


    <div class="form">
        <div class="form__background"></div>
        <div class="form__window">

            <div class="form__window__change-mode">
                <button class="change-mode__button change-mode__button__registration change-mode__button__active">
                    Регистрация
                </button>
                <button class="change-mode__button change-mode__button__autorization change-mode__button__unactive">
                    Авторизация
                </button>
            </div>

            <div class="registration__form">
                <form id="reg-form" action="" method="post">
                    <div class="registration-inputs__container">
						<input type="hidden" name="type" value="registration">
                        <div class="registration__name">
                            <label class="input__label input__label__big">
                                <input name="name" type="text" class="form__input registration__form__input form__input__big registration__name__input">
                                <p class="form__placeholder registration__placeholder">
                                    Ваше имя
                                </p>
                            </label>
                        </div>

                        <div class="registration__email">
                            <label class="input__label">
                                <input name="email" type="text" class="form__input registration__form__input registration__email__input">
                                <p class="form__placeholder registration__placeholder">
                                    Email
                                </p>
                            </label>
                        </div>

                        <div class="registration__phone">
                            <label class="input__label">
                                <input name="phone" type="text" class="form__input registration__form__input registration__phone__input">
                                <p class="form__placeholder registration__placeholder">
                                    Мобильный телефон
                                </p>
                            </label>
                        </div>

                        <div class="registration__pass">
                            <label class="input__label">
                                <input name="pass" type="password" class="form__input registration__form__input registration__pass__input">
                                <p class="form__placeholder registration__placeholder">
                                    Пароль
                                </p>
                            </label>
                        </div>

                        <div class="registration__pass-check">
                            <label class="input__label">
                                <input name="checkPass" type="password" class="form__input registration__form__input registration__pass-check__input">
                                <p class="form__placeholder registration__placeholder">
                                    Повторите пароль
                                </p>
                            </label>
                        </div>
                    </div>

                    <div class="agree">
                        <label class="agree__checkbox__label">
                            <input type="checkbox" class="agree__checkbox">
                            <div class="agree__checkbox__background"></div>
                        </label>
                        <p class="agree__text">
                            Согласен на обработку 
                            <a class="agree__link">персональных данных</a>
                        </p>
                    </div>

                    <button disabled class="registration__submit submit__unactive">
                        <p class="submit__text">
                            Зарегистрироваться
                        </p>
                    </button>

                    <div class="registration__info">
                        <div class="registration__info__icon"></div>
                        <p class="registration__info__text">
                            Все поля обязательны для заполнения
                        </p>
                    </div>
                </form>
            </div>

            <div class="login__form">
                <form id="log-form" action="" method="post">
                    <div class="login-inputs__container">
						<input type="hidden" name="type" value="login">
                        <div class="login__email">
                            <label class="input__label">
                                <input name="email" type="text" class="form__input login__form__input login__email__input">
                                <p class="form__placeholder login__placeholder">
                                    Email
                                </p>
                            </label>
                        </div>

                        <div class="login__pass">
                            <label class="input__label">
                                <input name="pass" type="password" class="form__input login__form__input login__pass__input">
                                <p class="form__placeholder login__placeholder">
                                    Пароль
                                </p>
                            </label>
                        </div>
                    </div>

                    <button disabled class="login__submit submit__unactive">
                        <p class="submit__text">
                            Войти
                        </p>
                    </button>

                    <div class="registration__info">
                        <div class="registration__info__icon"></div>
                        <p class="registration__info__text">
                            Все поля обязательны для заполнения
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
