<?php
/* Template Name: cartes */
?>

<?php get_header(); ?>


<!-- START section 1 : cover-page-carte -->
<?php
    // SI cartepage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('cartepage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-carte" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('cartepage_cover_affiche_img'), false)){ ?>
                    <!-- SI cartepage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('cartepage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('cartepage_cover_titre'); ?></h1>
                            <p><?php echo get_option('cartepage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('cartepage_cover_titre'); ?></h1>
                            <p><?php echo get_option('cartepage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>


<!-- START section 2 : section-cartepage_message -->
<?php
    // SI cartepage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('cartepage_msg_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="page-carte-msg" class="container">
            <div class="row justify-content-md-center">
                <div class="card box-msg col-md-8 col-12">
                    <h2><?php echo get_option('cartepage_msg_titre'); ?></h2>
                    <div class="row">
                        <?php if(checked(1, get_option('cartepage_msg_affiche_avatar'), false)){ ?>
                            <!-- SI cartepage_msg_affiche_avatar EST COCHE => Alors on affiche l'avatar -->
                            <div class="col-4">
                                <img src="<?php echo get_option('cartepage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-4 -->

                            <div class="col-8">
                                <ul>
                                    <?php if(checked(1, get_option('cartepage_mgs_chinois'), false)){ ?>
                                        <!-- SI cartepage_mgs_chinois EST COCHE => alors on affiche -->
                                        <li>Chinoise</li>
                                    <?php } ?>

                                    <?php if(checked(1, get_option('cartepage_mgs_france'), false)){ ?>
                                        <!-- SI cartepage_mgs_france EST COCHE => alors on affiche -->
                                        <li>Française</li>
                                    <?php } ?>

                                    <?php if(checked(1, get_option('cartepage_mgs_thai'), false)){ ?>
                                        <!-- SI cartepage_mgs_thai EST COCHE => alors on affiche -->
                                        <p>Thaïlandaise</p>
                                    <?php } ?>

                                </ul>

                            </div><!-- / .col-5 -->

                        <?php } else { ?>
                            <div class="col-12" style="padding: 0 13rem;">
                                <ul>
                                    <?php if(checked(1, get_option('cartepage_mgs_chinois'), false)){ ?>
                                        <li>Chinoise</li>
                                    <?php } ?>

                                    <?php if(checked(1, get_option('cartepage_mgs_france'), false)){ ?>
                                        <li>Française</li>
                                    <?php } ?>

                                    <?php if(checked(1, get_option('cartepage_mgs_thai'), false)){ ?>
                                        <p>Thaïlandaise</p>
                                    <?php } ?>

                                </ul>
                            </div><!-- /.col-12 -->
                        <?php } ?>
                    </div><!-- /.row" -->
                </div><!-- /.card .box-msg .col-md-8 .col-12 -->
            </div><!-- /.row .justify-content-md-center -->
        </section><!-- / #page-test-msg -->
        <?php
    }
?>






<!-- START section 3 : description -->
<?php
    // SI cartepage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('cartepage_desc_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section class="container section-desc-carte">
            <h1 class="text-center">Description</h1>
            <p><?php echo get_option('cartepage_desc_txt_content'); ?></p>
        </section>
        <?php
    }
?>

<!-- START section 4 : carte-content -->
<section id="carte-content" class="container">
    <!-- START : filter - nav-secondaire -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="carte-memu"
            data-toggle="tab" href="#menu" role="tab" aria-controls="menu"
            aria-selected="true">
            <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" style="width: 21px; height 21px;">
            <p>Menu</p>
        </a>
    </li>
    <!-- region repete ici -->
    <?php
    wp_reset_postdata();

    $args = array(
        'post_type'      => 'cartes',
        'posts_per_page' => 5,
        'orderby'        => 'id',
        'order'          => 'DESC'
    );
    $my_query = new WP_query($args);
    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
    ?>

    <li class="nav-item">
        <a class="nav-link" id="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>-tab"
            data-toggle="tab" href="#<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>"
            role="tab" aria-controls="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>"
            aria-selected="false">
            <img src="<?php echo get_post_meta($post->ID, 'icon-carte', true); ?>" alt="" style="width: 21px; height 21px;">
            <p><?php the_title(); ?></p>
        </a>
    </li>

<?php endwhile; endif;  wp_reset_postdata(); ?>

</ul><!-- / .nav nav-tabs -->



<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="carte-memu">

        <h1>Menu</h1>

        <div id="table-riz" class="card card-menu">
            <div class="">
                <img src="<?php echo get_option('tableriz_img_bg'); ?>" alt="">
            </div>
            <h1>Table de riz</h1>
            <div class="box-info">
                <p class="prix"><?php echo get_option('tableriz_prix'); ?></p>
                <ul>
                    <li>Prix par personnne</li>
                    <li>Minimum <?php echo get_option('tableriz_couvert'); ?> couvert</li>
                </ul>
            </div><!-- / .box-info -->

            <div class="service-1">
                <h2><?php echo get_option('tableriz_service_un_titre'); ?></h2>
                <p class="content-servive-1"><?php echo get_option('tableriz_service_un_txt'); ?></p>
            </div><!-- / .service-1 -->

            <div class="service-2">
                <h2><?php echo get_option('tableriz_service_deux_titre'); ?></h2>
                <div class="content-servive-2">
                    <ul>
                        <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_one'); ?></li>
                        <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_two'); ?></li>
                        <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_three'); ?></li>
                        <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_four'); ?></li>
                    </ul>
                </div>
            </div><!-- / .service-2 -->


            <div class="service-3">
                <h2><?php echo get_option('tableriz_service_trois_titre'); ?></h2>
                <div class="content-servive-3">
                    <ul>
                        <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_one'); ?></li>
                        <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_two'); ?></li>
                        <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_three'); ?></li>
                        <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_four'); ?></li>
                        <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_five'); ?></li>
                    </ul>
                </div>
            </div><!-- / .service-3 -->


            <div class="service-4">
                <h2><?php echo get_option('tableriz_service_quatre_titre'); ?></h2>
                <p class="content-servive-4"><?php echo get_option('tableriz_service_quatre_txt'); ?></p>
            </div><!-- / .service-4 -->

        </div><!-- / #table-riz .card-menu -->

        <div id="fondu-chinoise" class="card card-menu">
            <div class="">
                <img src="<?php echo get_option('fondu_img_bg'); ?>" alt="">
            </div>
            <h1>Fondu chinoise</h1>
            <div class="box-info">
                <p class="prix"><?php echo get_option('fondu_prix'); ?></p>
                <ul>
                    <li>Prix par personnne</li>
                    <li>Minimum <?php echo get_option('fondu_couvert'); ?> couvert</li>
                </ul>
            </div><!-- / .box-info -->

            <div class="service-1">
                <h2><?php echo get_option('fondu_service_un_titre'); ?></h2>
                <div class="content-servive-2">
                    <ul>
                        <li class="item-choix"><?php echo get_option('fondu_service_un_choice_one'); ?></li>
                        <li class="item-choix"><?php echo get_option('fondu_service_un_choice_two'); ?></li>
                    </ul>
                </div>
            </div><!-- / .service-1 -->


            <div class="service-2">
                <h2><?php echo get_option('fondu_service_deux_titre'); ?></h2>
                <div class="content-servive-3">
                    <ul>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_one'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_two'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_three'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_four'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_five'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_six'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_seven'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_eight'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_nine'); ?></li>
                        <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_ten'); ?></li>
                    </ul>
                </div>
            </div><!-- / .service-2 -->


            <div class="service-3">
                <h2><?php echo get_option('fondu_service_tre_titre'); ?></h2>
                <p class="content-servive-4"><?php echo get_option('fondu_service_tre_txt'); ?></p>
            </div><!-- / .service-3 -->

        </div><!-- / #fondu-chinoise .card-menu -->

    </div><!-- / #mennu .tab-pane -->


    <!-- region retete ici -->
    <?php
    wp_reset_postdata();

    $args = array(
        'post_type'      => 'cartes',
        'posts_per_page' => 5,
        'orderby'        => 'id',
        'order'          => 'DESC'
    );
    $my_query = new WP_query($args);
    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
    ?>


    <div class="tab-pane fade" id="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>" role="tabpanel" aria-labelledby="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>-tab">
        <div class="bg-img-cuisine">
            <h1><?php the_title(); ?></h1>
            <div class="">
                <img src="<?php echo get_post_meta($post->ID, 'bg-carte', true); ?>" alt="<?php the_title(); ?>" />
            </div>
        </div>
    </div>

<?php endwhile; endif;  wp_reset_postdata(); ?>

</div><!-- / .tab-content -->


</section>


<!-- START section 5 : section-reservation -->
<?php
// SI cartepage_reservation_hidden EST COCHE
// => Alors il n'y a pas de section

if(checked(1, get_option('cartepage_reservation_hidden'), false)){
    ?>
    <section class="box-phone text-center">
        <h1>Réserver maintenant</h1>
        <p>
            <?php echo get_option('inforesto_phone'); ?>
        </p>

    </section><!-- /  .bg-carte-->
    <?php
}
?>

<?php get_footer(); ?>
