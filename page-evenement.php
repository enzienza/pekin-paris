<?php
/* Template Name: evenements */
?>

<?php get_header(); ?>


<!-- START section 1 : cover-page-event -->
<?php
    // SI eventpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('eventpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-event" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('eventpage_cover_affiche_img'), false)){ ?>
                    <!-- SI eventpage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('eventpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('eventpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('eventpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('eventpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('eventpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>


<!-- START section 2 : section-eventpage_message -->
<?php
    // SI eventpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('eventpage_msg_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="page-event-msg" class="container">
            <div class="row justify-content-md-center">
                <div class="card box-msg col-md-8 col-12">
                    <div class="row">
                        <?php if(checked(1, get_option('eventpage_msg_affiche_avatar'), false)){ ?>
                            <!-- SI eventpage_msg_affiche_avatar EST COCHE => Alors on affiche l'avatar -->
                            <div class="col-4">
                                <img src="<?php echo get_option('eventpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-4 -->

                            <div class="col-8">
                                <p class="acchoche"><?php echo get_option('eventpage_msg_txt'); ?></p>
                            </div><!-- / .col-5 -->
                        <?php } else { ?>
                            <div class="col-12" style="padding: 0 13rem;">
                                <p class="acchoche"><?php echo get_option('eventpage_msg_txt'); ?></p>
                            </div><!-- /.col-12 -->
                        <?php } ?>
                    </div><!-- /.row" -->
                </div><!-- /.card .box-msg .col-md-8 .col-12 -->
            </div><!-- /.row .justify-content-md-center -->
        </section><!-- / #page-test-msg -->
        <?php
    }
?>

<!-- START section 3 : carte-event -->
<section id="section-event" class="container">
    <div class="row">

        <!-- DEBUT : region repeter -->
        <?php
            wp_reset_postdata();

            $args = array(
                'post_type'      => 'evenements',    // nom du CPT
                'posts_per_page' => -1,              // limite
                'orderby'        => 'id',
                'order'          => 'ASC'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
        ?>

        <div class="card card-event hovered">
            <div class="img-event">
                <?php the_post_thumbnail(); ?>
            </div><!-- / -->

            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <ul class="info-event">
                    <li class="date">
                        <?php $date = get_post_meta($post->ID, 'date_event', true); if($date != ''){echo date_i18n("j M Y", strtotime($date));} ?>
                        <span>/</span>
                    </li>
                    <li class="heure">
                        <?php echo get_post_meta($post->ID, 'heure_event', true); ?>
                    </li>
                </ul>
                <div class="btn-event">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-light">
                        Voir détail
                    </a>
                </div>
            </div>

        </div><!-- /.col-md-4 .col-12 .card .card-event .hovered -->


        <?php endwhile; endif;  wp_reset_postdata(); ?>
        <!-- FIN : Region repeter -->

    </div><!-- /.row -->
</section><!-- /#section-event -->



<!-- START section 4 : section-reservation -->
<?php
    // SI eventpage_reservation_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('eventpage_reservation_hidden'), false)){
        ?>
        <section class="box-phone text-center">
            <h1>Réserver maintenant</h1>
            <p>
                <?php echo get_option('inforesto_phone'); ?>
            </p>

        </section><!-- /  .bg-event-->
        <?php
    }
?>

<?php get_footer(); ?>
