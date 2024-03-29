<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- BEGIN Head -->
<head>

    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title -->
    <title>Levien - Casino Resort and Hotel</title>

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
    <svg aria-hidden="true" class="svg-icons" version="1.1"
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
                    <a href="index.html" title="Levien - Casino Resort and Hotel" class="Navbar-logo__link"></a> 
                    <div class="Navbar-logo__info label label--gray">
                        <div><span class="semibold">Casino Hotel</span> for</div> Swedish people 
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
                        <a href="index.html" title="Home" class="Menu-item__link">
                            Home
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="top-hotel-list.html" title="Top casino hotels" class="Menu-item__link">
                            Top casino hotels
                        </a>
                    </li>
                    <li class="Menu-item dropdown">
                        <a href="src/documentation/index.html" title="Docs" class="Menu-item__link dropdown-toggle">
                            Docs
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu__content">
                                <a class="dropdown-item" href="src/documentation/index.html#getting-started">Getting Started</a>
                                <a class="dropdown-item" href="src/documentation/index.html#html-structure">HTML Structure</a>
                                <a class="dropdown-item" href="src/documentation/index.html#stylesheet-files">Stylesheet Files</a>
                                <a class="dropdown-item" href="src/documentation/index.html#javascript-files">Javascript Files</a>
                                <a class="dropdown-item" href="src/documentation/index.html#support-desk">Support Desk</a>
                                <a class="dropdown-item" href="src/documentation/index.html#files-resources">Files & Resources</a>
                                <a class="dropdown-item" href="src/documentation/index.html#php-file">PHP Code Explanation</a>
                                <a class="dropdown-item" href="src/documentation/index.html#google-map">Google Map Api</a>
                                <a class="dropdown-item" href="src/documentation/index.html#updates">Regular Updates</a>
                            </div>
                        </div>
                    </li>
                    <li class="Menu-item">
                        <a href="about.html" title="About" class="Menu-item__link">
                            About
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="contact.html" title="Contacts" class="Menu-item__link">
                            Contacts
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
    <div class="Main sticky">

        <!-- BEGIN Banner -->
        <div class="Banner section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Banner__info">
                            <h2 class="Banner__title">
                                You can get detailed <span class="Banner__label">information</span> about this by talking to us.
                            </h2>
                            <p class="Banner__description">
                                Here you can find <span class="bold">expert reviews</span> of the best casino hotels in 
                                <span class="bold">Europe</span> for you. Select casino hotels.
                            </p>
                            <a href="hotel.html" class="button button--large" title="REQUEST FOR CONSULTATIONS">REQUEST FOR CONSULTATIONS</a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-2">

                        <!-- BEGIN Banner card -->
                        <div class="Banner-card Banner-card--details card card--padd card--bg">
                            <div class="Banner-card__header">
                                <img src="src/assets/img/hotels/hotel1.png" alt="hotel1" title="hotel1"
                                    class="Hotel__image ml-0" />
                                <div class="Hotels__rating">
                                    <span class="semibold Hotels__score">9.8</span>
                                    <span class="Hotels__status">Expert rating</span>
                                    <div class="stars">
                                        <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                            class="stars__item" />
                                        <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                            class="stars__item" />
                                        <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                            class="stars__item" />
                                        <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                            class="stars__item" />
                                        <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                            class="stars__item" />
                                    </div>
                                </div>
                            </div>
                            <div class="Banner-card__body">
                                <div class="title--gray">ADDRESS:</div>
                                <p class="Hotels__description">3 Avenue Georges Bassinet, 69260
                                    Charbonnières-les-Bains, Frankrike</p>
                            </div>
                            <button class="button button--block button--border button--icon" data-toggle="modal"
                                data-target="#viewMapModalCenter">SHOW ADDRESS
                                <svg class="icon icon-pin_sharp_circle">
                                    <use xlink:href="#icon-pin_sharp_circle"></use>
                                </svg>
                            </button>

                            <!-- BEGIN Modal Google map -->
                            <div class="modal fade" id="viewMapModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="viewMapModalCenter" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="viewMapModalCenterTitle">
                                                <strong>Ritz London</strong> 3 Avenue Georges Bassinet, 69260
                                                Charbonnières-les-Bains, Frankrike</h3>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <svg class="icon icon-close">
                                                    <use xlink:href="#icon-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42555.27704370547!2d4.738953456567812!3d45.785677388527326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ed3dfa0b3be3%3A0x125fc5b76f2bc0a6!2s3+Avenue+Georges+Bassinet%2C+69260+Charbonni%C3%A8res-les-Bains%2C+France!5e0!3m2!1sen!2s!4v1537101762318"
                                                width="1110" 
                                                height="570" 
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Modal Google map -->

                        </div>
                        <!-- BEGIN Banner card -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END Banner -->

        <!-- BEGIN Hotels card -->
        <div class="Hotel-card section">
            <div class="container">
                <div class="card card--padd">
                    <div class="Hotel-header">
                        <img src="src/assets/img/hotels/hotel1.png" alt="hotel1" title="hotel1"
                            class="Hotel__image ml-0" />
                        <div class="Hotel-header__title">
                            <h3 class="title title--medium">Pavillon Rotonde</h3>
                            <p class="text">
                                Here you can find expert reviews of the best casino hotels in Europe for you. 
                                Choose the casino hotels that suit you best on the list.
                            </p>
                        </div>
                    </div>
                    <hr />

                    <!-- BEGIN Carousel -->
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="src/assets/img/slider/slider1.jpg"
                                            alt="First slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="src/assets/img/slider/slider2.jpg"
                                            alt="Second slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="src/assets/img/slider/slider3.jpg"
                                            alt="Third slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="src/assets/img/slider/slider4.jpg"
                                            alt="Fourth slide" />
                                    </div>
                                </div>

                                <!-- BEGIN Carousel navigation -->
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <img src="src/assets/img/icons/arrow-left.svg" alt="arrow-left"
                                        title="arrow-left" />
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <img src="src/assets/img/icons/arrow-right.svg" alt="arrow-right"
                                        title="arrow-right" />
                                </a>
                                <!-- END Carousel navigation -->

                            </div>
                            <div class="col-lg-4">
                                <h3 class="title--small">Other photos:</h3>

                                <!-- BEGIN Carousel indicators -->
                                <div class="carousel-indicators">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3 col-lg-6">
                                            <div data-target="#carouselExampleFade" data-slide-to="0"
                                                class="carousel-indicators__item active">
                                                <img class="d-block w-100" src="src/assets/img/slider/slider1.jpg"
                                                    alt="First-slide" title="First slide" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-lg-6">
                                            <div data-target="#carouselExampleFade" data-slide-to="1"
                                                class="carousel-indicators__item">
                                                <img class="d-block w-100" src="src/assets/img/slider/slider2.jpg"
                                                    alt="Second-slide" title="Second slide" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-lg-6">
                                            <div data-target="#carouselExampleFade" data-slide-to="2"
                                                class="carousel-indicators__item">
                                                <img class="d-block w-100" src="src/assets/img/slider/slider3.jpg"
                                                    alt="Third-slide" title="Third slide" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-lg-6">
                                            <div data-target="#carouselExampleFade" data-slide-to="3"
                                                class="carousel-indicators__item">
                                                <img class="d-block w-100" src="src/assets/img/slider/slider4.jpg"
                                                    alt="Fourth-slide" title="Fourth slide" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Carousel indicators -->

                                <button class="button button--block button--border button--icon" data-toggle="modal"
                                    data-target="#exampleModalCenter">SHOW ADDRESS
                                    <svg class="icon icon-pin_sharp_circle">
                                        <use xlink:href="#icon-pin_sharp_circle"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Carousel -->

                    <div class="Hotel-content">
                        <h3 class="title title--small">Overview</h3>
                        <div class="text">
                            <p>
                                Motor Lodge Casino Casino offers free wi-fi. The hotel itself is a 10-minute walk from Christchurch Casino. 
                                Some have a spa bath. Each room has electric blankets, satellite TV. Two breakfasts are offered each morning.
                            </p>
                            <p>
                                Christchurch Casino is located in Victoria Street, the city’s best entertainment center. 
                                At Christchurch Casino, 36 board games and 500 slot machines are always ready for our customers. 
                                Located near Christchurch Casino. Peterborough Street has 266 parking spaces. 
                                In addition, there is a chance to win free daily parking. The cost of parking is $ 3 per hour to $ 12 per day.
                            </p>
                            <p>
                                For more information, please contact Darren Henderson for parking information (03) 372 8892. 
                                In order to provide a peaceful, safe and mature atmosphere where customers enjoy their entertainment, 
                                without interruptions with others, inappropriately dressed or acting rudely, 
                                we we apply R20 & Dress Code - a smart and neat standard of appearance is a must.
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="Hotel-list">
                        <h3 class="title title--small">Similar hotels</h3>
                        <div class="Hotels-table__row">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="Hotels-table__sort">
                                                <span class="Hotels-table__number">1</span>
                                                <img src="src/assets/img/hotels/hotel2.png" alt="hotel2"
                                                    title="hotel2" class="Hotel__image" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 valign">
                                            <p class="Hotels__description">150 Piccadilly, St James, London W1J 9BR,
                                                Storbritannien</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5">
                                            <div class="Hotels__rating">
                                                <span class="semibold Hotels__score">9.6</span>
                                                <span class="Hotels__status">Expert rating</span>
                                                <div class="stars">
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 valign d-flex justify-content-end">
                                            <a href="hotel.html" class="button" title="VISIT PAGE">VISIT PAGE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Hotels-table__row">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="Hotels-table__sort">
                                                <span class="Hotels-table__number">2</span>
                                                <img src="src/assets/img/hotels/hotel3.png" alt="hotel3"
                                                    title="hotel3" class="Hotel__image" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 valign">
                                            <p class="Hotels__description">U Obecního domu 660/3, 110 00 Staré
                                                Město, Tjeckien</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5">
                                            <div class="Hotels__rating">
                                                <span class="semibold Hotels__score">9.2</span>
                                                <span class="Hotels__status">Expert rating</span>
                                                <div class="stars">
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                    <img src="src/assets/img/icons/star.svg" alt="star" title="star"
                                                        class="stars__item" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 valign d-flex justify-content-end">
                                            <a href="hotel.html" class="button" title="VISIT PAGE">VISIT PAGE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hotels card -->

    </div>
    <!-- END Main -->

    <!-- BEGIN Mobile burger navigation -->
    <nav class="cd-nav-container burger-menu burger-menu--right" id="cd-nav">
        <div class="burger-menu__open">
            <a href="index.html" class="burger-menu__logo" title="Levien - Casino Resort and Hotel"></a>
            <div class="cd-nav-trigger cd-close-nav">
                <div class="cd-nav__divider cd-nav__divider--top"></div>
                <div class="cd-nav__divider cd-nav__divider--bottom"></div>
            </div>
        </div>
        <ul class="burger-menu-list">
            <li class="burger-menu-list__item">
                <a href="index.html" title="Home" class="burger-menu-list__link">Home</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="top-hotel-list.html" title="Top casino hotels" class="burger-menu-list__link">Top casino hotels</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="about.html" title="What are we doing?" class="burger-menu-list__link">What are we doing?</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="contact.html" title="Contacts" class="burger-menu-list__link">Contacts</a>
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
                    <a href="index.html" title="Levien - Casino Resort and Hotel" class="Navbar-logo__link"></a>
                    <div class="Navbar-logo__info label label--gray">
                        <div><span class="semibold">Casino Hotel</span> for</div> Swedish people 
                    </div>
                </div>
                <ul class="Menu Menu--line">
                    <li class="Menu-item">
                        <a href="index.html" title="Home" class="Menu-item__link">
                            Home
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="top-hotel-list.html" title="Top casino hotels" class="Menu-item__link">
                            Top casino hotels
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="contact.html" title="Contacts" class="Menu-item__link">
                            Contacts
                        </a>
                    </li>
                </ul>
                <!-- END Footer navigation -->

                <!-- BEGIN Subscribe -->
                <form action="#" method="post" class="Form">
                    <div class="Form__group Form__group--one">
                        <input type="email" class="Form__input Form__input--group" id="email" name="email"
                            spellcheck="false" autocapitalize="off" required />
                        <label for="email" class="Form__label Form__label--group">Email</label>
                        <span class="Form__send">
                            <input type="submit" value="" class="Form__submit" data-toggle="modal"
                                data-target="#exampleModalCenter" />
                        </span>
                    </div>
                </form>
                <!-- END Subscribe -->

                <!-- BEGIN Modal subscribe thanks message -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenter" aria-hidden="true">
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
    <!-- Main -->
    <script src="src/assets/js/main.js"></script>

</body>

</html>