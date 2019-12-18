<!DOCTYPE html>
<html lang="ru" dir="ltr">

<!-- BEGIN Head -->
<head>

    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title -->
    <title>Royce - Hotel and Casino</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css" />
    <!-- Slick carousel -->
    <link rel="stylesheet" href="src/assets/css/slick-carousel.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="src/assets/css/style.css" />
    <!-- Responsive -->
    <link rel="stylesheet" href="src/assets/css/responsive.css" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="256x256" href="src/assets/img/favicon/android-chrome-256x256.png">
    <link rel="icon" type="image/png" sizes="192x192" href="src/assets/img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/img/favicon/favicon-16x16.png" />
    <link rel="icon" type="image/png" href="src/assets/img/favicon/favicon.ico" />
    <link rel="manifest" href="src/assets/img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="src/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#990100" />
    <meta name="theme-color" content="#ffffff" />

</head>
<!-- END Head -->

<body class="d-flex flex-column justify-content-between">

    <!-- BEGIN  Loading Section -->
    <div id="loading">
        <div class="loading__center">
            <div class="loading__position">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <!-- END Loading Section -->

    <!-- All Svg icons -->
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>

            <!-- BEGIN Close Icon -->
            <symbol id="icon-close" viewBox="0 0 32 32">
                <title>close</title>
                <path
                    d="M18.314 16l13.686 13.686-2.315 2.314-13.685-13.686-13.686 13.686-2.314-2.314 13.685-13.686-13.685-13.686 2.314-2.314 13.686 13.686 13.685-13.686 2.315 2.314z">
                </path>
            </symbol>
            <!-- END Close Icon -->

            <!-- BEGIN Pin Sharp Circle Icon -->
            <symbol id="icon-pin_sharp_circle" viewBox="0 0 22 32">
                <title>pin_sharp_circle</title>
                <path
                    d="M14.4 11.55c0 1.768-1.432 3.2-3.2 3.2s-3.2-1.432-3.2-3.2c0-1.768 1.432-3.2 3.2-3.2s3.2 1.432 3.2 3.2zM11.2 27.2c0 0-8-11.2-8-16 0-4.411 3.589-8 8-8s8 3.589 8 8c0 4.8-8 16-8 16zM11.2 0c-6.186 0-11.2 5.014-11.2 11.2s11.2 20.8 11.2 20.8c0 0 11.2-14.614 11.2-20.8s-5.014-11.2-11.2-11.2z">
                </path>
            </symbol>
            <!-- END Pin Sharp Circle Icon -->

            <!-- BEGIN Checked Icon -->
            <symbol id="icon-checked" viewBox="0 0 32 32">
                <title>checked</title>
                <path
                    d="M16 28.8c-7.069 0-12.8-5.731-12.8-12.8v0c0-7.069 5.731-12.8 12.8-12.8v0c7.069 0 12.8 5.731 12.8 12.8v0c0 7.069-5.731 12.8-12.8 12.8v0zM16 32v0c8.837 0 16-7.163 16-16v0c0-8.837-7.163-16-16-16v0c-8.837 0-16 7.163-16 16v0c0 8.837 7.163 16 16 16zM14.523 20.8l7.877-7.68-1.969-1.92-5.908 5.761-2.955-2.881-1.969 1.92 4.923 4.801z">
                </path>
            </symbol>
            <!-- END Checked Icon -->

        </defs>
    </svg>

    <!-- BEGIN Header -->
    <header class="Navbar sticky-header">

        <!-- BEGIN Navigation -->
        <nav class="Navbar__nav">
            <div class="container d-flex justify-content-between align-items-center">

                <!-- BEGIN Logo section -->
                <div class="Navbar-logo">
                    <a href="/" title="Rafoz Farzo - Photography Template" class="Navbar-logo__link"></a>
                    <div class="Navbar-logo__info label label--gray">
                        <div><span class="semibold">Казино Отель</span> для</div> шведских людей
                    </div>
                </div>
                <!-- END Logo section -->

                <!-- BEGIN Mobile burger menu icon -->
                <div class="cd-nav-trigger burger-icon burger-icon--right">
                    <div class="cd-nav__divider"></div>
                    <div class="cd-nav__divider"></div>
                    <div class="cd-nav__divider"></div>
                </div>
                <!-- END Mobile burger menu icon -->

                <!-- BEGIN Menu -->
                <ul class="Menu Menu--line">
                    <li class="Menu-item">
                        <a href="/" title="Главная" class="Menu-item__link">
                            Главная
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="#" title="Лучшие отели казино" class="Menu-item__link">
                            Лучшие отели казино
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="/contact.html" title="Контакты" class="Menu-item__link">
                            Контакты
                        </a>
                    </li>
                </ul>
                <!-- END Menu -->

            </div>
        </nav>
        <!-- END Navigation -->

    </header>
    <!-- END Header -->

    <!-- BEGIN Main -->
    <main class="sticky">
        <article>

            <!-- BEGIN About section -->
            <section class="About content">
                <div class="container">
                    <h1 class="title">Что мы <strong class="title__label">делаем</strong></h1>
                    <div class="About-card card card--padd text">
                        <p>
                            На www.bastcasinorecensioner.com мы помогаем шведским людям в качестве отдыхающих найти
                            лучшие отели в казино.
                            Большинство людей, которые путешествуют имеют различные потребности и требования, а также
                            помочь найти казино отель,
                            который подходит вам помочь с информацией от специалистов в данной отрасли и людей,
                            которые уже жили в гостиницах или имеют информацию из первых рук о них.
                        </p>
                        <p>
                            Многим помогает наш список из десяти лучших отелей в Европе, как новых, так и постоянных
                            клиентов, путешествующих
                            по различным европейским странам. Чтобы создать список 10 лучших отелей в Европе, мы
                            разработали всеобъемлющую
                            систему обзора и оценки, которая была очень хорошо принята в отрасли.
                        </p>
                        <p>
                            Благодаря этому в последние годы мы получили большое количество подписчиков и подписчиков, и
                            мы постоянно инвестируем
                            в улучшение наших услуг. Наша главная цель - помочь нашим клиентам провести замечательный
                            отпуск и облегчить всем,
                            кто планирует поездку по Европе.
                        </p>
                        Адрес:<br />
                        <div class="semibold underline">Просп. Тбилиси 49С, Чираг Плаза 8 этаж, Баку, AZ 1065
                            Азербайджан </div>
                    </div>
                </div>
            </section>
            <!-- END About section -->

        </article>
    </main>
    <!-- END Main -->

    <!-- BEGIN Mobile burger navigation -->
    <nav class="cd-nav-container burger-menu burger-menu--right" id="cd-nav">
        <div class="burger-menu__open">
            <a href="index.html" class="burger-menu__logo" title="Rafoz Farzo - Photography Template"></a>
            <div class="cd-nav-trigger cd-close-nav">
                <div class="cd-nav__divider cd-nav__divider--top"></div>
                <div class="cd-nav__divider cd-nav__divider--bottom"></div>
            </div>
        </div>
        <ul class="burger-menu-list">
            <li class="burger-menu-list__item">
                <a href="/" title="Главная" class="burger-menu-list__link">Главная</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="#" title="Лучшие отели казино" class="burger-menu-list__link">Лучшие отели казино</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="/about.html" title="Что мы делаем?" class="burger-menu-list__link">Что мы делаем?</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="/contact.html" title="Контакты" class="burger-menu-list__link">Контакты</a>
            </li>
        </ul>
    </nav>
    <!-- END Mobile burger navigation -->

    <!-- BEGIN Overlay mask -->
    <div class="cd-overlay"></div>
    <!-- END Overlay mask -->

    <!-- BEGIN Go to top button -->
    <div class="scroll-up">
        <div class="scroll-up__icon"></div>
    </div>
    <!-- END Go to top button -->

    <!-- BEGIN Footer -->
    <footer class="Navbar clearfix">

        <!-- BEGIN Footer navigation -->
        <nav class="Navbar__nav">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="Navbar-logo">
                    <h1 class="Navbar-logo__image">
                        <a href="/" title="Rafoz Farzo - Photography Template" class="Navbar-logo__link"></a>
                    </h1>
                    <div class="Navbar-logo__info label label--gray">
                        <div><span class="semibold">Казино Отель</span> для</div> шведских людей
                    </div>
                </div>
                <ul class="Menu Menu--line">
                    <li class="Menu-item">
                        <a href="/" title="Главная" class="Menu-item__link">
                            Главная
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="#" title="Лучшие отели казино" class="Menu-item__link">
                            Лучшие отели казино
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="/contact.html" title="Контакты" class="Menu-item__link">
                            Контакты
                        </a>
                    </li>
                </ul>
                <!-- END Footer navigation -->

                <!-- BEGIN Subscribe -->
                <form action="" method="" class="Form">
                    <div class="Form__group Form__group--one">
                        <input type="email" class="Form__input Form__input--group" id="email" name="email"
                            spellcheck="false" autocapitalize="off" required />
                        <label for="email" class="Form__label Form__label--group">Электронная почта</label>
                        <span class="Form__send">
                            <input type="submit" value="" class="Form__submit" data-toggle="modal"
                                data-target="#exampleModalCenter" />
                        </span>
                    </div>
                </form>
                <!-- END Subscribe -->

                <!-- BEGIN Modal subscribe thanks message -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-3 h-auto text-center">
                                Thanks for subscription
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Modal subscribe thanks message -->

            </div>
        </nav>
        <!-- END Footer navigation -->

    </footer>
    <!-- END Footer -->

    <!-- Jquery -->
    <script src="src/assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="src/assets/js/bootstrap.min.js"></script>
    <!-- Slick carousel -->
    <script src="src/assets/js/slick.min.js"></script>
    <!-- Burger menu -->
    <script src="src/assets/js/burger-menu.min.js"></script>
    <!-- Common -->
    <script src="src/assets/js/common.js"></script>

</body>

</html>