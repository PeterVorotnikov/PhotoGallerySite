<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photogallery</title>
    <link rel="stylesheet" href="../css/card.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="wrapper">
                <div class="header__container">
                    <div class="header__left">
                        <div class="header__logo">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="36" height="36" rx="6" stroke="#9747FF" stroke-width="4" />
                                <path
                                    d="M2 27L11.8787 17.1213C13.0503 15.9497 14.9497 15.9497 16.1213 17.1213L20.0628 21.0628C21.1599 22.1599 22.9127 22.2394 24.1047 21.2461L26.0039 19.6634C27.1496 18.7086 28.8228 18.7405 29.9313 19.7382L38 27"
                                    stroke="#9747FF" stroke-width="4" />
                                <circle cx="28" cy="10" r="2" fill="#9747FF" />
                            </svg>
                        </div>
                        <p class="header__photogallery">
                            Фотогалерея
                        </p>
                    </div>
                    <div class="header__right">
                        <p class="header__username">
                            <span class="hello-word">Здравствуйте, </span>Константин
                        </p>
                        <button class="header__logout">
                            Выйти
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="header__hline"></div>
        </div>
    </header>


    <main>
        <div class="main">
            <div class="wrapper">
                <div class="main__container">
                    <div class="main__image-block">
                        <img class="main__image" src="../img/example_images/image 1.png" alt="No image" />
                    </div>
                    <div class="main__info-container">
                        <div class="main__header-panel">
                            <p class="main__header">
                                July. Summer butterflies.
                            </p>
                            <button class="main__back-button">
                                <div class="main__back-button-arrow">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M13 4L7 10L13 16" stroke="#9747FF" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <p class="main__back-button-text">
                                    Назад
                                </p>
                            </button>
                        </div>
                        <div class="main__info-panel">
                            <p class="main__date">
                                Добавлено 15 августа
                            </p>
                            <svg class="main__dot" width="4" height="4" viewBox="0 0 4 4" fill="none">
                                <circle cx="2" cy="2" r="2" fill="white" fill-opacity="0.1" />
                            </svg>
                            <p class="main__autor">
                                Константин Константинопольский
                            </p>
                        </div>
                        <div class="main__rating-panel">
                            <div class="main__rating-avg">
                                <p class="main__rating-avg__header">
                                    Рейтинг
                                </p>
                                <p class="main__rating-avg__rating">
                                    4,8
                                </p>
                                <p class="main__rating-avg__number-of-submits">
                                    138 оценок
                                </p>
                            </div>
                            
                            <div class="main__submit-panel-unactive">
                                <p class="main__submit-panel-unactive__header">
                                    Оцените фотографию
                                </p>
                                <div class="main__submit-panel-unactive__star-container">
                                    <button disabled class="main__submit-panel-unactive__star star-unactive">
    
                                    </button>
                                    <button disabled class="main__submit-panel-unactive__star star-unactive">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-unactive__star star-unactive">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-unactive__star star-unactive">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-unactive__star star-unactive">
                                        
                                    </button>
                                </div>
                                <button class="main__submit-panel-unactive__button">
                                    <p class="main__submit-panel-unactive__button__text">
                                        Оценить
                                    </p>
                                </button>
                            </div>
    
                            <div class="main__submit-panel-active">
                                <p class="main__submit-panel-active__header">
                                    Оцените фотографию
                                </p>
                                <div class="main__submit-panel-active__star-container">
                                    <button class="main__submit-panel-active__star star-active">
    
                                    </button>
                                    <button class="main__submit-panel-active__star star-active">
                                        
                                    </button>
                                    <button class="main__submit-panel-active__star star-active">
                                        
                                    </button>
                                    <button class="main__submit-panel-active__star star-active">
                                        
                                    </button>
                                    <button class="main__submit-panel-active__star star-unactive">
                                        
                                    </button>
                                </div>
                                <button class="main__submit-panel-active__button">
                                    <p class="main__submit-panel-active__button__text">
                                        Оценить
                                    </p>
                                </button>
                            </div>
    
                            <div class="main__submit-panel-load">
                                <p class="main__submit-panel-load__header">
                                    Оцените фотографию
                                </p>
                                <div class="main__submit-panel-load__star-container">
                                    <button disabled class="main__submit-panel-load__star star-active">
    
                                    </button>
                                    <button disabled class="main__submit-panel-load__star star-active">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-load__star star-active">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-load__star star-active">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-load__star star-unactive">
                                        
                                    </button>
                                </div>
                                <button class="main__submit-panel-load__button">
                                    <div class="main__submit-panel-load__button__load-icon"></div>
                                    <p class="main__submit-panel-load__button__text">
                                        Оценить
                                    </p>
                                </button>
                            </div>
    
                            <div class="main__submit-panel-done">
                                <p class="main__submit-panel-done__header">
                                    Вы оценили фотографию
                                </p>
                                <div class="main__submit-panel-done__star-container">
                                    <button disabled class="main__submit-panel-done__star star-active">
    
                                    </button>
                                    <button disabled class="main__submit-panel-done__star star-active">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-done__star star-active">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-done__star star-active">
                                        
                                    </button>
                                    <button disabled class="main__submit-panel-done__star star-unactive">
                                        
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="wrapper">
            <div class="footer__hline"></div>
        </div>
    
        <div class="footer">
            <div class="wrapper">
                <div class="footer__container">
                    <a href="#!" class="footer__link">
                        info@gmail.com
                    </a>
                    <p class="footer__info">
                        Информация о разработчике 
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>