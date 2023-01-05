<?php
get_header();?>
<div class="header-box">
    <div class="carousel-avlod">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class=" " src="<?php bloginfo('template_url');?>/assets/img/innoP.png" alt="Second slide">
                </div>

                <div class="carousel-item">
                    <img class=" " src="<?php bloginfo('template_url');?>/assets/img/spP.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class=" " src="<?php bloginfo('template_url');?>/assets/img/scP.png" alt="Third slide">
                </div>
                <div class="carousel-item ">
                    <img class=" " src="<?php bloginfo('template_url');?>/assets/img/dreepsP.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class=" " src="<?php bloginfo('template_url');?>/assets/img/chito.png" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="dominate">
    <div class="d-boxes">
        <div class="box-text container">
            <h1 style="color: #57B479"> Dream Hunter - orzu ovchisi </h1><br>
            <ul>
                <li><img src="<?php bloginfo('template_url');?>/assets/img/dream_hunter%2050x50.png" alt="">Sog'lom avlod - buyuk kelajak poydevori, sog'liq -
                    kompaniyamizning ustuvor
                    yo'nalishi. Sog'lom va baxtli hayot har bir insonning orzusidir.
                </li>
                <li><img src="<?php bloginfo('template_url');?>/assets/img/dream_hunter%2050x50.png" alt="">Kompaniyamizda 15 yildan ortiq tajribaga ega
                    mutaxassislar ishlaydi
                </li>
                <li><img src="<?php bloginfo('template_url');?>/assets/img/dream_hunter%2050x50.png" alt=""> Fabrikalarimiz 5 yildan beri mahsulot ishlab
                    chiqaradi.
                </li>
                <li><img src="<?php bloginfo('template_url');?>/assets/img/dream_hunter%2050x50.png" alt="">Mahsulotlarimiz ayollar ginekologik kasalliklarini
                    davolashadi.
                </li>
                <li><img src="<?php bloginfo('template_url');?>/assets/img/dream_hunter%2050x50.png" alt="">Dream Hunter odamlarga orzulariga erishish uchun kuch
                    beradi.
                </li>
            </ul>
        </div>
        <br>
        <!--        <div class="box-btn">-->
        <!--            <a href="#">kompaniya haqida</a>-->
        <!--        </div>-->
    </div>
</section>
<section class="buy-card container">
    <div class="buy-boxes">

        <div class="buy-box-item">
            <div class="buy-img">
<!--                --><?php //if (has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="img-fluid mb-5" alt="">
<!--                --><?php //endif;?>
<!--                --><?php //if (have_posts()) : while (have_posts()) : the_post();?>
<!--                    --><?php //the_content();?>
<!--                --><?php //endwhile; else: endif;?>
            </div>
            <div class="buy-about">
                <h1>Innocence</h1>
            </div>
            <div class="buy-btn">
                <a href="./innocence.html" >
                    Bataafsil ma'lumot
                </a>
            </div>
        </div>

    </div>
</section>
<section class="contact-area" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="contact-content text-center">
                    <a href="#"><img src=".<?php bloginfo('template_url');?>/assets/img/logo.svg" alt="logo"></a>
                    <div class="hr"></div>
                    <h6> Город Ташкент , Яккасарайский район, 1 - проезд , Жидазор 5</h6>
                    <h6>+998 55 151 11 11<span>|</span>+998 90 880 99 99</h6>
                    <div class="social">
                        <ul>
                            <li>
                                <a class="" href="https://t.me/dreamhunteruz">
                                    <img src=".<?php bloginfo('template_url');?>/assets/img/telegram.png" alt="" width="44px" height="44px"></a>
                            </li>
                            <li><a class="hover-target" href=""><img src=".<?php bloginfo('template_url');?>/assets/img/facebook.png"></a></li>
                            <li>
                                <a class="hover-target" href="https://instagram.com/dreamhunter.uz?igshid=YTY2NzY3YTc=
">
                                    <img src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-instagram-new-logo-vector-download-13.png"
                                         alt="" width="40px" height="40px">

                                </a>
                            </li>

                            <li><a class="hover-target" href=""><img src=".<?php bloginfo('template_url');?>/assets/img/tiktok.png" alt=""></a></li>
                            <li><a class="hover-target" href=""><img src=".<?php bloginfo('template_url');?>/assets/img/youtube.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<?php get_footer();?>
