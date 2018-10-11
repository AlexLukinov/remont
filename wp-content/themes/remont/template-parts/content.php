<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="ремонт компьютеров, компьютерная техника">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css"/>
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
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
    <div class="shadow">
        <div class="article_head_mob">
            <div class="flex-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-back.png" alt="back">
            </div>
            <div class="article_avatar">
                <div class="avatar_foto"></div>
            </div>
            <div class="flex-img">
                <div id="social-share-mobile" style="display: none;">
                    <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                </div>
                <img class="img_share" src="<?php echo get_template_directory_uri(); ?>/img/share.png" alt="Share">
            </div>
        </div>
    </div>
    <div class="article_page">
        <div class="menu menu_article">
            <div class="hamburgerIcon hamburgerIconArticle"></div>
        </div>
        <div id="menu" class="animated fadeIn" style="display: none">
            <div class="menu_wrapper">
                <div class="logo logo_menu_mob" >MASTER GADGET</div>
                <nav>
                    <a class="menu-item" href="/#">Главная</a>
                    <a class="menu-item" href="/#uslugi">Услуги</a>
                    <a class="menu-item" href="/#about-us">О нас</a>
                    <a class="menu-item" href="/#contacts">Контакты</a>
                    <a class="menu-item" href="/#blog">Блог</a>
                </nav>
                <div class="menu_contacts">
                    <a href="#" class="menu_titr zvoni">
                        <div class="menu_cap">ЗВОНИ:</div>
                        <div class="menu_name">+7 (978) 042-82-62</div>
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
                    <div class="contacts_social">
                        <a href="#">Telegram</a>
                        <a href="#">WhatsApp</a>
                        <a href="#">Viber</a>
                    </div>
                    <div class="year">2018</div>
                </div>
            </div>
        </div>




        <div class="article_body">
            <div class="article_pagination">
                <?php $nextPost = get_next_post(); ?>
                <a href="<?= $nextPost->guid; ?>">
                    <div class="pagination_prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rev-left.png" alt="">
                        <span class="prev_article">Предыдущий пост</span>
                    </div>
                </a>
                <?php $previousPost = get_previous_post(); ?>
                <a href="<?= $previousPost->guid; ?>">
                    <div class="pagination_next">
                        <span class="next_article">Следующий пост</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rev-right.png" alt="">
                    </div>
                </a>
            </div>
            <div class="article_head">
                <div class="avatar">
					<?php $author = get_post_meta( get_the_ID(), 'article_author', true ); ?>
					<?php if ($author == 'а') { ?>
                        <div class="avatar_foto avatar_foto_alena"></div>
					<?php } else { ?>
                        <div class="avatar_foto"></div>
					<?php } ?>
                    <div class="avatar_info">
						<?php if ($author == 'а') { ?>
                        	<h4>Алёна Тихомолова</h4>
                        	<h5>Веб дизайнер и консультант Master Gadget</h5>
						<?php } else { ?>
							<h4>Илья Кружинский</h4>
                        	<h5>Основатель и руководитель Master Gadget</h5>
						<?php } ?>
                    </div>
                </div>
                <div class="article_head_content">
                    <div class="article_caption">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="article_info">
                        <div class="article_date"><?php the_date('j F Y'); ?></div>
                        <div class="article_share img_share">
                            <div id="social-share" style="display: none;">
                                <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                            </div>
                            <span class="share">Поделиться</span>
                            <img id="share-button" src="<?php echo get_template_directory_uri(); ?>/img/share.png" alt="Share">
                        </div>
                    </div>
                    <div class="article_quest">
                        <p>
                            <?= get_post_meta( get_the_ID(), 'article_excerpt_first', true ); ?>
                        </p>
                    </div>
                    <div class="article_intro">
                        <p>
                            <?= get_post_meta( get_the_ID(), 'article_excerpt_second', true ); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="article_text">
<!--                <div class="article_vstavka">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/vstavka.png" alt="Умная мысль">-->
<!--                    <h3>-->
<!--                        Менее 1% сотрудников Google старше 40 лет. Это говорит о том, что-->
<!--                        квалификацию стоит оценивать только по результату, а не по стажу работы.-->
<!--                    </h3>-->
<!--                </div>-->
                <?php the_content(); ?>
            </div>
            <div class="foto-avtor_name">Photo by Daria Shevtsova from Pexels</div>
            <div class="article_pagination">
                <a href="#">
                    <div class="pagination_prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rev-left.png" alt="">
                        <span class="prev_article">Предыдущий пост</span>
                    </div>
                </a>
                <a href="#">
                    <div class="pagination_next">
                        <span class="next_article">Следующий пост</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rev-right.png" alt="">
                    </div>
                </a>
            </div>
            <div class="line"></div>
            <div class="blog_block blog_block_article">
                <?php
                $args = array(
                    'post_type'   => 'article',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
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
                <?php $nextPost = get_next_post(); ?>
                <a href="<?= $nextPost->guid; ?>">
                    <div class="pagination_prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rev-left.png" alt="">
                        <span class="prev_article">Предыдущий пост</span>
                    </div>
                </a>
                <div class="slider_progress rev-pag">
                    <div class="slider_number">01</div>
                    <svg width="144" height="1">
                        <path class="bg_svg" stroke="black" d="M0 10, 144 10"></path>
                        <path class="meter" stroke="#ffc100" d="M0 0, 36 10" style="stroke-dashoffset: 144;"></path>
                    </svg>
                    <div class="slider_number">04</div>
                </div>
                <?php $previousPost = get_previous_post(); ?>
                <a href="<?= $previousPost->guid; ?>">
                    <div class="pagination_next">
                        <span class="next_article">Следующий пост</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rev-right.png" alt="">
                    </div>
                </a>
            </div>
            <a href="/all-articles"><div class="btn btn-grey">Читать все статьи</div></a>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.img_share').on('click', function () {
                $('#social-share').toggle("blind");
                $('#social-share-mobile').toggle("blind");
            });
        });
    </script>
