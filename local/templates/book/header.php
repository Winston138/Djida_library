
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&family=Inter:wght@500;700&family=Open+Sans:wght@300;400&family=Roboto:wght@300&family=Ruda:wght@500&family=Tilt+Prism&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/reset.css">



<title>Document</title>
</head>
<body>

<header class="header">
    <div class="header__bg">
        <style>
            .header__bg {
                background-image: url("/img/bg.png");
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <div class="container">
            <nav class="navigation navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="/" class="d-flex align-items-center">
                            <img src="/img/logo.png" alt="#" class="d-block me-3">
                            <div>МБУ&nbsp;"Централизованная&nbsp;библиотечная&nbsp;система" <br> МО "Джидинский район"</div>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="header__menu-list collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ресурсы
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Электронный каталог</a></li>
                                    <li><a class="dropdown-item" href="">Газеты</a></li>
                                    <li><a class="dropdown-item" href="">Базы данных</a></li>
                                    <li><a class="dropdown-item" href="">Электронные библиотеки</a></li>
                                    <li><a class="dropdown-item" href="">Наши разработки</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Краеведение
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Литературная карта</a></li>
                                    <li><a class="dropdown-item" href="">Летопись села</a></li>
                                    <li><a class="dropdown-item" href="">Книги памяти</a></li>
                                    <li><a class="dropdown-item" href="">История малой Родины в лицах</a></li>
                                    <li><a class="dropdown-item" href="">Джидинский район от А до Я</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    События
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Пушкинская карта</a></li>
                                    <li><a class="dropdown-item" href="">Акции</a></li>
                                    <li><a class="dropdown-item" href="">Мероприятия</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    О&nbspбиблиотеке
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
                            </li>
                        </ul>
                        <form class="header__search visible-lg-block d-flex" role="search">
                            <input type="text" name="q" value="<?=$_POST["q"];?>" placeholder="Поиск">
                            <button name="SEND" value="Y"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</header>





