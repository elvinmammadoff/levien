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
                    <a href="/" title="Levien - Casino Resort and Hotel" class="Navbar-logo__link"></a> 
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
                        <a href="/" title="Home" class="Menu-item__link">
                            Home
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="#" title="Top casino hotels" class="Menu-item__link">
                            Top casino hotels
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
    <main class="sticky">
        <article>

            <!-- BEGIN Banner section -->
            <section class="Banner section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="Banner__info">
                                <h2 class="Banner__title">
                                    The best Scandinavian or European
                                    <span class="Banner__label">casino hotel</span>
                                    for Swedish people
                                </h2>
                                <p class="Banner__description">
                                    Here you can find expert reviews of the best casino hotels in
                                    <span class="bold">Europe</span> for you. Choose the 
                                    <span class="bold">casino hotels</span> that suit you best on the list.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 offset-lg-2">

                            <!-- BEGIN Banner card -->
                            <div class="Banner-card card card--padd card--bg">
                                <div class="Banner-card__header">
                                    <img src="src/assets/img/icons/locked.svg" alt="locked" title="locked" />
                                    <div class="Banner-card__label">
                                        <h3 class="Banner-card__title">
                                            All hotels <br>
                                            <span class="semibold">100% guaranteed</span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="Banner-card-list">
                                    <div class="Banner-card-list__item">
                                        <svg class="icon icon-checked">
                                            <use xlink:href="#icon-checked"></use>
                                        </svg>
                                        <h3 class="Banner-card-list__name">Top Hotels</h3>
                                    </div>
                                    <div class="Banner-card-list__item">
                                        <svg class="icon icon-checked">
                                            <use xlink:href="#icon-checked"></use>
                                        </svg>
                                        <h3 class="Banner-card-list__name">Support and communication are the best in hotels.</h3>
                                    </div>
                                    <div class="Banner-card-list__item">
                                        <svg class="icon icon-checked">
                                            <use xlink:href="#icon-checked"></use>
                                        </svg>
                                        <h3 class="Banner-card-list__name">Direct link</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- END Banner card -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- END Banner section -->

            <!-- BEGIN Hotels section -->
            <section class="Hotels section clearfix">
                <div class="container">
                    <div class="Hotels-table">
                        <div class="Hotels-table__header">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="Hotels-table__head">
                                                <span class="semibold Hotels-table__id">#1</span>
                                                <strong class="Hotels-table__title">HOTEL</strong>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="Hotels-table__head">
                                                <span class="semibold Hotels-table__id">#2</span>
                                                <strong class="Hotels-table__title">ADDRESS</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="Hotels-table__head">
                                                <span class="semibold Hotels-table__id">#3</span>
                                                <strong class="Hotels-table__title">POSITION</strong>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="Hotels-table__head">
                                                <span class="semibold Hotels-table__id">#4</span>
                                                <strong class="Hotels-table__title">DETAILED REVIEW</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Hotels-table__body">
                            <div class="Hotels-table__row">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="Hotels-table__sort">
                                                    <img src="src/assets/img/icons/number-one.svg" alt="number-one"
                                                        title="number one" />
                                                    <img src="src/assets/img/hotels/hotel1.png" alt="hotel1"
                                                        title="hotel1" class="Hotel__image" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 valign">
                                                <p class="Hotels__description">3 Avenue Georges Bassinet, 69260
                                                    Charbonnières-les-Bains, Frankrike</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-5">
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
                                                    <span class="Hotels-table__number">3</span>
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
                                                    <span class="Hotels-table__number">4</span>
                                                    <img src="src/assets/img/hotels/hotel4.png" alt="hotel4"
                                                        title="hotel4" class="Hotel__image" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 valign">
                                                <p class="Hotels__description">Adolfo Diaz Ambrona, 11, 06006 Badajoz,
                                                    Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-5">
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
                                            <div class="col-md-6 col-lg-7 valign d-flex justify-content-end">
                                                <a href="hotel.html" class="button" title="Go to Hotel Site">Go to Hotel Site</a>
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
                                                    <span class="Hotels-table__number">5</span>
                                                    <img src="src/assets/img/hotels/hotel5.png" alt="hotel5"
                                                        title="hotel5" class="Hotel__image" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 valign">
                                                <p class="Hotels__description">Adolfo Diaz Ambrona, 11, 06006 Badajoz,
                                                    Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-5">
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
            </section>
            <!-- END Hotels section -->

            <!-- BEGIN Review section -->
            <section class="Review section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <p class="text">
                                If you like to play casino while traveling with your partner, 
                                it may be difficult for you to decide which hotel on cabotare to choose. 
                                No problem using our list, you are guaranteed to find the one that fits. <br> 
                                There you can enjoy board games, slots, poker and games with great difficulty. 
                                You can also receive special bonuses if this is your first visit, 
                                or become a member of loyalty if you return several times.<br> 
                                Take a look at our list of the top 10 hotels in Europe to find out who is most likely to suit you.
                            </p>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="testimonial">
                                <div class="testimonial-slider">
                                    <div class="testimonial-slider__item">
                                        <div class="testimonial-slider__review">
                                            <div class="testimonial-slider__quote">
                                                <h3 class="testimonial-slider__text">The guys were able to quickly plunge into the specifics of our business, 
                                                    study the processes, propose improvements and ways to modernize the existing infrastructure.</h3>
                                                <img src="src/assets/img/icons/quotes.svg" alt="quotes"
                                                    class="testimonial-slider__icon" />
                                            </div>
                                            <div class="testimonial-slider__caret"></div>
                                        </div>
                                        <div class="testimonial-slider__details">
                                            <div class="testimonial-slider__user">
                                                <div class="testimonial-slider-avatar">
                                                    <img src="src/assets/img/avatars/avatar.png" alt="Svea-Dmitiros"
                                                        title="Svea Dmitiros"
                                                        class="testimonial-slider-avatar__image" />
                                                </div>
                                                <h6 class="testimonial-slider__name semibold">Svea Dmitiros</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-slider__item">
                                        <div class="testimonial-slider__review">
                                            <div class="testimonial-slider__quote">
                                                <h3 class="testimonial-slider__text">Good day. Thanks for the great work. 
                                                    I would like to come to you now with a bottle of champagne.</h3>
                                                <img src="src/assets/img/icons/quotes.svg" alt="quotes"
                                                    class="testimonial-slider__icon" />
                                            </div>
                                            <div class="testimonial-slider__caret"></div>
                                        </div>
                                        <div class="testimonial-slider__details">
                                            <div class="testimonial-slider__user">
                                                <div class="testimonial-slider-avatar">
                                                    <img src="src/assets/img/avatars/avatar2.jpg" alt="Leo-Gill"
                                                        title="Leo Gill" class="testimonial-slider-avatar__image" />
                                                </div>
                                                <h6 class="testimonial-slider__name semibold">Leo Gill</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-slider__item">
                                        <div class="testimonial-slider__review">
                                            <div class="testimonial-slider__quote">
                                                <h3 class="testimonial-slider__text">I want to say thank you very much for the excellent management 
                                                    and overall execution of the project. The site turned out to be excellent, and as always, 
                                                    it was very pleasant and comfortable to work with you! Thanks!</h3>
                                                <img src="src/assets/img/icons/quotes.svg" alt="quotes"
                                                    class="testimonial-slider__icon" />
                                            </div>
                                            <div class="testimonial-slider__caret"></div>
                                        </div>
                                        <div class="testimonial-slider__details">
                                            <div class="testimonial-slider__user">
                                                <div class="testimonial-slider-avatar">
                                                    <img src="src/assets/img/avatars/avatar3.jpg" alt="Miyah-Myles"
                                                        title="Miyah Myles" class="testimonial-slider-avatar__image" />
                                                </div>
                                                <h6 class="testimonial-slider__name semibold">Miyah Myles</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-slider__item">
                                        <div class="testimonial-slider__review">
                                            <div class="testimonial-slider__quote">
                                                <h3 class="testimonial-slider__text">Working with you is a pleasure! We have something to compare, 
                                                    because we literally escaped from the previous contractor!</h3>
                                                <img src="src/assets/img/icons/quotes.svg" alt="quotes"
                                                    class="testimonial-slider__icon" />
                                            </div>
                                            <div class="testimonial-slider__caret"></div>
                                        </div>
                                        <div class="testimonial-slider__details">
                                            <div class="testimonial-slider__user">
                                                <div class="testimonial-slider-avatar">
                                                    <img src="src/assets/img/avatars/avatar4.jpg" alt="Sasha-Ho"
                                                        title="Sasha Ho" class="testimonial-slider-avatar__image" />
                                                </div>
                                                <h6 class="testimonial-slider__name semibold">Sasha Ho</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Review section -->

        </article>
    </main>
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
                <a href="/" title="Home" class="burger-menu-list__link">Home</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="#" title="Top casino hotels" class="burger-menu-list__link">Top casino hotels</a>
            </li>
            <li class="burger-menu-list__item">
                <a href="/about.html" title="What are we doing?" class="burger-menu-list__link">What are we doing?</a>
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
                    <a href="/" title="Levien - Casino Resort and Hotel" class="Navbar-logo__link"></a>
                    <div class="Navbar-logo__info label label--gray">
                        <div><span class="semibold">Casino Hotel</span> for</div> Swedish people 
                    </div>
                </div>
                <ul class="Menu Menu--line">
                    <li class="Menu-item">
                        <a href="/" title="Home" class="Menu-item__link">
                            Home
                        </a>
                    </li>
                    <li class="Menu-item">
                        <a href="#" title="Top casino hotels" class="Menu-item__link">
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