<?php
/* Template Name: All Articles */
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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modals.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <title>Все статьи</title>
</head>
<body>

<?php
    set_query_var( 'isHome', false );
    get_template_part( 'template-parts/menu' );
?>

<header class="article_header">
    <!--<div class="bg"></div>-->
    <div class="bg-mob"></div>
    <div class="menu">
        <div class="hamburgerIcon"></div>
    </div>
    <div class="header_info">
        <div class="info">
            <div>г. Ялта</div>
            <div class="number_tel">+7 (978) 042-82-62</div>
        </div>
    </div>
</header>

<div class="article_page all-article_page">
    <div class="shadow">
        <div class="article_head_mob">
            <div class="flex-img">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-back.png" alt="back">
                </a>
            </div>
            <div class="logo logo_menu_mob" style="color: #1c1c1c; align-self: center">MASTER GADGET</div>
            <div id="phone-button" class="flex-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.png" alt="phone">
            </div>
        </div>
    </div>
    <div class="menu menu_article">
        <div class="hamburgerIcon hamburgerIconArticle"></div>
    </div>
    <div class="article_body all_article_body">
        <h2>Блог и другие полезные статьи</h2>
        <div class="blog_block blog_block_article">



            <?php
            $args = array(
                'post_type'   => 'article',
                'post_status' => 'publish',
                'posts_per_page' => 30,
                'order' => 'DESC'
            );

            $articles = new WP_Query( $args );

            if( $articles->have_posts() ) :
                ?>

                <?php
                $index = 1;
                while( $articles->have_posts() ) :
                    $articles->the_post();
                    ?>

                    <div id="blog-card<?= $index; ?>" class="blog_card">
                        <div class="blog_card_body">
                            <a href="<?= get_post_permalink(); ?>">
                                <?php the_post_thumbnail(); ?></a>
                            <!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/1.jpg" alt="">-->
                            <div class="blog_card_title"><?= get_the_title(); ?></div>
                            <div class="blog_card_text">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                        <div class="blog_card_footer">
                            <div class="blog_card_date"><?= get_the_date(); ?></div>
                            <a href="<?= get_post_permalink(); ?>" class="btn_read"><span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-read.png" alt=""></span></a>
                        </div>
                    </div>


                    <?php
                    $index++;
                endwhile;
                wp_reset_postdata();
                ?>
            <?php
            endif;
            ?>




        </div>
<!--        <div class="reviews_pagination blog_pagination">-->
<!--            <a href="#"><div class="rev-left"><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/rev-left.png" alt=""></div></a>-->
<!--            <div class="slider_progress rev-pag">-->
<!--                <div class="slider_number">01</div>-->
<!--                <svg width="144" height="1">-->
<!--                    <path class="bg_svg" stroke="black" d="M0 10, 144 10"></path>-->
<!--                    <path class="meter" stroke="#ffc100" d="M0 0, 36 10" style="stroke-dashoffset: 144;"></path>-->
<!--                </svg>-->
<!--                <div class="slider_number">04</div>-->
<!--            </div>-->
<!--            <a href="#"><div class="rev-right"><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/rev-right.png" alt=""></div></a>-->
<!--        </div>-->
    </div>
</div>
<?php
    get_footer();
?>



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
                <a href="#" class="flex-img close-modal">
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
            <!--            <form class="form_application" action="--><?php //echo esc_url( admin_url('admin-post.php') ); ?><!--" method="post">-->
            <!--                <input type="hidden" name="action" value="zayavka_form">-->

            <input id="zayavka_name" class="input" name="name" type="text" placeholder="Ваше имя">
            <input id="zayavka_tel" class="input" name="number_tel" type="text" placeholder="Номер телефона">
            <p class="textarea-p">Что случилось?</p>
            <textarea id="zayavka_text" name="application" cols="1" rows="4"></textarea>
            <button class="form_submit" id="zayavka-submit" value="Отправить">Отправить</button>
            <!--            </form>-->
        </div>
    </div>
</div>



</body>
