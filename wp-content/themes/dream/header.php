
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dreamhunter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--    <meta http-equiv="refresh" content="5">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .splide__arrow {
            background: dodgerblue;
        !important;
            height: 3em;
            width: 3em;
        }

        .splide__arrow svg {
            fill: white;
        !important;
        }

        .carousel-inner {
            width: 100%;
            height: 786px;
            border-radius: 20px;
        }

        .splide__pagination__page.is-active {
            background: dodgerblue;
        }

        .splide__arrow--prev {
            left: -3em;
        }


        @media (max-width: 575.98px) {
            .splide__arrow--prev {
                left: 0;
            }

            .splide__arrow--next {
                right: 0;
            }

            .carousel-inner {
                width: 100%;
                height: 268px;
            }
        }
    </style>
    <?php
    wp_head();
    ?>
</head>
<body>
<!--<div class="header-box">-->
    <div class="container">
        <header>
            <nav style="display: flex;">
                <div class="logo"></div>
                <div class="list-menu">
                    <!--                <div class="list-nav-item d-none-m"><a href="#">Bosh saxifa</a></div>-->
                    <!--                <div class="list-nav-item d-none-m"><a href="#">Kitoblar</a></div>-->
                    <!--                <div class="list-nav-item d-none-m"><a href="#">Biz Xaqimizda</a></div>-->

                    <!--                    <div class="list-nav-item login-btn">-->
                    <div class="list-nav-item" style="background: #F6C854;">
                        <a href="/" class="btn" style="">
                            <!--                            <ion-icon name="person-outline" style="font-size: 25px;"></ion-icon>-->
                            <img src="<?php bloginfo('template_url');?>/assets/img/uzbekistan-flag-icon.png" alt="" style="width: 100%;
    height: 100%;">
                        </a>
                    </div>
                    <div class="list-nav-item" >
                        <a href="./ru" class="btn" style="">
                            <!--                            <ion-icon name="cart-outline" style="font-size: 25px;"></ion-icon>-->
                            <img src="<?php bloginfo('template_url');?>/assets/img/russia-flag-icon.png" alt="" style="width: 100%;
    height: 100%;">
                        </a>
                    </div>
                    <!--                    </div>-->

                </div>
            </nav>
            <div class="navMobile">
                <div class="nav-mobile-elements">
                    <ul>
                                            <li class="list-nav-item d-have-m " style="background: #F6C854; "><a href="#"
                                                                                                                 style="color: #1D5B3D; font-weight: bold">akount</a></li>
                                            <li class="list-nav-item d-have-m " style="background: #F6C854; "><a href="#"
                                                                                                                 style="color: #1D5B3D; font-weight: bold">afarmleniya</a>
                                            </li>
                                            <li class="list-nav-item d-have-m " style="background: #F6C854; "><a href="#"
                                                                                                                 style="color: #1D5B3D; font-weight: bold">karzina</a></li>
                    </ul>
                </div>
            </div>

        </header>

    </div>
<!--</div>-->