<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- partial:parts/_head.html -->
    <meta charset="utf-8">
    <title>@lang('home-page.page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/libs.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link href="images/faviconSKB.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- partial -->
</head>
<body>
<div id="wrapper" class="wrapper">
    <!-- partial:parts/_header.html -->
    <header id="header" class="header">
        <div class="container">
            <!-- logo -->
            <div class="site-logo">
                <a href="" class="site-logo__link">
                    <picture>
                        <source media="(max-width: 767px)" srcset="images/logo-mob.png">
                        <source srcset="images/logo.png">
                        <img class="site-logo__img" src="images/logo.png" alt="logo"/>
                    </picture>
                </a>
            </div>
            <div class="header-mobile">
                <div class="header-nav">
                    <div class="nav-toggle"><span class="nav-toggle__link"></span><span class="nav-toggle__link"></span><span
                            class="nav-toggle__link"></span></div>
                    <div class="header-nav__container">
                        <div class="header-nav__menu">
                            <nav class="nav">
                                <ul class="nav__list">
                                    <li class="nav__item"><a href="#inicio" class="nav__link">@lang('home-page.inicio_menu_item')</a></li>
                                    <li class="nav__item"><a href="#rios" class="nav__link">@lang('home-page.rios_menu_item')</a></li>
                                    <li class="nav__item"><a href="#about" class="nav__link">@lang('home-page.nosotros_menu_item')</a></li>
                                    <li class="nav__item"><a href="#galeria" class="nav__link">@lang('home-page.galeria_menu_item')</a></li>
                                    <li class="nav__item"><a href="#brochure" class="nav__link">@lang('home-page.brochure_menu_item')</a></li>
                                    <li class="nav__item"><a href="#footer" class="nav__link">@lang('home-page.contacto_menu_item')</a></li>
                                    <li class="pad-right">
                                        <div class="dropdown">
                                            <a class="nav__link" id="flagButton">
                                                <img src="images/flags/{{ LaravelLocalization::getCurrentLocale() }}.png" alt="Flag" class="icon flag">
                                            </a>
                                            <div class="dropdown-flag-content" id="dropdown-flag-content-id">
                                                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="inline-flag">
                                                    <img src="images/flags/en.png" alt="" class="icon flag">
                                                </a>
                                                <a href="{{ LaravelLocalization::getLocalizedURL('es') }}">
                                                    <img src="images/flags/es.png" alt="" class="icon flag">
                                                </a>
                                                <a href="{{ LaravelLocalization::getLocalizedURL('pt') }}" class="flag-container">
                                                    <img src="images/flags/pt.png" alt="" class="icon flag">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- //nav__list -->
                            </nav><!-- //nav -->
                        </div>

                    </div>
                </div>
            </div>


        </div><!-- //container -->
    </header><!-- //site-header -->

    <!-- partial -->
    <main id="main" class="main">
        <section id="inicio" class="section main-section">
            <div class="container">
                <div class="row">
                    <div class="col col_7 col_desktop-12 order-desktop-2">
                        <div class="photo-list main-photo">
                            <div class="photo-item main-photo-item main-photo-item-1">
                                <div class="photo-img">
                                    <div class="photo-img__block">
                                        <img src="images/img/img1.png" alt="main-page-1">
                                    </div>
                                </div>
                                <div class="photo-info wysiwyg"></div>
                            </div>
                            <div class="photo-item main-photo-item main-photo-item-2">
                                <div class="photo-img">
                                    <div class="photo-img__block">
                                        <img src="images/img/img3.png" alt="main-page-2">
                                    </div>
                                </div>

                                <div class="photo-info wysiwyg"><p><!-- pie de foto polaroid home --></p></div>

                            </div>

                        </div>
                    </div>
                    <div class="col col_5 col_desktop-12 order-desktop-1">
                        <div class="main-container">
                            <h1 class="h1 main-title">@lang('home-page.main-text-paragraph-1') <br><span class="round-border round-border-1">@lang('home-page.main-text-paragraph-2') </span></h1>
                            <div class="wysiwyg main-description">@lang('home-page.main-text-paragraph-3')</div>
                            <button type="button" class="btn popup-init">@lang('home-page.contact-button-1')</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="dignity-item col col_4 col_mob-12">
                        <div class="dignity-block">
                            <div class="dignity-title">
                                <h3 class="h3 title">@lang('home-page.h3-title') </h3>
                                <div class="dignity-image">
                                    <img src="images/iconosTarjetas/expPerson.svg" alt="present-1">
                                </div>
                            </div>
                            <div class="dignity-description wysiwyg">
                                <p>@lang('home-page.p-1')</p>
                            </div>
                        </div>
                    </div>
                    <div class="dignity-item col col_4 col_mob-12">
                        <div class="dignity-block">
                            <div class="dignity-title">
                                <h3 class="h3 title">@lang('home-page.h3-title2')</h3>
                                <div class="dignity-image">
                                    <img src="images/iconosTarjetas/destiExoti.svg" alt="present-2">
                                </div>
                            </div>
                            <div class="dignity-description wysiwyg">
                                <p>@lang('home-page.p-2')</p>
                            </div>
                        </div>
                    </div>
                    <div class="dignity-item col col_4 col_mob-12">
                        <div class="dignity-block">
                            <div class="dignity-title">
                                <h3 class="h3 title">@lang('home-page.h3-title3')</h3>
                                <div class="dignity-image">
                                    <img src="images/iconosTarjetas/comodSegurd.svg" alt="present-3">
                                </div>
                            </div>
                            <div class="dignity-description wysiwyg">
                                <p>@lang('home-page.p-3')</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- //content -->
        </section>
        <section id="rios" class="section">
            <div class="container">
                <div class="row">
                    <div class="col col_6 col_desktop-12">
                        <div class="photo-list emotional-photo">
                            <div class="photo-item emotional-photo__item emotional-photo__item-1">
                                <div class="photo-img">
                                    <div class="photo-img__block">
                                        <img src="images/imgBG/bg inicio.jpg" alt="main-page-3">
                                    </div>
                                </div>
                                <div class="photo-info wysiwyg"></div>
                            </div>
                            <div class="photo-item emotional-photo__item emotional-photo__item-2">
                                <div class="photo-img">
                                    <div class="photo-img__block">
                                        <img src="images/imgBG/bg inicio2.jpg" alt="main-page-4">
                                    </div>
                                </div>
                                <div class="photo-info wysiwyg"></div>
                            </div>
                            <div class="photo-item emotional-photo__item emotional-photo__item-3">
                                <div class="photo-img">
                                    <div class="photo-img__block">
                                        <img src="images/img/img4.png" alt="main-page-5">
                                    </div>
                                </div>
                                <div class="photo-info wysiwyg"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col col_6 col_desktop-12">
                        <h2 class="h2 emotional-title">@lang('home-page.h2-1-title-river')</h2>
                        <div class="emotional-list">
                            <div class="emotional-item">
                                <div class="emotional-block">
                                    <div class="emotional-icon">
                                        <img src="images/iconos/icono ubi.svg" alt="present-6">
                                    </div>
                                    <div class="emotional-info">
                                        <h3 class="h3 emotional-subtitle">@lang('home-page.h3-1-river')</h3>
                                        <div class="emotional-description wysiwyg">
                                            <p>@lang('home-page.p-1-river')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="emotional-item">
                                <div class="emotional-block">
                                    <div class="emotional-icon">
                                        <img src="images/iconos/icono ubi.svg" alt="present-6">
                                    </div>
                                    <div class="emotional-info">
                                        <h3 class="h3 emotional-subtitle">@lang('home-page.h3-2-river')</h3>
                                        <div class="emotional-description wysiwyg">
                                            <p>@lang('home-page.p-2-river')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="emotional-item">
                                <div class="emotional-block">
                                    <div class="emotional-icon">
                                        <img src="images/iconos/icono ubi.svg" alt="present-6">
                                    </div>
                                    <div class="emotional-info">
                                        <h3 class="h3 emotional-subtitle">@lang('home-page.h3-3-river')</h3>
                                        <div class="emotional-description wysiwyg">
                                            <p>@lang('home-page.p-3-river') </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col col_6 col_desktop-12">
                        <div class="description-container">
                            <div class="wysiwyg">
                                <h3>@lang('home-page.h3-about-title')</h3>
                                <p>@lang('home-page.p-about-1') </p>
                                <p>@lang('home-page.p-about-2')</p>
                                <ol>

                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col col_1 col_desktop-12"></div>
                    <div class="col col_5 col_desktop-12">
                        <div class="description-photo">
                            <div class="description-photo-item">
                                <div class="photo-item description-photo-item-1">
                                    <div class="photo-img">
                                        <!-- <div class="photo-img__block"> esta clase poronga es la que hace el efecto polaroid a las imagenes -->
                                        <img src="images/Logo/logoPNG.png" alt="photo-block-1">
                                    </div>
                                </div>
                                <div class="photo-info wysiwyg">
                                    <p><!-- SI DESCOMENTAMOS LA CLASE PETE ESA ACA SE PONE EL PIE DE FOTO  --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="galeria" class="">
            <div class="container">
                <div class="row">
                    <div class="col col_3 col_desktop-12"></div>
                    <div class="col col_6 col_desktop-12">
                        <div class="post-description text-center text-mob-left">
                            <h2 class="h2 title">@lang('home-page.h2-galery-title') <span class="round-border round-border-2">@lang('home-page.h2-galery-title-2')</span></h2>
                            <div class="wysiwyg">
                                <p>@lang('home-page.p-galery-sub-title')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col_3 col_desktop-12"></div>
                </div>
                @include('partials.post_slider')
            </div>
        </section>
        <section class="section section_secondary-bg">
            <div class="container">
                <div class="row">
                    <div class="col col_2 col_desktop-12"></div>
                    <div class="col col_8 col_desktop-12">
                        <div class="subscript-title text-center" id="brochure">
                            <div class="subscript-icon">
                                <svg class="icon" width="109" height="72" viewBox="0 0 109 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97237 5.62128C28.4725 27.6213 47.9725 35.6213 52.9725 36.1213C57.9725 36.6213 95.9725 17.1213 104.472 5.62128M7.97237 5.62128C12.9726 1.33522 99.4722 1.33522 104.472 5.62128M7.97237 5.62128C2.97242 10.6213 4.88435 48.6213 6.47253 57.6213C8.23717 67.6213 16.4726 67.0762 21.4725 67.1213C39.9725 67.2879 80.5724 67.5213 90.9724 67.1213C101.372 66.7213 103.472 53.6213 103.472 53.6213C103.472 53.6213 108.472 12.1213 104.472 5.62128" stroke="#7F74FF" stroke-width="3"/>
                                    <path opacity="0.2" d="M9.29177 8.33612C29.7919 30.3362 49.2919 38.3362 54.2919 38.8362C59.2919 39.3362 97.2919 19.8362 105.792 8.33612M9.29177 8.33612C14.292 4.05007 100.792 4.05007 105.792 8.33612M9.29177 8.33612C7.29174 26.3362 7.7918 49.8362 9.29176 58.3362C11.0564 68.3362 18.7919 69.7911 23.7918 69.8361C42.2918 70.0028 81.8917 70.2361 92.2917 69.8361C102.692 69.4361 103.792 59.3362 103.792 59.3362C103.792 59.3362 108.292 31.8362 105.792 8.33612" stroke="#7F74FF" stroke-width="3"/>
                                    <path opacity="0.3" d="M14.9727 60.1216C14.9727 60.1216 16.4727 62.1216 21.4727 62.6216C26.4727 63.1216 63.4727 62.6216 63.4727 62.6216" stroke="#7F74FF" stroke-linecap="round"/>
                                    <path opacity="0.3" d="M2.47241 9.62158C1.63906 15.4549 0.272362 30.4216 1.47241 43.6216" stroke="#7F74FF" stroke-linecap="round"/>
                                </svg>
                                <span class="sale"><span></span></span>
                            </div>
                            <h3 class="h3 title">@lang('home-page.h3-brochure-mail')</h3>
                        </div>
                        <form id="subscription-form-post" class="form subscription-form" name="subscription_form_post" method="post">
                            <div class="form-field ">
                                <div class="form-group">
                                    <label class="label-wrap" for="subscription_email">
                                        <input id="subscription_email" type="email" placeholder='@lang('home-page.your-email-1')' name="subscription_email" required>
                                    </label>
                                    <button type="submit" class="btn btn_link icon-btn form-group-btn">
                                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12.2828 2.76273C12.4781 2.56747 12.7947 2.56747 12.9899 2.76273L21.9192 11.692C22.1145 11.8873 22.1145 12.2039 21.9192 12.3991L12.9899 21.3284C12.7947 21.5237 12.4781 21.5237 12.2828 21.3284L11.7172 20.7627C11.5219 20.5675 11.5219 20.2509 11.7172 20.0556L17.9737 13.7991C18.2886 13.4841 18.0656 12.9456 17.6201 12.9456H3.5C3.22386 12.9456 3 12.7217 3 12.4456V11.6456C3 11.3694 3.22386 11.1456 3.5 11.1456H17.6201C18.0656 11.1456 18.2886 10.607 17.9737 10.292L11.7172 4.03553C11.5219 3.84026 11.5219 3.52368 11.7172 3.32842L12.2828 2.76273Z"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9419 1.85355C11.1372 1.65829 11.4538 1.65829 11.649 1.85355L20.7374 10.9419C20.9327 11.1372 20.9327 11.4538 20.7374 11.649L11.649 20.7374C11.4538 20.9327 11.1372 20.9327 10.9419 20.7374L10.0581 19.8536C9.8628 19.6583 9.86279 19.3417 10.0581 19.1464L15.9305 13.274C16.2454 12.9591 16.0224 12.4205 15.5769 12.4205H2C1.72386 12.4205 1.5 12.1966 1.5 11.9205V10.6705C1.5 10.3944 1.72386 10.1705 2 10.1705H15.5769C16.0224 10.1705 16.2454 9.63192 15.9305 9.31694L10.0581 3.44454C9.86279 3.24928 9.8628 2.9327 10.0581 2.73744L10.9419 1.85355Z" /> </svg>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col col_2 col_desktop-12"></div>
                </div>
            </div>
        </section>
    </main><!-- //middle -->
    <!-- partial:parts/_footer.html -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top__container">
                    <div class="row align-center">
                        <div class="col col_3 col_desktop-12">
                            <div class="row">
                                <div class="col col_12 col_desktop-3 col_mob-2 col_mob-p-12"></div>
                                <div class="col col_12 col_desktop-6 col_mob-8 col_mob-p-12">
                                    <div class="footer-logo text-desktop-center">
                                        <a href="index.html" class="site-logo site-logo__link">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="images/logo.png">
                                                <source srcset="images/logo.png">
                                                <img class="site-logo__img" src="images/logo.png" alt="logo"/>
                                            </picture>
                                        </a>

                                    </div>
                                </div>
                                <div class="col col_12 col_desktop-3 col_mob-2 col_mob-p-12"></div>
                            </div>
                        </div>

                        <div class="col col_6 col_desktop-6 col_mob-12">
                            <div class="row">
                                <div class="col col_1 col_desktop-12"></div>
                                <div class="col col_10 col_desktop-12">
                                    <div class="subscript">
                                        <h3 class="subscript-title h3 text-center text-desktop-left text-mob-center">@lang('home-page.h3-contact-mail')</h3>
                                        <form id="subscription-form-footer" class="form subscription-form" name="subscription_form" method="post">
                                            <div class="form-field ">
                                                <div class="form-group">
                                                    <label class="label-wrap label-icon label-icon-position-left" for="subscription_email-footer">
                                                        <input id="subscription_email-footer" type="email" placeholder='@lang('home-page.your-email-2')' name="subscription_email-footer" required>
                                                        <svg class="icon icon-label" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M22.6426 5.35515C22.8288 5.40444 23.148 5.49817 23.3842 5.70617L23.4859 5.79581L23.5554 5.91174C23.7557 6.24636 23.8466 6.68802 23.8995 7.07642C23.9569 7.49777 23.9856 7.99452 23.9957 8.52409C24.0158 9.58546 23.9622 10.8509 23.8836 12.0546C23.8049 13.2617 23.7 14.423 23.615 15.2814C23.5725 15.7109 23.5348 16.0655 23.5078 16.313C23.4942 16.4367 23.4833 16.5338 23.4758 16.6002L23.4671 16.6762L23.4648 16.696L23.4641 16.7026L23.4621 16.7193L23.4595 16.7361L23.4591 16.7385L23.4585 16.7425L23.4566 16.7537L23.4506 16.7879C23.4455 16.8158 23.4383 16.8538 23.4284 16.9005C23.4088 16.9936 23.3787 17.1224 23.3354 17.2755C23.2495 17.5785 23.107 17.9924 22.88 18.4174C22.4344 19.2517 21.5626 20.2917 20.0303 20.3522C17.8414 20.4387 9.37518 20.3883 5.54393 20.3529C5.49595 20.3524 5.44274 20.3525 5.385 20.3526C4.90856 20.3531 4.12343 20.354 3.41524 20.0736C2.99084 19.9055 2.57573 19.6341 2.23885 19.2067C1.9045 18.7826 1.68126 18.2483 1.57038 17.6026C1.3935 16.5726 1.21124 14.0086 1.20046 11.5889C1.19504 10.3732 1.23256 9.16201 1.3414 8.17456C1.39564 7.68243 1.47001 7.22266 1.57373 6.83597C1.66761 6.48595 1.81988 6.05524 2.11458 5.7524L2.13798 5.72836L2.16317 5.70617C2.39932 5.49817 2.71858 5.40444 2.90468 5.35515C3.14034 5.29274 3.42473 5.24051 3.73701 5.19532C4.36491 5.10446 5.18391 5.03117 6.11749 4.97336C7.98921 4.85746 10.3855 4.80005 12.7737 4.80005C15.1618 4.80005 17.5581 4.85746 19.4298 4.97336C20.3634 5.03117 21.1824 5.10446 21.8103 5.19532C22.1226 5.24051 22.407 5.29274 22.6426 5.35515ZM21.7244 16.4816L21.7246 16.4797L21.7329 16.4069C21.7402 16.3427 21.7508 16.248 21.7641 16.1268C21.7906 15.8842 21.8276 15.5355 21.8695 15.1126C21.9534 14.2659 22.0563 13.1249 22.1334 11.943C22.2108 10.7576 22.261 9.54729 22.2422 8.55662C22.2397 8.42954 22.2362 8.30725 22.2315 8.19011C21.8677 8.50261 21.4673 8.8145 21.0506 9.11887C20.0127 9.87694 18.7989 10.6417 17.6172 11.3201C16.4353 11.9986 15.2702 12.5994 14.3257 13.027C13.8548 13.2401 13.4256 13.4162 13.0694 13.5373C12.8918 13.5977 12.7189 13.6491 12.5598 13.6839C12.4189 13.7148 12.2158 13.7498 12.0076 13.7284C11.6166 13.6882 11.0725 13.521 10.4552 13.262C9.81697 12.9943 9.03995 12.6027 8.16797 12.0678C6.69922 11.167 4.94874 9.85224 3.12734 8.02056C3.11231 8.12828 3.09816 8.24226 3.08493 8.36227C2.98634 9.2567 2.949 10.3945 2.95429 11.5812C2.96491 13.9663 3.14634 16.4206 3.2995 17.3126C3.37198 17.7346 3.50019 17.9865 3.62235 18.1414C3.74197 18.2932 3.88842 18.3936 4.0676 18.4646C4.44103 18.6125 4.87277 18.6152 5.39179 18.6184C5.44698 18.6187 5.50316 18.6191 5.56036 18.6196C9.41824 18.6553 17.8265 18.7046 19.9602 18.6203C20.589 18.5954 21.0161 18.194 21.329 17.6082C21.4813 17.3231 21.583 17.0323 21.6465 16.8081C21.6778 16.6976 21.6987 16.6072 21.7114 16.547C21.7177 16.5171 21.722 16.4947 21.7244 16.4816ZM4.42674 6.85428C6.13107 8.56041 7.75364 9.7737 9.09281 10.5951C9.89633 11.0879 10.5935 11.437 11.1404 11.6665C11.6544 11.8821 11.9917 11.9733 12.1463 11.9985C12.1552 11.9969 12.1667 11.9947 12.1808 11.9916C12.2524 11.9759 12.3574 11.9464 12.4987 11.8984C12.7801 11.8026 13.1521 11.6517 13.5953 11.4511C14.4789 11.0512 15.5932 10.4775 16.7363 9.8213C17.8795 9.16502 19.036 8.43499 20.0082 7.72493C20.4261 7.41962 20.7974 7.12699 21.1138 6.85349C20.618 6.79651 20.0121 6.74615 19.3202 6.7033C17.4967 6.59039 15.1392 6.53338 12.7737 6.53338C10.4081 6.53338 8.05064 6.59039 6.22717 6.7033C5.53206 6.74634 4.92374 6.79697 4.42674 6.85428Z"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4427 4.1552C21.6288 4.20449 21.9481 4.29822 22.1842 4.50622L22.286 4.59585L22.3554 4.71179C22.5558 5.0464 22.6466 5.48807 22.6996 5.87647C22.757 6.29782 22.7857 6.79457 22.7957 7.32414C22.8159 8.38551 22.7622 9.65099 22.6837 10.8546C22.6049 12.0618 22.5001 13.2231 22.4151 14.0815C22.3725 14.511 22.3349 14.8655 22.3078 15.113C22.2943 15.2368 22.2834 15.3339 22.2759 15.4002L22.2672 15.4762L22.2649 15.496L22.2641 15.5026C22.2641 15.5027 22.264 15.5032 21.3929 15.4034C22.2596 15.5355 22.2596 15.5358 22.2595 15.5361L22.2592 15.5385L22.2585 15.5426L22.2567 15.5537L22.2507 15.5879C22.2456 15.6159 22.2383 15.6538 22.2285 15.7005C22.2088 15.7937 22.1788 15.9225 22.1354 16.0756C22.0496 16.3786 21.9071 16.7924 21.6801 17.2174C21.2344 18.0517 20.3627 19.0917 18.8303 19.1523C16.6414 19.2388 8.17523 19.1884 4.34398 19.1529C4.296 19.1525 4.24279 19.1525 4.18505 19.1526C3.70861 19.1532 2.92348 19.1541 2.21529 18.8736C1.79089 18.7056 1.37578 18.4341 1.03889 18.0068C0.704546 17.5827 0.481311 17.0483 0.370431 16.4026C0.193551 15.3726 0.0112877 12.8086 0.000505669 10.3889C-0.00491139 9.17323 0.0326081 7.96205 0.141445 6.97461C0.195689 6.48247 0.270057 6.02271 0.37378 5.63602C0.467662 5.286 0.619927 4.85529 0.914633 4.55245L0.938028 4.52841L0.963223 4.50622C1.19937 4.29822 1.51863 4.20449 1.70473 4.1552C1.94039 4.09279 2.22478 4.04056 2.53706 3.99537C3.16496 3.90451 3.98396 3.83122 4.91754 3.77341C6.78926 3.6575 9.18556 3.6001 11.5737 3.6001C13.9619 3.6001 16.3582 3.6575 18.2299 3.77341C19.1635 3.83122 19.9825 3.90451 20.6104 3.99537C20.9227 4.04056 21.207 4.09279 21.4427 4.1552ZM21.3929 15.4034L22.2595 15.5361L22.2621 15.5194L22.2641 15.5026L21.3929 15.4034ZM20.5244 15.2816L20.5246 15.2797L20.533 15.2069C20.5402 15.1428 20.5509 15.0481 20.5641 14.9268C20.5906 14.6843 20.6277 14.3356 20.6696 13.9126C20.7534 13.066 20.8564 11.925 20.9335 10.7431C21.0108 9.55766 21.061 8.34734 21.0422 7.35666C21.0398 7.22959 21.0363 7.1073 21.0316 6.99016C20.6678 7.30266 20.2673 7.61455 19.8506 7.91892C18.8128 8.67699 17.599 9.44179 16.4173 10.1202C15.2354 10.7986 14.0703 11.3995 13.1257 11.827C12.6549 12.0402 12.2257 12.2162 11.8695 12.3374C11.6919 12.3978 11.5189 12.4492 11.3599 12.484C11.219 12.5148 11.0159 12.5498 10.8076 12.5284C10.4166 12.4882 9.87256 12.321 9.25526 12.0621C8.61702 11.7944 7.83999 11.4027 6.96802 10.8679C5.49927 9.96702 3.74879 8.65229 1.92739 6.8206C1.91236 6.92833 1.89821 7.04231 1.88498 7.16232C1.78639 8.05675 1.74905 9.19458 1.75434 10.3813C1.76496 12.7664 1.94639 15.2207 2.09955 16.1126C2.17203 16.5347 2.30024 16.7865 2.4224 16.9415C2.54202 17.0932 2.68846 17.1937 2.86765 17.2647C3.24108 17.4125 3.67282 17.4152 4.19184 17.4184C4.24703 17.4188 4.30321 17.4191 4.36041 17.4197C8.21828 17.4554 16.6266 17.5046 18.7602 17.4203C19.3891 17.3955 19.8162 16.994 20.1291 16.4082C20.2813 16.1232 20.383 15.8323 20.4465 15.6082C20.4779 15.4977 20.4988 15.4073 20.5115 15.3471C20.5178 15.3171 20.522 15.2947 20.5244 15.2816ZM3.22679 5.65433C4.93112 7.36046 6.55369 8.57375 7.89286 9.39514C8.69638 9.88799 9.39354 10.2371 9.94049 10.4665C10.4545 10.6821 10.7917 10.7734 10.9464 10.7986C10.9553 10.7969 10.9667 10.7947 10.9808 10.7916C11.0525 10.776 11.1575 10.7464 11.2987 10.6984C11.5801 10.6027 11.9522 10.4518 12.3954 10.2511C13.2789 9.85121 14.3933 9.27754 15.5363 8.62135C16.6795 7.96507 17.8361 7.23504 18.8082 6.52498C19.2262 6.21967 19.5974 5.92704 19.9138 5.65354C19.4181 5.59656 18.8121 5.5462 18.1202 5.50335C16.2967 5.39044 13.9393 5.33343 11.5737 5.33343C9.20813 5.33343 6.85069 5.39044 5.02722 5.50335C4.33211 5.54639 3.72378 5.59702 3.22679 5.65433Z"/> </svg>
                                                    </label>
                                                    <button type="submit" class="btn btn_link icon-btn form-group-btn">
                                                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12.2828 2.76273C12.4781 2.56747 12.7947 2.56747 12.9899 2.76273L21.9192 11.692C22.1145 11.8873 22.1145 12.2039 21.9192 12.3991L12.9899 21.3284C12.7947 21.5237 12.4781 21.5237 12.2828 21.3284L11.7172 20.7627C11.5219 20.5675 11.5219 20.2509 11.7172 20.0556L17.9737 13.7991C18.2886 13.4841 18.0656 12.9456 17.6201 12.9456H3.5C3.22386 12.9456 3 12.7217 3 12.4456V11.6456C3 11.3694 3.22386 11.1456 3.5 11.1456H17.6201C18.0656 11.1456 18.2886 10.607 17.9737 10.292L11.7172 4.03553C11.5219 3.84026 11.5219 3.52368 11.7172 3.32842L12.2828 2.76273Z"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9419 1.85355C11.1372 1.65829 11.4538 1.65829 11.649 1.85355L20.7374 10.9419C20.9327 11.1372 20.9327 11.4538 20.7374 11.649L11.649 20.7374C11.4538 20.9327 11.1372 20.9327 10.9419 20.7374L10.0581 19.8536C9.8628 19.6583 9.86279 19.3417 10.0581 19.1464L15.9305 13.274C16.2454 12.9591 16.0224 12.4205 15.5769 12.4205H2C1.72386 12.4205 1.5 12.1966 1.5 11.9205V10.6705C1.5 10.3944 1.72386 10.1705 2 10.1705H15.5769C16.0224 10.1705 16.2454 9.63192 15.9305 9.31694L10.0581 3.44454C9.86279 3.24928 9.8628 2.9327 10.0581 2.73744L10.9419 1.85355Z" /> </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col col_1 col_desktop-12"></div>
                            </div>


                        </div>
                        <div class="col col_3 col_desktop-6 col_mob-12">
                            <ul class="contact-list icon-list">

                                <li class="contact-item icon-text icon-position-right">

                                    <a href="https://wa.me/+5492964548954" target="_blank">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 32 32">
                                            <path fill-rule="evenodd" d="M 24.503906 7.503906 C 22.246094 5.246094 19.246094 4 16.050781 4 C 9.464844 4 4.101563 9.359375 4.101563 15.945313 C 4.097656 18.050781 4.648438 20.105469 5.695313 21.917969 L 4 28.109375 L 10.335938 26.445313 C 12.078125 27.398438 14.046875 27.898438 16.046875 27.902344 L 16.050781 27.902344 C 22.636719 27.902344 27.996094 22.542969 28 15.953125 C 28 12.761719 26.757813 9.761719 24.503906 7.503906 Z M 16.050781 25.882813 L 16.046875 25.882813 C 14.265625 25.882813 12.515625 25.402344 10.992188 24.5 L 10.628906 24.285156 L 6.867188 25.269531 L 7.871094 21.605469 L 7.636719 21.230469 C 6.640625 19.648438 6.117188 17.820313 6.117188 15.945313 C 6.117188 10.472656 10.574219 6.019531 16.054688 6.019531 C 18.707031 6.019531 21.199219 7.054688 23.074219 8.929688 C 24.949219 10.808594 25.980469 13.300781 25.980469 15.953125 C 25.980469 21.429688 21.523438 25.882813 16.050781 25.882813 Z M 21.496094 18.445313 C 21.199219 18.296875 19.730469 17.574219 19.457031 17.476563 C 19.183594 17.375 18.984375 17.328125 18.785156 17.625 C 18.585938 17.925781 18.015625 18.597656 17.839844 18.796875 C 17.667969 18.992188 17.492188 19.019531 17.195313 18.871094 C 16.894531 18.722656 15.933594 18.40625 14.792969 17.386719 C 13.90625 16.597656 13.304688 15.617188 13.132813 15.320313 C 12.957031 15.019531 13.113281 14.859375 13.261719 14.710938 C 13.398438 14.578125 13.5625 14.363281 13.710938 14.1875 C 13.859375 14.015625 13.910156 13.890625 14.011719 13.691406 C 14.109375 13.492188 14.058594 13.316406 13.984375 13.167969 C 13.910156 13.019531 13.3125 11.546875 13.0625 10.949219 C 12.820313 10.367188 12.574219 10.449219 12.390625 10.4375 C 12.21875 10.429688 12.019531 10.429688 11.820313 10.429688 C 11.621094 10.429688 11.296875 10.503906 11.023438 10.804688 C 10.75 11.101563 9.980469 11.824219 9.980469 13.292969 C 9.980469 14.761719 11.050781 16.183594 11.199219 16.382813 C 11.347656 16.578125 13.304688 19.59375 16.300781 20.886719 C 17.011719 21.195313 17.566406 21.378906 18 21.515625 C 18.714844 21.742188 19.367188 21.710938 19.882813 21.636719 C 20.457031 21.550781 21.648438 20.914063 21.898438 20.214844 C 22.144531 19.519531 22.144531 18.921875 22.070313 18.796875 C 21.996094 18.671875 21.796875 18.597656 21.496094 18.445313 Z"></path>
                                        </svg>
                                    </a>
                                </li>



                                <li class="contact-item icon-text icon-position-right">

                                    <a href="https://www.instagram.com/silverkingbrazil/" target="_blank">
                                        <svg class="icon contact-icon"  xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 32 32">
                                            <path d="M 16 3.9980469 C 13.080861 3.9980469 10.161004 4.3447693 7.2480469 5.0371094 C 6.1507011 5.2968904 5.2962649 6.1524002 5.0371094 7.25 C 3.6528787 13.075289 3.652579 18.92667 5.0371094 24.751953 C 5.2967541 25.848723 6.1512769 26.703246 7.2480469 26.962891 C 13.073961 28.347571 18.926039 28.347571 24.751953 26.962891 C 25.848723 26.703246 26.703246 25.848723 26.962891 24.751953 L 26.962891 24.75 C 28.346971 18.925342 28.346971 13.074658 26.962891 7.25 L 26.962891 7.2480469 C 26.703246 6.1512738 25.848723 5.2967541 24.751953 5.0371094 C 21.838996 4.3447693 18.919139 3.9980469 16 3.9980469 z M 16 5.9960938 C 18.760861 5.9960936 21.522019 6.324762 24.289062 6.9824219 L 24.291016 6.9824219 C 24.63284 7.0631309 24.93687 7.3671602 25.017578 7.7089844 L 25.017578 7.7109375 C 26.332898 13.245024 26.332898 18.754976 25.017578 24.289062 L 25.017578 24.291016 C 24.936868 24.63284 24.63284 24.93687 24.291016 25.017578 L 24.289062 25.017578 C 18.754976 26.332898 13.245024 26.332898 7.7109375 25.017578 L 7.7089844 25.017578 C 7.3671571 24.936827 7.0631304 24.63284 6.9824219 24.291016 L 6.9824219 24.289062 C 5.6671021 18.754977 5.6671021 13.245024 6.9824219 7.7109375 L 6.9824219 7.7089844 C 7.0631304 7.3672031 7.3671602 7.0631304 7.7089844 6.9824219 L 7.7109375 6.9824219 C 10.477984 6.324762 13.239139 5.9960938 16 5.9960938 z M 22.5 8 A 1.5 1.5 0 0 0 22.5 11 A 1.5 1.5 0 0 0 22.5 8 z M 16 10 C 14.083334 10 12.518559 10.754756 11.501953 11.898438 C 10.485347 13.042118 10 14.527778 10 16 C 10 17.472222 10.485347 18.957881 11.501953 20.101562 C 12.518559 21.245244 14.083334 22 16 22 C 19.301865 22 22 19.301863 22 16 C 22 12.698137 19.301865 10 16 10 z M 16 12 C 18.220986 12 20 13.779015 20 16 C 20 18.220985 18.220986 20 16 20 C 14.583334 20 13.648107 19.504756 12.998047 18.773438 C 12.347987 18.042119 12 17.027778 12 16 C 12 14.972222 12.347987 13.957881 12.998047 13.226562 C 13.648107 12.495245 14.583334 12 16 12 z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <span class="copyright text-center">@lang('home-page.footer') </span>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script><!-- jQuery -->
    <script src="js/libs.min.js"></script><!-- скрипты библиотек -->
    <script src="js/main.js"></script><!-- кастомные скрипты -->
    <!-- partial -->
    <!-- partial:parts/_popups.html -->
    <div class="popup-wrap">


        <div class="popup location-popup">
            <div class="container">
                <div class="popup-remove">
                    <svg class="popup-remove__ico" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M6.07172 3.10665C5.87646 2.91139 5.55988 2.91139 5.36462 3.10665L3.9504 4.52087C3.75514 4.71613 3.75514 5.03271 3.9504 5.22797L11.1499 12.4275L3.9516 19.6257C3.75634 19.821 3.75634 20.1376 3.95161 20.3328L5.36582 21.7471C5.56108 21.9423 5.87766 21.9423 6.07292 21.7471L13.2712 14.5488L20.2139 21.4914C20.4091 21.6867 20.7257 21.6867 20.921 21.4914L22.3352 20.0772C22.5304 19.882 22.5304 19.5654 22.3352 19.3701L15.3925 12.4275L22.3364 5.48361C22.5316 5.28834 22.5316 4.97176 22.3364 4.7765L20.9222 3.36228C20.7269 3.16702 20.4103 3.16702 20.2151 3.36228L13.2712 10.3061L6.07172 3.10665Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.07148 3.10665C4.87622 2.91139 4.55963 2.91139 4.36437 3.10665L2.95016 4.52087C2.7549 4.71613 2.7549 5.03271 2.95016 5.22797L10.1496 12.4275L2.95136 19.6257C2.7561 19.821 2.7561 20.1376 2.95136 20.3328L4.36557 21.7471C4.56084 21.9423 4.87742 21.9423 5.07268 21.7471L12.271 14.5488L19.2136 21.4914C19.4089 21.6867 19.7255 21.6867 19.9207 21.4914L21.3349 20.0772C21.5302 19.882 21.5302 19.5654 21.3349 19.3701L14.3923 12.4275L21.3361 5.48361C21.5314 5.28834 21.5314 4.97176 21.3361 4.7765L19.9219 3.36228C19.7267 3.16702 19.4101 3.16702 19.2148 3.36228L12.271 10.3061L5.07148 3.10665Z"/>
                    </svg>

                </div>
                <div class="popup-content">
                    <div class="row">
                        <div class="col col_5 col_middle-desktop-12">
                            <div class="subscription-icon">
                                <svg width="592" height="231" viewBox="0 0 592 231" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="296" cy="211.5" rx="296" ry="19.5" fill="url(#paint0_radial_815_2)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M190.4 104.105C186.865 104.105 184 106.971 184 110.505V120.105C184 123.639 186.865 126.504 190.4 126.504H192.533V202.233C192.533 205.768 195.398 208.633 198.933 208.633H319.459C322.994 208.633 325.859 205.768 325.859 202.233V126.504H327.992C331.527 126.504 334.392 123.639 334.392 120.105V110.505C334.392 106.971 331.527 104.105 327.992 104.105H190.4Z" fill="white"/>
                                    <path opacity="0.15" d="M323.726 126.504L323.726 137.17L194.666 137.17L194.666 126.504L323.726 126.504Z" fill="#232938"/>
                                    <path opacity="0.15" d="M323.726 202.233L323.726 206.5L194.666 206.5L194.666 202.233L323.726 202.233Z" fill="#232938"/>
                                    <path d="M242.664 124.371H276.796V208.633H242.664V124.371Z" fill="#CFE2FF"/>
                                    <path opacity="0.8" d="M244.796 126.504H249.063V206.5H244.796V126.504Z" fill="white"/>
                                    <path d="M237.864 61.441C250.663 58.8812 253.199 81.5681 254.977 95.2563C256.632 94.967 258.559 94.8671 260.796 95.0392C260.618 81.7066 265.062 55.8947 284.261 59.3078C291.727 60.9077 292.794 68.374 297.594 71.0405C302.393 73.707 310.393 82.7732 302.927 92.3727C296.954 100.052 281.595 103.039 274.662 103.572L269.862 101.972L245.863 102.505C245.33 103.928 242.877 106.345 237.33 104.639C236.05 103.785 226.131 100.017 221.331 98.239C217.243 97.1724 212.692 97.3857 210.132 89.7062C206.932 80.1067 216.532 75.307 220.798 74.2403C224.211 73.3871 227.553 69.6184 228.798 67.8407C231.357 62.721 235.908 61.441 237.864 61.441Z" fill="#CFE2FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M272.505 65.2942C277.307 61.2199 282.855 61.6784 286.872 63.6868C287.399 63.9503 287.612 64.5909 287.349 65.1178C287.085 65.6447 286.445 65.8583 285.918 65.5948C282.468 63.8702 277.883 63.5288 273.886 66.9208C269.814 70.3752 266.119 77.8831 265.06 92.45C265.017 93.0375 264.506 93.4792 263.919 93.4364C263.331 93.3937 262.889 92.8828 262.932 92.2953C264.006 77.5305 267.777 69.306 272.505 65.2942ZM213.332 81.5357C213.913 81.6325 213.948 82.3675 213.851 82.9485C212.265 85.8021 212.287 87.7362 214.455 90.4229C216.697 93.2003 221.364 96.0576 230.7 98.816L230.718 98.8212L230.735 98.827C232.864 99.5365 237.838 101.3 240.474 102.618C241.001 102.881 241.215 103.522 240.951 104.049C240.688 104.576 240.047 104.789 239.52 104.526C237.044 103.288 232.224 101.573 230.078 100.857C220.653 98.0701 215.459 95.0628 212.795 91.7626C210.057 88.3697 210.132 85.2688 211.747 82.5978C211.844 82.0168 212.751 81.4389 213.332 81.5357Z" fill="white"/>
                                    <path d="M241.597 108.372C241.597 104.838 244.462 101.972 247.997 101.972H271.462C274.997 101.972 277.862 104.838 277.862 108.372V122.238C277.862 125.772 274.997 128.637 271.462 128.637H247.997C244.462 128.637 241.597 125.772 241.597 122.238V108.372Z" fill="#CFE2FF"/>
                                    <path opacity="0.8" d="M247.997 104.105V104.105C245.64 104.105 243.73 106.016 243.73 108.372V122.238C243.73 124.594 245.64 126.504 247.997 126.504V126.504V104.105Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M236.516 104.105H243.226C243.717 103.558 244.3 103.095 244.951 102.742C245.612 100.343 248.122 96.7979 253.786 95.477C252.834 88.7271 251.813 79.2404 248.508 71.613C246.771 67.6038 246.866 67.3934 244.546 65.1536C242.252 62.9375 239.765 61.9351 237.006 62.4868L236.903 62.5076L236.797 62.5076C235.177 62.5076 231.035 63.6172 228.685 68.3176L228.65 68.3879L228.605 68.4523C227.94 69.4025 226.74 70.8515 225.256 72.1812C223.789 73.4969 221.945 74.7863 219.99 75.275C217.987 75.7759 214.712 77.1678 212.353 79.5275C210.05 81.8305 208.628 85.0215 210.077 89.3688C211.732 93.2684 211.964 93.0939 213.865 94.8683C216.789 96.8975 219.667 97.7691 221.6 98.2735L221.652 98.2869L221.702 98.3053C224.106 99.1957 227.792 100.585 231.04 101.859C232.664 102.496 234.183 103.106 235.381 103.613C235.787 103.785 236.171 103.95 236.516 104.105ZM230.923 104.105C230.705 104.019 230.484 103.932 230.261 103.845C227.052 102.586 223.406 101.212 221.01 100.324C218.853 99.754 215.538 98.4284 212.417 96.262C210.132 94.335 209.599 93.2684 208.053 90.0434C206.303 84.7912 208.081 80.7826 210.844 78.0191C213.551 75.3125 217.21 73.7712 219.473 73.2055C220.931 72.8409 222.464 71.8194 223.832 70.5929C225.152 69.4103 226.224 68.1212 226.814 67.2906C229.547 61.897 234.364 60.42 236.689 60.3754C240.287 59.693 243.417 61.0972 246.028 63.6191C248.64 66.1409 248.68 66.6448 250.465 70.7648C253.861 78.6002 254.916 88.2506 255.889 95.112C257.058 94.9735 258.334 94.9218 259.725 94.9754C259.765 88.2769 260.91 78.974 264.291 71.5199C266.083 67.5686 268.537 64.0601 271.864 61.7646C275.222 59.4483 279.387 58.4245 284.448 59.3242L284.466 59.3275L284.485 59.3314C288.597 60.2126 290.928 62.7307 292.781 65.2007C293.162 65.7086 293.508 66.1928 293.842 66.6602C294.35 67.3711 294.83 68.0438 295.364 68.7022C296.216 69.7527 297.081 70.6022 298.112 71.1747C300.686 72.6046 304.064 75.7021 305.837 79.7448C307.644 83.8663 307.766 88.9548 303.769 94.094C300.58 98.1937 294.991 100.942 289.484 102.733C287.839 103.268 286.184 103.723 284.577 104.105H327.992C331.527 104.105 334.392 106.971 334.392 110.505V120.105C334.392 123.639 331.527 126.504 327.992 126.504H325.859V202.233C325.859 205.768 322.994 208.633 319.459 208.633H198.933C195.398 208.633 192.533 205.768 192.533 202.233C192.533 176.99 192.533 151.747 192.533 126.504H190.4C186.865 126.504 184 123.639 184 120.105V119.038V116.905V110.505C184 106.971 186.865 104.105 190.4 104.105H230.923ZM186.133 116.905V110.505C186.133 108.149 188.043 106.239 190.4 106.239L236.264 106.239H237.33H239.464L241.961 106.239C241.725 106.906 241.597 107.624 241.597 108.372V122.238C241.597 122.986 241.725 123.704 241.961 124.371L192.533 124.371L190.4 124.371C188.043 124.371 186.133 122.461 186.133 120.105V116.905ZM194.666 126.504H242.663V206.5H198.933C196.576 206.5 194.666 204.59 194.666 202.233C194.666 176.99 194.666 151.747 194.666 126.504ZM274.662 127.781V206.5H244.797V127.781C245.738 128.326 246.831 128.637 247.996 128.637H271.462C272.628 128.637 273.72 128.326 274.662 127.781ZM276.795 206.5V126.504H323.726V202.233C323.726 204.59 321.816 206.5 319.459 206.5H276.795ZM325.859 124.371L327.992 124.371C330.348 124.371 332.259 122.461 332.259 120.105V110.505C332.259 108.149 330.348 106.239 327.992 106.239H277.497C277.733 106.906 277.862 107.624 277.862 108.372V122.238C277.862 122.986 277.733 123.704 277.497 124.371L325.859 124.371ZM247.94 104.106C245.315 104.136 244.301 106.239 244.301 106.239C243.938 106.866 243.73 107.595 243.73 108.372V122.238C243.73 123.015 243.938 123.743 244.301 124.371C244.301 124.371 245.33 126.504 247.996 126.504H259.729H271.462C274.128 126.504 275.158 124.371 275.158 124.371C275.521 123.743 275.728 123.015 275.728 122.238V108.372C275.728 107.595 275.521 106.866 275.158 106.239C275.075 106.095 274.948 105.906 274.777 105.699L274.743 105.702L274.741 105.657C274.154 104.966 273.075 104.105 271.462 104.105H269.71L269.7 104.109L247.94 104.106ZM275.594 103.485C279.008 103.143 283.968 102.284 288.824 100.704C294.224 98.9486 299.3 96.3643 302.085 92.7844C305.554 88.3241 305.409 84.0798 303.883 80.6017C302.323 77.0448 299.302 74.276 297.076 73.0394C295.706 72.2786 294.639 71.1949 293.707 70.0455C293.146 69.3532 292.586 68.5717 292.04 67.8098C291.712 67.352 291.389 66.9008 291.074 66.4807C289.33 64.1552 287.399 62.1433 284.056 61.4212C279.526 60.6202 275.942 61.5431 273.076 63.5205C270.176 65.5214 267.93 68.6592 266.234 72.4009C263 79.5317 261.884 88.5766 261.858 95.1062C264.183 95.3982 266.281 96.6057 267.833 97.9715C268.734 98.7642 269.486 99.64 270.021 100.485C270.322 100.959 270.581 101.466 270.744 101.972H271.462C273.037 101.972 274.479 102.541 275.594 103.485ZM268.423 101.972C268.364 101.863 268.296 101.748 268.219 101.626C267.804 100.971 267.19 100.247 266.424 99.573C264.876 98.2107 262.85 97.1723 260.796 97.1723H260.755L260.714 97.1692C258.555 97.0031 256.718 97.1012 255.16 97.3734C250.793 98.137 248.573 100.276 247.581 101.986C247.718 101.977 247.857 101.972 247.996 101.972H268.423Z" fill="#232938"/>
                                    <path d="M406.025 129.906H281.205V202.801C281.205 206.11 283.887 208.792 287.196 208.792H400.034C403.342 208.792 406.025 206.11 406.025 202.801V129.906Z" fill="white"/>
                                    <path opacity="0.15" d="M282.203 202.801L282.203 206.795L403.029 206.795L403.029 202.801L282.203 202.801Z" fill="#232938"/>
                                    <path d="M356.097 131.903H331.133V206.795H356.097V131.903Z" fill="#FFCFEC"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M329.136 131.903H283.202V202.801C283.202 205.007 284.99 206.795 287.196 206.795H329.136V131.903ZM331.133 131.903H356.097V206.795H331.133V131.903ZM358.094 206.795V131.903H404.028V202.801C404.028 205.007 402.239 206.795 400.034 206.795H358.094ZM358.094 129.906H329.136H281.205V202.801C281.205 206.11 283.887 208.792 287.196 208.792H329.136H358.094H400.034C403.342 208.792 406.025 206.11 406.025 202.801V129.906H358.094Z" fill="#232938"/>
                                    <path opacity="0.8" d="M356.097 131.903H352.103V206.795H356.097V131.903Z" fill="white"/>
                                    <path d="M308.825 78.7226C305.882 77.2098 302.27 78.3691 300.757 81.3119L241.864 195.876C240.351 198.818 241.511 202.43 244.453 203.943L252.446 208.052C255.389 209.565 259.001 208.406 260.514 205.463L319.407 90.8991C320.92 87.9563 319.76 84.3442 316.817 82.8314L308.825 78.7226Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M243.64 196.789L302.533 82.225C303.542 80.2631 305.95 79.4902 307.912 80.4988L315.904 84.6076C317.866 85.6161 318.639 88.0242 317.631 89.9861L258.738 204.55C257.729 206.512 255.321 207.284 253.359 206.276L245.367 202.167C243.405 201.159 242.632 198.75 243.64 196.789ZM300.757 81.3119C302.27 78.3691 305.882 77.2098 308.825 78.7226L316.817 82.8314C319.76 84.3442 320.92 87.9563 319.407 90.8991L260.514 205.463C259.001 208.406 255.389 209.565 252.446 208.052L244.453 203.943C241.511 202.43 240.351 198.818 241.864 195.875L300.757 81.3119Z" fill="#232938"/>
                                    <path d="M282.396 126.765C279.453 125.252 275.841 126.411 274.328 129.354L264.284 148.892C262.772 151.835 263.931 155.447 266.874 156.96L278.419 162.895C281.362 164.408 284.974 163.248 286.487 160.306L296.53 140.768C298.043 137.825 296.884 134.213 293.941 132.7L282.396 126.765Z" fill="#FFCFEC"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M266.061 149.805L276.104 130.267C277.113 128.305 279.521 127.533 281.483 128.541L293.028 134.476C294.99 135.485 295.763 137.893 294.754 139.855L284.711 159.393C283.702 161.354 281.294 162.127 279.332 161.119L267.787 155.184C265.825 154.175 265.052 151.767 266.061 149.805ZM274.328 129.354C275.841 126.411 279.453 125.252 282.396 126.765L293.941 132.7C296.884 134.213 298.043 137.825 296.53 140.768L286.487 160.306C284.974 163.248 281.362 164.408 278.419 162.895L266.874 156.96C263.931 155.447 262.772 151.835 264.284 148.892L274.328 129.354Z" fill="#232938"/>
                                    <path opacity="0.8" d="M276.152 130.224V130.224C277.141 128.307 279.531 127.572 281.489 128.582L293.01 134.528C294.968 135.538 295.753 137.912 294.764 139.829V139.829L276.152 130.224Z" fill="white"/>
                                    <path d="M418.008 107.937V92.959L387.552 122.417L418.008 107.937Z" fill="#FFCFEC"/>
                                    <path d="M385.098 55.0606L367.227 92.0184L367.227 86.3861L381.23 39.4545L385.098 55.0606Z" fill="#D7CFFF"/>
                                    <path d="M344.624 51.3549L339.982 35.6727L338.276 42.5582L344.624 51.3549Z" fill="#D7CFFF"/>
                                    <path d="M314.09 61.1915L326.065 78.7774L328.532 79.3363L312.761 44.9659L314.09 61.1915Z" fill="#CFE2FF"/>
                                    <path d="M325.781 123.924L324.688 116.614L317.001 112.64L317.773 119.784L325.781 123.924Z" fill="#FFE0CF"/>
                                    <path d="M366.932 105.531L371.419 104.575L373.588 99.6595L369.191 100.411L366.932 105.531Z" fill="#CFE2FF"/>
                                    <path d="M343.968 97.5764L343.574 92.5848L338.255 88.5029L338.428 93.3245L343.968 97.5764Z" fill="#FFE0CF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M427.59 63.0649C422.566 61.9951 416.925 62.0508 412.161 63.6009C411.637 63.7716 411.35 64.335 411.521 64.8594C411.691 65.3839 412.255 65.6707 412.779 65.5C417.148 64.0783 422.425 64.007 427.174 65.0182C431.95 66.0351 436 68.1032 438.073 70.7696C442.382 76.3148 442.485 83.3954 438.401 88.008C437.038 89.4062 435.671 89.9009 434.497 89.8971C433.303 89.8932 432.193 89.3735 431.361 88.5409C430.527 87.7052 430.013 86.5929 429.974 85.4683C429.936 84.369 430.348 83.1943 431.487 82.1687C431.896 81.7996 431.929 81.1682 431.56 80.7584C431.191 80.3487 430.56 80.3157 430.15 80.6849C428.584 82.0956 427.919 83.834 427.978 85.5371C428.036 87.2148 428.792 88.7943 429.948 89.9521C431.107 91.113 432.708 91.8885 434.491 91.8942C436.29 91.9 438.162 91.1223 439.85 89.3833L439.865 89.3675L439.88 89.351C444.73 83.8925 444.444 75.7132 439.649 69.544C437.167 66.3499 432.588 64.1289 427.59 63.0649ZM410.384 65.2989C410.159 64.7952 409.569 64.5691 409.065 64.7938C401.374 68.2249 394.193 74.9647 387.972 84.7294C387.675 85.1945 387.812 85.8118 388.277 86.1081C388.742 86.4045 389.36 86.2677 389.656 85.8025C395.739 76.2554 402.65 69.8424 409.879 66.6176C410.383 66.393 410.609 65.8025 410.384 65.2989ZM387.916 86.6963C387.442 86.4148 386.829 86.5711 386.548 87.0454C386.237 87.5691 385.929 88.1007 385.623 88.6403C385.351 89.1202 385.52 89.7295 386 90.0013C386.48 90.2731 387.089 90.1044 387.361 89.6246C387.66 89.0965 387.961 88.5765 388.265 88.0646C388.547 87.5903 388.39 86.9777 387.916 86.6963ZM385.327 91.2417C384.838 90.987 384.235 91.1771 383.98 91.6662C379.978 99.3534 376.468 108.49 373.603 119.013C373.458 119.545 373.772 120.094 374.304 120.239C374.836 120.384 375.385 120.07 375.53 119.538C378.364 109.127 381.826 100.128 385.751 92.5885C386.006 92.0994 385.816 91.4964 385.327 91.2417Z" fill="#232938"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M334.051 5.73596C338.997 7.12272 343.966 9.79272 347.465 13.3784C347.85 13.7732 347.842 14.4054 347.447 14.7905C347.052 15.1756 346.42 15.1678 346.035 14.7731C342.827 11.4845 338.187 8.96982 333.512 7.65893C328.81 6.34065 324.263 6.29063 321.189 7.68908C314.796 10.5974 311.416 16.82 312.889 22.8015C313.447 24.6733 314.427 25.7461 315.469 26.2881C316.528 26.8396 317.753 26.8951 318.876 26.544C320.003 26.1917 320.975 25.4456 321.532 24.4677C322.076 23.5119 322.257 22.2801 321.725 20.843C321.534 20.3258 321.798 19.7514 322.315 19.56C322.833 19.3686 323.407 19.6328 323.598 20.15C324.33 22.1268 324.111 23.9751 323.268 25.456C322.437 26.9147 321.033 27.9621 319.472 28.4502C317.906 28.9397 316.128 28.8829 314.547 28.0596C312.951 27.229 311.655 25.6708 310.968 23.3466L310.962 23.3255L310.956 23.3042C309.197 16.2172 313.25 9.10686 320.362 5.87125C324.044 4.19596 329.131 4.3566 334.051 5.73596ZM348.229 15.6834C348.662 15.3414 349.29 15.4148 349.632 15.8474C349.984 16.2927 350.327 16.7502 350.661 17.2199C350.98 17.6693 350.875 18.2928 350.426 18.6123C349.976 18.9319 349.353 18.8266 349.033 18.3772C348.719 17.9347 348.396 17.5043 348.065 17.0861C347.723 16.6535 347.797 16.0255 348.229 15.6834ZM352.338 21.8316C352.832 21.5861 353.431 21.7874 353.677 22.2812C360.227 35.456 361.381 55.3921 355.867 80.3607C355.748 80.8992 355.215 81.2394 354.676 81.1204C354.138 81.0015 353.798 80.4685 353.917 79.93C359.386 55.1644 358.147 35.7591 351.888 23.1703C351.643 22.6765 351.844 22.0771 352.338 21.8316ZM354.076 84.1654C354.612 84.2953 354.942 84.835 354.812 85.371L352.315 95.6747C352.186 96.2106 351.646 96.5399 351.11 96.41C350.574 96.2802 350.245 95.7404 350.374 95.2044L352.871 84.9008C353.001 84.3648 353.54 84.0355 354.076 84.1654Z" fill="#232938"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M360.875 117.489L368.92 56.3411L368.601 56.2991L360.556 117.447L360.875 117.489Z" fill="#D7CFFF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M336.274 100.642L318.266 33.435L318.563 33.3421L336.571 100.549L336.274 100.642Z" fill="#D7CFFF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M340.752 130.127C340.752 124.024 347.382 119.077 355.561 119.077C363.74 119.077 370.37 124.024 370.37 130.127L340.752 130.127Z" fill="#FFE0CF"/>
                                    <defs>
                                        <radialGradient id="paint0_radial_815_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(296 211.5) rotate(90) scale(19.5 296)">
                                            <stop offset="0" stop-color="#403A80" stop-opacity="0.15"/>
                                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>

                            <div class="row align-center-desktop">
                                <div class="col col_8 col_middle-desktop-12 text-desktop-center">
                                    <div class="subscription-description wysiwyg">
                                        <h3 class="h3 title">Vehicula lobortis id mattis facilisi</h3>
                                        <p>Feugiat nullam bibendum. Placerat vitae ullamcorper in amet convallis dignissim lacus, aenean. Magna mollis sit odio sit aliquet facilisi</p>
                                    </div>
                                    <form id="subscription-form-phone" class="form subscription-form" name="subscription-form-phone" method="post">
                                        <div class="form-field ">
                                            <div class="form-group">
                                                <label class="label-wrap  label-icon label-icon-position-left" for="subscription_phone">
                                                    <input id="subscription_phone" class="phone_mask" type="tel" placeholder="Enter your phone number" name="subscription_phone" required>
                                                    <svg class="icon icon-label" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M6.58854 2.49686C6.66391 2.46627 6.83694 2.3999 7.04624 2.3999C7.22525 2.3999 7.36604 2.44984 7.43424 2.47703C7.51398 2.50883 7.5828 2.54619 7.63513 2.57723C7.73989 2.63936 7.84397 2.71551 7.93803 2.78943C8.12948 2.93989 8.35528 3.14147 8.59347 3.36642C9.0738 3.82006 9.65914 4.42074 10.2232 5.02878C10.7874 5.6371 11.3422 6.2656 11.7602 6.77708C11.9677 7.03097 12.1518 7.26861 12.2883 7.46673C12.3555 7.56424 12.4229 7.6691 12.4772 7.77168C12.5043 7.82285 12.5362 7.88856 12.5632 7.96304C12.5857 8.02516 12.6292 8.15762 12.6292 8.32436C12.6292 8.57524 12.5367 8.76806 12.4748 8.87412C12.4082 8.98813 12.3299 9.08116 12.2655 9.14995C12.1368 9.28738 11.9798 9.41615 11.8341 9.52669C11.5445 9.74641 11.1709 9.9893 10.8339 10.2085L10.8149 10.2208C10.4849 10.4354 10.1886 10.6286 9.96307 10.7946C10.8337 12.8277 12.1165 14.142 13.2506 14.9597C13.8652 15.4028 14.4347 15.6987 14.867 15.8812C15.0395 15.954 15.1868 16.0074 15.303 16.0444C15.3094 16.0378 15.316 16.031 15.3228 16.0239C15.4988 15.84 15.7091 15.5845 15.9504 15.2903L15.9646 15.2729C16.1881 15.0004 16.4403 14.6929 16.6692 14.4537C16.7853 14.3323 16.9209 14.2013 17.0648 14.0945C17.1681 14.0178 17.446 13.8191 17.817 13.8191C18.0631 13.8191 18.266 13.9155 18.3304 13.9461L18.3328 13.9473C18.4347 13.9957 18.5376 14.0558 18.6323 14.1155C18.8243 14.2364 19.0509 14.3987 19.2902 14.5802C19.7724 14.946 20.3596 15.4311 20.9258 15.9252C21.4916 16.419 22.0507 16.9343 22.4739 17.362C22.6834 17.5739 22.8739 17.7786 23.0177 17.9563C23.0883 18.0436 23.1632 18.1434 23.2251 18.247L23.2273 18.2507C23.265 18.3137 23.3999 18.539 23.3999 18.83C23.3999 19.017 23.3476 19.1746 23.3207 19.2499C23.2867 19.3446 23.2442 19.4376 23.2018 19.5221C23.1163 19.6922 23.0029 19.8838 22.8763 20.0806C22.6214 20.4768 22.2786 20.9472 21.908 21.3991C21.5398 21.8481 21.1241 22.3033 20.7214 22.6552C20.5208 22.8304 20.3033 22.9979 20.0801 23.1262C19.881 23.2406 19.5902 23.3755 19.2544 23.3838C14.91 23.6251 10.6958 21.1423 7.61768 17.8456C4.53673 14.5458 2.3999 10.226 2.3999 6.49728C2.3999 6.23982 2.50133 6.04005 2.54298 5.96208C2.59865 5.85784 2.66552 5.76228 2.72621 5.68275C2.84913 5.52168 3.00808 5.3471 3.17652 5.17517C3.51754 4.82706 3.96468 4.42187 4.41644 4.03998C4.86887 3.65753 5.34342 3.28366 5.74344 3.0006C5.9417 2.8603 6.13625 2.73189 6.30869 2.63464C6.39415 2.58644 6.49005 2.53683 6.58854 2.49686ZM15.155 16.1821C15.1317 16.1994 15.1337 16.1941 15.1576 16.1802C15.1567 16.1808 15.1558 16.1815 15.155 16.1821ZM9.69316 11.0172C9.69315 11.0172 9.6937 11.0165 9.69491 11.0152C9.69378 11.0165 9.69317 11.0172 9.69316 11.0172ZM4.20291 6.71752C4.28666 9.80208 6.11111 13.5945 8.93334 16.6171C11.8141 19.7025 15.5415 21.7822 19.1429 21.5872C19.1529 21.5823 19.1663 21.5753 19.1831 21.5656C19.2673 21.5172 19.3864 21.4313 19.537 21.2997C19.8367 21.0378 20.182 20.6652 20.5162 20.2576C20.848 19.8531 21.1491 19.4385 21.3625 19.1068C21.4053 19.0403 21.4432 18.9792 21.4762 18.924C21.3993 18.8392 21.3051 18.74 21.1942 18.6279C20.8125 18.2421 20.2887 17.7582 19.7423 17.2814C19.1963 16.8049 18.642 16.3478 18.2023 16.0142C18.0859 15.9259 17.9812 15.8491 17.8894 15.7843C17.7309 15.9585 17.5478 16.1811 17.3421 16.4318L17.3279 16.4491C17.1044 16.7217 16.8522 17.0291 16.6233 17.2683C16.5072 17.3897 16.3715 17.5208 16.2277 17.6275C16.1244 17.7043 15.8465 17.903 15.4755 17.903C15.2793 17.903 15.056 17.8479 14.8865 17.7989C14.6846 17.7406 14.4407 17.6551 14.1669 17.5395C13.6188 17.3081 12.9297 16.9474 12.198 16.4198C10.73 15.3615 9.08405 13.6262 8.07611 10.9226L8.01941 10.7705V10.6082C8.01941 10.3573 8.11185 10.1645 8.17379 10.0584C8.24037 9.94443 8.3187 9.8514 8.3831 9.78261C8.51175 9.64517 8.66878 9.5164 8.81448 9.40586C9.10411 9.18615 9.47766 8.94325 9.81473 8.72408L9.83367 8.71177C10.1214 8.52467 10.3835 8.35383 10.5954 8.20309C10.5283 8.11654 10.4518 8.02058 10.3664 7.91609C9.97953 7.44266 9.4514 6.8436 8.90348 6.2529C8.3553 5.66193 7.79918 5.09214 7.35756 4.67506C7.21374 4.53923 7.08762 4.42489 6.98167 4.33369C6.92206 4.37315 6.85577 4.41856 6.78319 4.46992C6.43687 4.71499 6.00411 5.05483 5.57849 5.41463C5.1522 5.77499 4.75056 6.14059 4.46231 6.43482C4.34902 6.55047 4.26298 6.64524 4.20291 6.71752ZM10.9554 7.91535C10.9554 7.91536 10.9549 7.91603 10.9537 7.91737C10.9548 7.91601 10.9554 7.91533 10.9554 7.91535ZM18.1375 15.54C18.1608 15.5227 18.1588 15.528 18.1349 15.5419C18.1358 15.5412 18.1367 15.5406 18.1375 15.54ZM17.5663 15.576C17.5454 15.5679 17.5421 15.5644 17.5607 15.5732C17.5621 15.5739 17.564 15.5749 17.5663 15.576ZM19.1193 21.5975C19.1193 21.5975 19.1202 21.5971 19.1222 21.5965C19.1202 21.5972 19.1193 21.5975 19.1193 21.5975Z"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.38859 1.29691C5.46396 1.26632 5.63699 1.19995 5.84629 1.19995C6.0253 1.19995 6.16609 1.24989 6.23429 1.27708C6.31403 1.30888 6.38285 1.34624 6.43518 1.37728C6.53994 1.43941 6.64402 1.51556 6.73808 1.58948C6.92953 1.73994 7.15533 1.94152 7.39352 2.16647C7.87384 2.62011 8.45919 3.22079 9.0232 3.82883C9.58747 4.43715 10.1423 5.06565 10.5603 5.57713C10.7677 5.83102 10.9519 6.06866 11.0884 6.26678C11.1555 6.36429 11.223 6.46915 11.2772 6.57173C11.3043 6.6229 11.3362 6.68861 11.3632 6.76309C11.3858 6.82521 11.4292 6.95767 11.4292 7.1244C11.4292 7.37529 11.3368 7.56811 11.2748 7.67417C11.2083 7.78818 11.1299 7.88121 11.0655 7.95C10.9369 8.08743 10.7799 8.2162 10.6342 8.32674C10.3445 8.54645 9.97097 8.78935 9.6339 9.00852L9.61497 9.02083C9.28497 9.23542 8.98868 9.4286 8.76312 9.59463C9.63376 11.6277 10.9165 12.9421 12.0507 13.7597C12.6652 14.2028 13.2347 14.4987 13.6671 14.6813C13.8395 14.7541 13.9868 14.8074 14.1031 14.8444C14.1095 14.8379 14.1161 14.831 14.1229 14.8239C14.2988 14.64 14.5091 14.3845 14.7504 14.0903L14.7647 14.0729C14.9882 13.8004 15.2403 13.493 15.4692 13.2538C15.5854 13.1324 15.721 13.0013 15.8648 12.8946C15.9682 12.8179 16.246 12.6192 16.617 12.6192C16.8631 12.6192 17.0661 12.7156 17.1305 12.7462L17.1329 12.7473C17.2347 12.7957 17.3376 12.8559 17.4323 12.9155C17.6243 13.0364 17.851 13.1987 18.0902 13.3802C18.5725 13.7461 19.1597 14.2311 19.7259 14.7252C20.2917 15.219 20.8507 15.7343 21.2739 16.1621C21.4835 16.3739 21.674 16.5786 21.8177 16.7564C21.8883 16.8436 21.9632 16.9434 22.0251 17.047L22.0273 17.0507C22.065 17.1137 22.2 17.339 22.2 17.6301C22.2 17.8171 22.1477 17.9746 22.1207 18.0499C22.0868 18.1446 22.0442 18.2377 22.0018 18.3221C21.9164 18.4922 21.8029 18.6839 21.6764 18.8806C21.4215 19.2769 21.0787 19.7473 20.708 20.1992C20.3398 20.6481 19.9241 21.1033 19.5214 21.4552C19.3208 21.6305 19.1033 21.798 18.8802 21.9262C18.6811 22.0407 18.3903 22.1755 18.0544 22.1838C13.7101 22.4252 9.49586 19.9423 6.41773 16.6456C3.33678 13.3459 1.19995 9.02603 1.19995 5.29733C1.19995 5.03987 1.30138 4.8401 1.34303 4.76213C1.3987 4.65789 1.46556 4.56233 1.52626 4.4828C1.64918 4.32173 1.80813 4.14715 1.97656 3.97521C2.31759 3.62711 2.76473 3.22192 3.21649 2.84003C3.66892 2.45758 4.14347 2.08371 4.54349 1.80065C4.74175 1.66035 4.9363 1.53194 5.10874 1.43469C5.1942 1.38649 5.2901 1.33688 5.38859 1.29691ZM13.9551 14.9822C13.9317 14.9995 13.9338 14.9941 13.9577 14.9802C13.9568 14.9809 13.9559 14.9815 13.9551 14.9822ZM8.49321 9.81726C8.49319 9.81724 8.49375 9.81657 8.49496 9.81524C8.49383 9.81659 8.49322 9.81727 8.49321 9.81726ZM3.00296 5.51757C3.08671 8.60213 4.91116 12.3945 7.73339 15.4172C10.6142 18.5026 14.3415 20.5823 17.9429 20.3872C17.953 20.3823 17.9663 20.3753 17.9832 20.3657C18.0673 20.3173 18.1864 20.2314 18.337 20.0998C18.6367 19.8379 18.982 19.4652 19.3163 19.0577C19.6481 18.6532 19.9491 18.2386 20.1625 17.9068C20.2053 17.8404 20.2432 17.7793 20.2763 17.724C20.1994 17.6392 20.1052 17.5401 19.9943 17.428C19.6126 17.0422 19.0887 16.5583 18.5423 16.0814C17.9963 15.6049 17.4421 15.1479 17.0023 14.8143C16.886 14.726 16.7812 14.6491 16.6895 14.5843C16.5309 14.7585 16.3478 14.9811 16.1422 15.2318L16.1279 15.2492C15.9044 15.5217 15.6523 15.8292 15.4234 16.0684C15.3072 16.1898 15.1716 16.3209 15.0278 16.4276C14.9244 16.5043 14.6465 16.703 14.2756 16.703C14.0794 16.703 13.856 16.6479 13.6865 16.599C13.4847 16.5407 13.2407 16.4551 12.967 16.3395C12.4189 16.1081 11.7298 15.7474 10.998 15.2198C9.53003 14.1615 7.8841 12.4263 6.87616 9.72264L6.81946 9.57055V9.40825C6.81946 9.15736 6.9119 8.96455 6.97384 8.85848C7.04042 8.74448 7.11875 8.65144 7.18315 8.58265C7.3118 8.44522 7.46883 8.31645 7.61453 8.20591C7.90415 7.9862 8.27771 7.7433 8.61478 7.52413L8.63371 7.51182C8.92144 7.32472 9.18355 7.15388 9.39549 7.00314C9.32839 6.91659 9.25186 6.82063 9.16647 6.71614C8.77958 6.24271 8.25145 5.64364 7.70353 5.05295C7.15535 4.46198 6.59923 3.89219 6.15761 3.47511C6.01378 3.33928 5.88767 3.22494 5.78172 3.13374C5.72211 3.17319 5.65582 3.21861 5.58324 3.26997C5.23692 3.51504 4.80416 3.85488 4.37853 4.21468C3.95224 4.57504 3.55061 4.94064 3.26236 5.23487C3.14907 5.35052 3.06303 5.44529 3.00296 5.51757ZM9.75548 6.7154C9.75549 6.71541 9.75493 6.71608 9.75372 6.71742C9.75485 6.71606 9.75546 6.71538 9.75548 6.7154ZM16.9375 14.34C16.9608 14.3227 16.9588 14.328 16.9349 14.342C16.9358 14.3413 16.9367 14.3406 16.9375 14.34ZM16.3664 14.3761C16.3455 14.368 16.3421 14.3645 16.3607 14.3733C16.3622 14.374 16.3641 14.3749 16.3664 14.3761ZM17.9193 20.3975C17.9193 20.3975 17.9203 20.3971 17.9222 20.3965C17.9203 20.3973 17.9193 20.3976 17.9193 20.3975Z"/> </svg>
                                                </label>
                                                <button type="submit" class="btn btn_link icon-btn form-group-btn">
                                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12.2828 2.76273C12.4781 2.56747 12.7947 2.56747 12.9899 2.76273L21.9192 11.692C22.1145 11.8873 22.1145 12.2039 21.9192 12.3991L12.9899 21.3284C12.7947 21.5237 12.4781 21.5237 12.2828 21.3284L11.7172 20.7627C11.5219 20.5675 11.5219 20.2509 11.7172 20.0556L17.9737 13.7991C18.2886 13.4841 18.0656 12.9456 17.6201 12.9456H3.5C3.22386 12.9456 3 12.7217 3 12.4456V11.6456C3 11.3694 3.22386 11.1456 3.5 11.1456H17.6201C18.0656 11.1456 18.2886 10.607 17.9737 10.292L11.7172 4.03553C11.5219 3.84026 11.5219 3.52368 11.7172 3.32842L12.2828 2.76273Z"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9419 1.85355C11.1372 1.65829 11.4538 1.65829 11.649 1.85355L20.7374 10.9419C20.9327 11.1372 20.9327 11.4538 20.7374 11.649L11.649 20.7374C11.4538 20.9327 11.1372 20.9327 10.9419 20.7374L10.0581 19.8536C9.8628 19.6583 9.86279 19.3417 10.0581 19.1464L15.9305 13.274C16.2454 12.9591 16.0224 12.4205 15.5769 12.4205H2C1.72386 12.4205 1.5 12.1966 1.5 11.9205V10.6705C1.5 10.3944 1.72386 10.1705 2 10.1705H15.5769C16.0224 10.1705 16.2454 9.63192 15.9305 9.31694L10.0581 3.44454C9.86279 3.24928 9.8628 2.9327 10.0581 2.73744L10.9419 1.85355Z" /> </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- partial -->
</body>
</html>


