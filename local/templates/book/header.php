<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/reset.css">


    <title>Document</title>
</head>
<body>

<header class="header">
    <style>
        .header {
            background-image: url("/img/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <div class="container">
        <nav class="navigation">
            <div class="logo">
                <a href=""><img src="/img/logo.png" alt="#"></a>
                <a class="header__logo-text" href="">МБУ "Централизованная библиотечная система" <br> МО "Джидинский район"</a>
            </div>
            <div class="header__menu-list">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">
                        Читателям
                    </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Как стать читателем</a></li>
                        <li><a class="dropdown-item" href="">Услуги</a></li>
                        <li><a class="dropdown-item" href="">Виртуальные книжные выставки</a></li>
                        <li><a class="dropdown-item" href="">Новинки книг</a></li>
                        <li><a class="dropdown-item" href="">Анонсы мероприятий</a></li>
                        <li><a class="dropdown-item" href="">Вопрос-ответ</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">
                            Ресурсы
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Электронный каталог</a></li>
                            <li><a class="dropdown-item" href="">Газеты</a></li>
                            <li><a class="dropdown-item" href="">Базы данных</a></li>
                            <li><a class="dropdown-item" href="">Электронные библиотеки</a></li>
                            <li><a class="dropdown-item" href="">Наши разработки</a></li>
                        </ul>
                </div>
                <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">
                            Краеведение
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Литературная карта</a></li>
                            <li><a class="dropdown-item" href="">Летопись села</a></li>
                            <li><a class="dropdown-item" href="">Книги памяти</a></li>
                            <li><a class="dropdown-item" href="">История малой Родины в лицах</a></li>
                            <li><a class="dropdown-item" href="">Джидинский район от А до Я</a></li>
                        </ul>
                </div>
                <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">
                            События
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Пушкинская карта</a></li>
                            <li><a class="dropdown-item" href="">Акции</a></li>
                            <li><a class="dropdown-item" href="">Мероприятия</a></li>
                        </ul>
                </div>
                <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">
                            О библиотеке
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Структура библиотеки</a></li>
                            <li><a class="dropdown-item" href="">Документы</a></li>
                            <li><a class="dropdown-item" href="">Режим работы</a></li>
                            <li><a class="dropdown-item" href="">Контакты</a></li>
                            <li><a class="dropdown-item" href="">Отчет о деятельности</a></li>
                            <li><a class="dropdown-item" href="">Награды</a></li>
                            <li><a class="dropdown-item" href="">История</a></li>
                        </ul>
                </div>
            </div>
            <div class="header__search visible-lg-block">
                <form action="/search/" method="POST" name="SEARCH_FORM">
                    <input type="text" name="q" value="<?=$_POST["q"];?>" placeholder="Поиск по сайту">
                    <button name="SEND" value="Y"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>








<!--<header class="header">-->
<!--    <style>-->
<!--        .header {-->
<!--            background-image: url("/img/bg.png");-->
<!--            background-repeat: no-repeat;-->
<!--            background-size: cover;-->
<!--        }-->
<!--    </style>-->
<!--    <div class="container">-->
<!--        <nav class="navigation">-->
<!--            <div class="logo">-->
<!--                <a href=""><img src="/img/logo.png" alt="#"></a>-->
<!--                <a href="">МБУ "Централизованная библиотечная система" <br> МО "Джидинский район"</a>-->
<!--            </div>-->
<!--            <div class="header__menu">-->
<!--                <ul class="header__menu-list">-->
<!--                    <li>-->
<!--                        <a href="">Читателям</a>-->
<!--                        <ul class="header__submenu">-->
<!--                            <li><a href="">Как стать читателем</a></li>-->
<!--                            <li><a href="">Услуги</li>-->
<!--                            <li><a href="">Виртуальные книжные выставки</a></li>-->
<!--                            <li><a href="">Новинки книг</a></li>-->
<!--                            <li><a href="">Анонсы мероприятий</a></li>-->
<!--                            <li><a href="">Вопрос-ответ</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">Ресурсы</a>-->
<!--                        <ul>-->
<!--                            <li><a href="">Электронный каталог</a></li>-->
<!--                            <li><a href="">Газеты</li>-->
<!--                            <li><a href="">Базы данных</a></li>-->
<!--                            <li><a href="">Электронные библиотеки</a></li>-->
<!--                            <li><a href="">Наши разработки</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">Краеведение</a>-->
<!--                        <ul>-->
<!--                            <li><a href="">Литературная карта</a></li>-->
<!--                            <li><a href="">Летопись  села</li>-->
<!--                            <li><a href="">Книги памяти</a></li>-->
<!--                            <li><a href="">История малой Родины в лицах</a></li>-->
<!--                            <li><a href="">Джидинский район от А до Я</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">События</a>-->
<!--                        <ul>-->
<!--                            <li><a href="">Пушкинская карта</a></li>-->
<!--                            <li><a href="">Акции</li>-->
<!--                            <li><a href="">Мероприятия</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">О библиотеке</a>-->
<!--                        <ul>-->
<!--                            <li><a href="">Структура библиотеки</a></li>-->
<!--                            <li><a href="">Документы</li>-->
<!--                            <li><a href="">Режим работы</a></li>-->
<!--                            <li><a href="">Контакты</a></li>-->
<!--                            <li><a href="">Отчет о деятельности</a></li>-->
<!--                            <li><a href="">Награды</a></li>-->
<!--                            <li><a href="">История</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
<!--</header>-->




<script src="https://kit.fontawesome.com/643eec2f1e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
