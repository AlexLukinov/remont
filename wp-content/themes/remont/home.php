<?php
/* Template Name: Home */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="ремонт компьютеров, компьютерная техника">

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous">
    </script>

    <script type="text/javascript" src='<?php echo get_template_directory_uri(); ?>/js/swiper.min.js'></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/path-slider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lettering.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel='stylesheet prefetch' href='<?php echo get_template_directory_uri(); ?>/css/swiper.min.css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <title>Ремонт компьютерной техники</title>
</head>
<body>
<header>
    <div class="bg"></div>
    <div class="bg-mob"></div>
    <div class="menu">
        <div class="hamburgerIcon"></div>
    </div>
    <div id="menu" class="animated fadeIn" style="display: none">
        <div class="menu_wrapper">
            <div class="logo logo_menu_mob">MASTER GADGET</div>
            <nav>
                <a href="/">Главная</a>
                <a href="#uslugi">Услуги</a>
                <a href="#about-us">О нас</a>
                <a href="#contacts">Контакты</a>
                <a href="#blog">Блог</a>
            </nav>
            <div class="menu_contacts">
                <a href="#" class="menu_titr zvoni">
                    <div class="menu_cap">ЗВОНИ:</div>
                    <div class="menu_name">+7 (978) 042-82-62</div>
                </a>
                <a href="#" class="menu_titr" style=" height:30px; color: transparent; cursor: none">

                </a>
                <a href="#" class="menu_titr">
                    <div class="menu_cap">ДИЗАЙНЕР САЙТА:</div>
                    <div class="menu_name">Helen Tihomolova</div>
                </a>
                <a href="#" class="menu_titr">
                    <div class="menu_cap">РАЗРАБОТЧИК:</div>
                    <div class="menu_name">Ekaterina Lukinova</div>
                </a>
            </div>
            <div class="menu_social">
                <div class="contacts_social">
                    <a href="#">Vk</a>
                    <a href="#">Instagram</a>
                </div>
                <div class="contacts_social margin_group">
                    <a href="#">Telegram</a>
                    <a href="#">WhatsApp</a>
                    <a href="#">Viber</a>
                </div>
                <div class="year">2018</div>
            </div>
        </div>
    </div>
    <div class="header_info">
        <div class="logo">MASTER GADGET</div>
        <div class="info">
            <div>г. Ялта</div>
            <div class="number_tel">+7 (978) 042-82-62</div>
        </div>
    </div>

</header>
<section class="section_home">
    <div class="bg"></div>
    <div class="social">
        <a href="#">Instagram</a>
        <a href="#">WhatsApp</a>
        <a href="#">Telegram</a>
    </div>
    <div class="home">
        <div class="home_slider">
            <div class="home_slider_img">
                <div class="swiper-container main-slider loading">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider-foto1.jpg)">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider-foto1.jpg" class="entity-img" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider-foto2.jpg)">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider-foto2.jpg" class="entity-img" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider-foto3.jpg)">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider-foto3.jpg" class="entity-img" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider-foto4.jpg)">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider-foto4.jpg" class="entity-img" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home_slider_content home_slider_content1">
                <h2>Ремонт и настройка</h2>
                <h3>компьютерной техники <br> и электронных устройств</h3>
                <a href="#anchor_table"><div class="btn btn_home_slider">Узнать больше</div></a>
            </div>
            <div class="home_slider_content home_slider_content2" style="display: none">
                <h2>Бесплатный вызов</h2>
                <h3>курьера на дом. Консультация <br> со специалистом</h3>
                <a href="#"><div class="btn btn_home_slider">Узнать больше</div></a>
            </div>
            <div class="home_slider_content home_slider_content3" style="display: none">
                <h2>Экономия времени</h2>
                <h3>сил и нервов. Мы поработаем и <br> поволнуемся за Вас!</h3>
                <a href="#"><div class="btn btn_home_slider">Узнать больше</div></a>
            </div>
            <div class="home_slider_content home_slider_content4" style="display: none">
                <h2>Простое решение</h2>
                <h3>сложных проблем. С нами <br> легко. Проверьте сами!</h3>
                <a href="#"><div class="btn btn_home_slider">Узнать больше</div></a>
            </div>
        </div>
        <div class="slider_progress">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png" alt=""></a>
            <div class="slider_number">01</div>
            <svg width="144" height="1">
                <path class="bg_svg" stroke="black" d="M0 10, 144 10"></path>
                <path class="meter" stroke="#ffc100" d="M0 0, 36 10" style="stroke-dashoffset: 144;"></path>
            </svg>
            <div class="slider_number">04</div>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png" alt=""></a>
        </div>
    </div>
    <div class="nav-fixed">
        <div class="item_circle active"></div>
        <div class="item_circle"></div>
        <div class="item_circle"></div>
        <div class="item_circle"></div>
        <div class="item_circle"></div>
    </div>
    <p class="phone-p_mobile">Заказать звонок</p>
    <a href="#">
        <div class="phone ">
            <img class="img_phone" src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
            <p class="phone-p animated fadeIn">Заказать звонок</p>
        </div>
    </a>
</section>
<section class="section_services">
    <a name="#uslugi"></a>
    <div class="services">
        <div class="services_content">
            <div class="services_anchor">Наши услуги</div>
            <div class="citate">
                <h1>“Мы беремся за восстановление всех видов электронных устройств.”</h1>
            </div>
            <div class="avatar">
                <div class="avatar_foto"></div>
                <div class="avatar_info">
                    <h4>Илья Кружинский</h4>
                    <h5>Основатель и руководитель Master Gadget</h5>
                </div>
            </div>
        </div>
        <div class="services_icons">
            <div class="icons-group">
                <div class="icons-group_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/descktop.png" alt="">
                    <div class="icons-conformity">Ремонт компьютеров</div>
                </div>
                <div class="icons-group_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/notebook.png" alt="">
                    <div class="icons-conformity">Ремонт ноутбуков</div>
                </div>
                <div class="icons-group_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mob-phone.png" alt="">
                    <div class="icons-conformity">Ремонт телефонов</div>
                </div>
            </div>
            <div class="icons-group">
                <div class="icons-group_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/i-pad.png" alt="">
                    <div class="icons-conformity">Ремонт планшетов</div>
                </div>
                <div class="icons-group_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/scan.png" alt="">
                    <div class="icons-conformity">Ремонт сканеров</div>
                </div>
                <div class="icons-group_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/print.png" alt="">
                    <div class="icons-conformity">Ремонт принтеров</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_table" id="anchor_table">
    <div class="services_table">
        <div class="services_table_group">
            <div class="services_table_item border-right border-bottom">
                <h4>ВЫЕЗД НА ДОМ ИЛИ ОФИС</h4>
                <h5>Бесплатный вызов курьера, вызов специалиста для преддиагностики и ремонта. </h5>
            </div>
            <div class="services_table_item border-right border-bottom">
                <h4>НОУТБУКИ И СИСТЕМНЫЕ БЛОКИ</h4>
                <h5>Ремонт любой сложности, замена деталей и комплектующих, установка операционной
                    системы и программ, апгрейд, увеличение памяти <sup>*</sup></h5>
            </div>
            <div class="services_table_item border-bottom">
                <h4>ПЛАНШЕТЫ И ТЕЛЕФОНЫ</h4>
                <h5>Замена разьемов питания, аккумуляторов, тачскринов и дисплеев, перепрошивка, настройка приложений<sup>*</sup></h5>
            </div>
        </div>
        <div class="services_table_group">
            <div class="services_table_item border-right border-bottom-mobile">
                <h4>ПРИНТЕРЫ И МФУ</h4>
                <h5>Обслуживание МФУ (принтер, сканер, ксерокс), заправка и ремонт картриджей, замена прошивки.</h5>
            </div>
            <div class="services_table_item border-right border-bottom-mobile">
                <h4>ВОССТАНОВЛЕНИЕ ФАЙЛОВ</h4>
                <h5>Восстановление данных с носителей памяти HDD, SDD, USB накопителей и флеш-карт.</h5>
            </div>
            <div class="services_table_item border-bottom-mobile">
                <h4>ДРУГИЕ УСЛУГИ</h4>
                <h5>Ремонт телевизоров,мониторов и прочей техники, прокладка сетей и усиление сигнала и прочее.</h5>
            </div>
        </div>
    </div>
    <div class="services_btn">
        <a href="#" class="open_application"><div class="btn">Оформить заявку</div></a>
        <div class="refinement"><span>*</span>    мастерская не несет ответственности за сохранность данных на Вашем устройстве, однако мы
            ВСЕГДА делаем все возможное чтобы ВСЕ Ваши данные остались в целости и сохранности</div>
    </div>
</section>
<section class="plast">
    <div class="plast_img">
        <div class="img_deco"></div>
        <div class="bg"></div>
    </div>
    <div class="plast_content">
        <h2>Давайте знакомиться</h2>
        <h6>Мастерская MasterGadget первый сервис-центр в Крыму с бесплатной курьерской
            доставкой вашей техники к месту ремонта и обратно. Вам больше не нужно специально
            отвозить свое поломанное устройство, а после ремонта снова приезжать и забирать.
            Достаточно оформить заявку на нашем сайте, и курьер приедет к вам в удобное время и
            место, а после ремонта привезет обратно. Так же вы можете вызвать специалиста,
            который проведет диагностику и ремонт прямо у вас дома, если это возможно.<br>
            Перечень услуг доступных на дому уточняйте по телефону.
        </h6>
        <a href="#" class="open_application"><div class="btn">Заказать звонок</div></a>
    </div>
</section>
<section class="section_mini">
    <div class="section_mini_number section_mini_number1">
        <div class="number">1</div>
        <div class="number_content"><span>Какие приемущества дает такой подход? </span><br>
            Оперативное оказание услуг и <strong> низкие цены в сравнении с<br> конкурентами.</strong>
        </div>
    </div>
    <div class="section_mini_number">
        <div class="number">2</div>
        <div class="number_content number_content2"><span>Как такое возможно?</span>
            Нам не приходится платить высокую арендную плату
            за помещение для обслуживания клиентов, а значит мы можем<strong>
                снизить цену на большинство услуг на 30%!</strong>
        </div>
    </div>
</section>
<section class="plast plast_reverse">
    <div class="plast_img">
        <div class="img_deco img_deco2"></div>
        <div class="bg bg-reverse"></div>
    </div>
    <div class="plast_content">
        <h2>Почему мы?</h2>
        <h6>Мы ценим свою репутацию, поэтому наши специалисты выполняют свою работу очень качественно, чтобы Вы были
            полностью удовлетворены нашими услугами, и хотели советовать нас своим друзьям и знакомым.
        </h6>
        <h6>
            Если по каким либо причинам мы не сможем оказать вам услугу в которой вы нуждаетесь, мы поможем вам найти
            подходящих специалистов даже среди наших конкурентов, и позаботимся о скидке для Вас.
        </h6>
        <a href="#" class="open_application" id="btn-reverse"><div class="btn">Оформить заявку</div></a>
    </div>
</section>
<section class="info-block">
    <h2 class="h2-block">Мы изменили подход и нам удалось
        снизить цену на большинство услуг на 30%<br>
        Теперь вам доступно качество по разумной цене!</h2>
</section>
<section class="reviews">
    <h2>Отзывы клиентов</h2>
    <div class="reviews_block">



        <?php
        $args = array(
            'post_type'   => 'review',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'order' => 'DESC'
        );

        $articles = new WP_Query( $args );

        if( $articles->have_posts() ) :
            ?>

            <?php
            while( $articles->have_posts() ) :
                $articles->the_post();
                ?>

                <div class="reviews_block_item">
                    <?php $gender = get_post_meta( get_the_ID(), 'review_gender', true ); ?>
                    <?php if (strtolower($gender) == 'м') { ?>
                        <img class="img_reviews" src="<?php echo get_template_directory_uri(); ?>/img/reviews_avatar-men.png" alt="">
                    <?php } else { ?>
                        <img class="img_reviews" src="<?php echo get_template_directory_uri(); ?>/img/reviews_avatar-girl.png" alt="">
                    <?php } ?>
                    <div class="reviews_name"><?= the_title(); ?></div>
                    <div class="reviews_content">
                        « <?= get_post_meta( get_the_ID(), 'review_text', true ); ?> »
                    </div>
                </div>


            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        <?php
        endif;
        ?>



    </div>
    <div class="reviews_pagination">
        <a href="#"><div class="rev-left"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-left.png" alt=""></div></a>
        <div class="slider_progress rev-pag">
            <div class="slider_number">01</div>
            <svg width="144" height="1">
                <path class="bg_svg" stroke="black" d="M0 10, 144 10"></path>
                <path class="meter" stroke="#ffc100" d="M0 0, 36 10" style="stroke-dashoffset: 144;"></path>
            </svg>
            <div class="slider_number">04</div>
        </div>
        <a href="#"><div class="rev-right"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-right.png" alt=""></div></a>
    </div>
    <a href="#" id="rev-a"><div class="btn">Оставить отзыв</div></a>
</section>
<section class="card_section">
    <div class="card_caption_bg">
        <div class="card_caption">
            <h3 class="card_caption_h3">Лучшие на Южном Берегу</h3>
            <div class="card_caption_content">
                <p>На карте отмечены города,
                    доступные для обслуживания
                    и курьерской доставки нашим сервисным центром.
                </p>
                <a class="a-card" href="#">
                    <span class="span_btn">смотреть карту</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/rev-right.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="contacts_social_mobile">
        <a href="#">Instagram</a>
        <a href="#">Vk</a>
        <a href="#">Telegram</a>
        <a href="#">WhatsApp</a>
        <a href="#">Viber</a>
    </div>
    <div class="contacts">
        <div class="contacts-left">
            <div class="contacts-item">
                <div class="contacts-item_caption">Город</div>
                <div class="contacts-item_content">Ялта</div>
            </div>
            <div class="contacts-item">
                <div class="contacts-item_caption">E-mail</div>
                <div class="contacts-item_content">info@air.agency</div>
            </div>
        </div>
        <div class="contacts-right">
            <div class="contacts-item">
                <div class="contacts-item_caption">Телефон</div>
                <div class="contacts-item_content">+7 (978) 042-82-62</div>
            </div>
        </div>
    </div>
    <div class="block_card">
        <div class="card"></div>
        <div class="contacts_social">
            <a href="#">Instagram</a>
            <a href="#">Vk</a>
            <a href="#">Telegram</a>
            <a href="#">WhatsApp</a>
            <a href="#">Viber</a>
        </div>
    </div>
</section>
<section class="blog_section">
    <div class="blog_caption">
        <h2>Блог и другие<br> полезные статьи</h2>
    </div>
    <div class="blog_block">



        <?php
        $args = array(
            'post_type'   => 'article',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'order' => 'DESC'
        );

        $articles = new WP_Query( $args );

        if( $articles->have_posts() ) :
            ?>

            <?php
            while( $articles->have_posts() ) :
                $articles->the_post();
                ?>

                <div class="blog_card">
                    <a href="<?= get_post_permalink(); ?>">
                        <?php the_post_thumbnail(); ?></a>
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/1.jpg" alt="">-->
                    <div class="blog_card_title"><?= get_the_title(); ?></div>
                    <div class="blog_card_text">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="blog_card_footer">
                        <div class="blog_card_date"><?= get_the_date(); ?></div>
                        <a href="<?= get_post_permalink(); ?>" class="btn_read"><span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-read.png" alt=""></span></a>
                    </div>
                </div>


            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        <?php
        endif;
        ?>




    </div>
    <div class="reviews_pagination blog_pagination">
        <a href="#"><div class="rev-left"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-left.png" alt=""></div></a>
        <div class="slider_progress rev-pag">
            <div class="slider_number">01</div>
            <svg width="144" height="1">
                <path class="bg_svg" stroke="black" d="M0 10, 144 10"></path>
                <path class="meter" stroke="#ffc100" d="M0 0, 36 10" style="stroke-dashoffset: 144;"></path>
            </svg>
            <div class="slider_number">04</div>
        </div>
        <a href="#"><div class="rev-right"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-right.png" alt=""></div></a>
    </div>
    <a href="#"><div class="btn btn-grey">Читать все статьи</div></a>
</section>

<!--модальные окна-->
<div class="modal modal_application animated fadeIn" id="application" style="display: none">
    <div class="modal_left">
        <div class="close">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close.jpg" alt="Закрыть">
        </div>
        <div class="modal_content">
            <div class="logo logo_modal">MASTER GADGET</div>
            <h2>
                Мы экономим ваше время и средства.
                Всегда на связи!
            </h2>
            <div class="contacts_social social_modal">
                <a href="#">Instagram</a>
                <a href="#">Vk</a>
                <a href="#">Telegram</a>
                <a href="#">WhatsApp</a>
                <a href="#">Viber</a>
            </div>
        </div>
    </div>
    <div class="modal_form">
        <div class="shadow shadow_modal">
            <div class="article_head_mob">
                <a href="#" class="flex-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-back.png" alt="back">
                </a>
                <div class="logo logo_menu_mob logo_modal_mob" >MASTER GADGET</div>
            </div>
        </div>
        <div class="modal_form_content">

            <h3>
                Расскажите нам о проблеме!
            </h3>
            <p>
                Мы предоставляем услугу <span class="red_span">бесплатного</span> вызова курьера.
                Так же Вы можете оставить заявку для консультации.
                Мы вам перезвоним!
            </p>
            <form class="form_application" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="zayavka_form">

                <input class="input" name="name" type="text" placeholder="Ваше имя">
                <input class="input" name="number_tel" type="text" placeholder="Номер телефона">
                <p class="textarea-p">Что случилось?</p>
                <textarea name="application" cols="1" rows="4"></textarea>
                <input class="form_submit" value="Отправить" type="submit" />
            </form>
        </div>
    </div>
</div>
<div class="modal animated fadeIn" id="reviews" style="display: none">
    <div class="modal_left">
        <div class="close">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close.jpg" alt="Закрыть">
        </div>
        <div class="modal_content">
            <div class="logo logo_modal">MASTER GADGET</div>
            <h2>
                Мы стараемся повышать качество наших услуг
            </h2>
            <div class="contacts_social social_modal">
                <a href="#">Instagram</a>
                <a href="#">Vk</a>
                <a href="#">Telegram</a>
                <a href="#">WhatsApp</a>
                <a href="#">Viber</a>
            </div>
        </div>
    </div>
    <div class="modal_form">
        <div class="shadow shadow_modal">
            <div class="article_head_mob">
                <div class="flex-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-back.png" alt="back">
                </div>
                <div class="logo logo_menu_mob logo_modal_mob" >MASTER GADGET</div>
            </div>
        </div>
        <div class="modal_form_content">

            <h3>
                Нам важен ваш отзыв!
            </h3>
            <p>
                Отправьте свой отзыв об оказанных вам услугах!
                Так же вы можете оставить рекомендации и пожелания для повышения качества наших услуг.
            </p>
            <form class="form_application" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="review_form">
                <input class="input" name="name" type="text" placeholder="Ваше имя">
                <input class="input" name="number_tel" type="text" placeholder="Номер телефона">
                <p class="textarea-p">Ваш отзыв</p>
                <textarea name="application" cols="1" rows="4"></textarea>
                <input class="form_submit"  value="Отправить" type="submit" />
            </form>
        </div>
    </div>
</div>
<div class="modal animated fadeIn" id="thank_application" style="display: none">
    <div class="modal_body">
        <h3>Благодарим за заявку!</h3>
        <p>
            В течение 24 часов наш менеджер перезвонит для решения вашего вопроса!
        </p>
        <p>
            <span class="red_span">Оставайтесь на связи!</span>
        </p>
        <a href="#"><h3>Ok</h3></a>
    </div>
</div>


<!--модальные окна-->
<div class="modal modal_application animated fadeIn" id="application" style="display: none">
    <div class="modal_left">
        <div class="close">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close.jpg" alt="Закрыть">
        </div>
        <div class="modal_content">
            <div class="logo logo_modal">MASTER GADGET</div>
            <h2>
                Мы экономим ваше время и средства.
                Всегда на связи!
            </h2>
            <div class="contacts_social social_modal">
                <a href="https://www.instagram.com/mastergadget.service/">Instagram</a>
                <a href="https://vk.com/mg.service">Vk</a>
                <a href="https://t.me/mgadgetyalta">Telegram</a>
                <a href="https://wa.me/79780428262">WhatsApp</a>
                <a href="#">Viber</a>
            </div>
        </div>
    </div>
    <div class="modal_form">
        <div class="shadow shadow_modal">
            <div class="article_head_mob">
                <a href="#" class="flex-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-back.png" alt="back">
                </a>
                <div class="logo logo_menu_mob logo_modal_mob" >MASTER GADGET</div>
            </div>
        </div>
        <div class="modal_form_content">

            <h3>
                Расскажите нам о проблеме!
            </h3>
            <p>
                Мы предоставляем услугу <span class="red_span">бесплатного</span> вызова курьера.
                Так же Вы можете оставить заявку для консультации.
                Мы вам перезвоним!
            </p>
            <form class="form_application" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="review_form">

                <input class="input" name="name" type="text" placeholder="Ваше имя">
                <input class="input" name="number_tel" type="text" placeholder="Номер телефона">
                <p class="textarea-p">Что случилось?</p>
                <textarea name="application" cols="1" rows="4"></textarea>
                <input class="form_submit" value="Отправить" type="submit" />
            </form>
        </div>
    </div>
</div>
<div class="modal animated fadeIn" id="reviews" style="display: none">
    <div class="modal_left">
        <div class="close">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close.jpg" alt="Закрыть">
        </div>
        <div class="modal_content">
            <div class="logo logo_modal">MASTER GADGET</div>
            <h2>
                Мы стараемся повышать качество наших услуг
            </h2>
            <div class="contacts_social social_modal">
                <a href="https://www.instagram.com/mastergadget.service/">Instagram</a>
                <a href="https://vk.com/mg.service">Vk</a>
                <a href="https://t.me/mgadgetyalta">Telegram</a>
                <a href="https://wa.me/79780428262">WhatsApp</a>
                <a href="#">Viber</a>
            </div>
        </div>
    </div>
    <div class="modal_form">
        <div class="shadow shadow_modal">
            <div class="article_head_mob">
                <div class="flex-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-back.png" alt="back">
                </div>
                <div class="logo logo_menu_mob logo_modal_mob" >MASTER GADGET</div>
            </div>
        </div>
        <div class="modal_form_content">

            <h3>
                Нам важен ваш отзыв!
            </h3>
            <p>
                Отправьте свой отзыв об оказанных вам услугах!
                Так же вы можете оставить рекомендации и пожелания для повышения качества наших услуг.
            </p>
            <form class="form_application" action="">
                <input class="input" name="name" type="text" placeholder="Ваше имя">
                <input class="input" name="number_tel" type="text" placeholder="Номер телефона">
                <p class="textarea-p">Ваш отзыв</p>
                <textarea name="application" cols="1" rows="4"></textarea>
                <input class="form_submit"  value="Отправить" type="submit" />
            </form>
        </div>
    </div>
</div>
<div class="modal animated fadeIn" id="thank_application" style="display: none">
    <div class="modal_body">
        <h3>Благодарим за заявку!</h3>
        <p>
            В течение 24 часов наш менеджер перезвонит для решения вашего вопроса!
        </p>
        <p>
            <span class="red_span">Оставайтесь на связи!</span>
        </p>
        <a href="#"><h3>Ok</h3></a>
    </div>
</div>

<?php
if (isset($_SESSION['review_success_message'] )) {
    ?>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                showModal($('#thank_application'));
            }, 500);
        });
    </script>
    <?php unset($_SESSION['review_success_message']); ?>
<?php } ?>

</body>

<?php
get_footer();
