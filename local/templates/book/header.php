
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;600;700&family=Ruda:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">



<title>Document</title>
</head>
<body>

    <header class="header">
        <div class="header__bg mb-4">
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
                                        <li><a class="dropdown-item" href="/readers/become_a_reader/index.php">Как стать читателем</a></li>
                                        <li><a class="dropdown-item" href="/readers/services/index.php">Услуги</a></li>
                                        <li><a class="dropdown-item" href="/readers/virtual_book/index.php">Виртуальные книжные выставки</a></li>
                                        <li><a class="dropdown-item" href="/readers/new_books/index.php">Новинки книг</a></li>
                                        <li><a class="dropdown-item" href="/readers/event/index.php">Анонсы мероприятий</a></li>
                                        <li><a class="dropdown-item" href="/readers/question/index.php">Вопрос-ответ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ресурсы
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/resources/digital_catalogue/index.php">Электронный каталог</a></li>
                                        <li><a class="dropdown-item" href="/resources/newspapers/index.php">Газеты</a></li>
                                        <li><a class="dropdown-item" href="/resources/database/index.php">Базы данных</a></li>
                                        <li><a class="dropdown-item" href="/resources/electronic_libraries/index.php">Электронные библиотеки</a></li>
                                        <li><a class="dropdown-item" href="/resources/developments/index.php">Наши разработки</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Краеведение
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/local_history/literary_map/index.php">Литературная карта</a></li>
                                        <li><a class="dropdown-item" href="/local_history/chronicle/index.php">Летопись села</a></li>
                                        <li><a class="dropdown-item" href="/local_history/books_of_memory/index.php">Книги памяти</a></li>
                                        <li><a class="dropdown-item" href="/local_history/history_of_Motherland/index.php">История малой Родины в лицах</a></li>
                                        <li><a class="dropdown-item" href="/local_history/dzhidinsky_district/index.php">Джидинский район от А до Я</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        События
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/events/pushkin_map/index.php">Пушкинская карта</a></li>
                                        <li><a class="dropdown-item" href="/events/stock/index.php">Акции</a></li>
                                        <li><a class="dropdown-item" href="/events/events/index.php">Мероприятия</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        О&nbspбиблиотеке
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/about/structure/index.php">Структура библиотеки</a></li>
                                        <li><a class="dropdown-item" href="/about/docs/index.php">Документы</a></li>
                                        <li><a class="dropdown-item" href="/about/operating_mode/index.php">Режим работы</a></li>
                                        <li><a class="dropdown-item" href="/about/contacts/index.php">Контакты</a></li>
                                        <li><a class="dropdown-item" href="/about/activity_report/index.php">Отчет о деятельности</a></li>
                                        <li><a class="dropdown-item" href="/about/awards/index.php">Награды</a></li>
                                        <li><a class="dropdown-item" href="/about/history/index.php">История</a></li>
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
        <div class="container header__sub-nav mb-4 rounded-3">
	        <div class="row">
		        <a href="/readers/become_a_reader/" class="header__sub__nav-item col-6 col-md-4 col-lg d-flex align-items-center p-4">
			        <i class="fa fa-book fa-lg me-3"></i>
			        <div>КАК СТАТЬ ЧИТАТЕЛЕМ</div>
		        </a>
		        <a href="/readers/services" class="header__sub__nav-item col-6 col-md-4 col-lg d-flex align-items-center p-4">
			        <i class="fa fa-clipboard-list fa-lg me-3"></i>
			        <div>УСЛУГИ</div>
		        </a>
		        <a href="/readers/new_books" class="header__sub__nav-item col-6 col-md-4 col-lg d-flex align-items-center p-4">
			        <i class="fa fa-book-bookmark fa-lg me-3"></i>
			        <div>НОВИНКИ КНИГ</div>
		        </a>
		        <a href="/readers/virtual_book" class="header__sub__nav-item col-6 col-md-4 col-lg d-flex align-items-center p-4">
			        <i class="fa fa-book-atlas fa-lg me-3"></i>
			        <div>КНИЖНЫЕ ВЫСТАВКИ</div>
		        </a>
		        <a href="/readers/event" class="header__sub__nav-item col-6 col-md-4 col-lg d-flex align-items-center p-4">
			        <i class="fa fa-bullhorn fa-lg me-3"></i>
			        <div>АНОНСЫ МЕРОПРИЯТИЙ</div>
		        </a>
		        <a href="/readers/question" class="header__sub__nav-item col-6 col-md-4 col-lg d-flex align-items-center p-4">
			        <i class="fa fa-comments fa-lg me-3"></i>
			        <div>ВОПРОС-ОТВЕТ</div>
		        </a>
	        </div>
        </div>
    </header>








