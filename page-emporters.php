<?php
/* Template Name: emporters */
?>

<?php get_header(); ?>

<!-- START section 1 : cover-page-emporter -->
<?php
    // SI emporterpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('emporterpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-emporter" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('emporterpage_cover_affiche_img'), false)){ ?>
                    <!-- SI emporterpage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('emporterpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('emporterpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('emporterpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('emporterpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('emporterpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>

<!-- START section 2 : section-emporterpage_message -->
<?php
    // SI emporterpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('emporterpage_msg_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="page-emporter-msg" class="container">
            <div class="row justify-content-md-center">
                <div class="card box-msg col-md-8 col-12">
                    <h2><?php echo get_option('emporterpage_msg_titre'); ?></h2>
                    <div class="row">
                        <?php if(checked(1, get_option('emporterpage_msg_affiche_avatar'), false)){ ?>
                            <!-- SI emporterpage_msg_affiche_avatar EST COCHE => Alors on affiche l'avatar -->

                            <div class="col-6">
                                <p class="acchoche"><?php echo get_option('emporterpage_msg_txt'); ?></p>
                            </div><!-- / .col-6 -->

                            <div class="col-6">
                                <img src="<?php echo get_option('emporterpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-6 -->

                        <?php } else { ?>
                            <div class="col-12" style="padding: 0 13rem;">
                                <p class="acchoche"><?php echo get_option('emporterpage_msg_txt'); ?></p>
                            </div><!-- /.col-12 -->
                        <?php } ?>
                    </div><!-- /.row" -->
                </div><!-- /.card .box-msg .col-md-8 .col-12 -->
            </div><!-- /.row .justify-content-md-center -->
        </section><!-- / #page-test-msg -->
        <?php
    }
?>

<!-- START section 3 : carte-emporter -->
<section id="carte-emporter" class="container">
    <h1 class="titre-section">Carte à emporter</h1>

    <div id="info-carte-emporter" class="row justify-content-md-center">
        <div class="col-md-10 col-12">

            <div class="row info-emporter">
                <div class="col-5">
                    <img src="<?php echo get_option('emporterpage_info_avatar'); ?>" alt="">
                </div><!-- /.col-3 -->

                <div class="col-7">
                    <ul>
                        <li>
                            <strong class="strong-color"><?php echo get_option('emporterpage_promo_reduction'); ?></strong>
                            <span>sur tout les plats à emporter</span>
                        </li>
                        <li>
                            <strong class="strong-color">
                                <?php echo get_option('emporterpage_promo_offert'); ?> offert
                            </strong>
                            <span>a partir de </span>
                            <span><?php echo get_option('emporterpage_promo_minimum'); ?></span>
                        </li>
                    </ul>
                </div><!-- /.col-9 -->
            </div>

        </div><!-- /.col-md-10 col-12 -->
    </div><!-- /.row .justify-content-md-center -->

    <div id="type-emporter" class="row justify-content-md-center">
        <div class="col-md-10 col-12">
            <div class="row">

                <div class="col-5 box-entre">
                    <h2 class="titre-type-emporter">Entrées</h2>

                    <div class="row toolbar mb2 mt2">
                        <!-- START region repete -->

                        <?php
                            wp_reset_postdata();

                            $args = array(
                                'post_type'      => 'emporters',
                                'posts_per_page' => -1,
                                'orderby'        => 'id',
                                'order'          => 'ASC',
                                'meta_key'       => 'type',     // uniquement ceux qui on la mise en avant en 'oui'
                                'meta_value'     => 'entree'
                            );
                            $my_query = new WP_query($args);
                            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                        ?>

                            <div class="col-3 btn btn-filter fil-cat" data-rel="<?php echo get_post_meta($post->ID, 'slug_emporter', true); ?>">
                                <img src="<?php echo get_post_meta($post->ID, 'icon-emporter', true); ?>" alt="<?php the_title(); ?>" >
                                <p><?php the_title(); ?></p>
                            </div>


                        <?php endwhile; endif;  wp_reset_postdata(); ?>
                        <!-- END region repete -->
                    </div>

                </div><!-- /.col-5 .box-entre -->


                <div class="col-7 box-plat">
                    <h2 class="titre-type-emporter">Plats</h2>

                    <div class="row toolbar mb2 mt2">
                        <!-- START region repete -->
                        <?php
                            wp_reset_postdata();

                            $args = array(
                                'post_type'      => 'emporters',
                                'posts_per_page' => -1,
                                'orderby'        => 'id',
                                'order'          => 'ASC',
                                'meta_key'       => 'type',     // uniquement ceux qui on la mise en avant en 'oui'
                                'meta_value'     => 'plat'
                            );
                            $my_query = new WP_query($args);
                            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                        ?>

                            <div class="col-2 btn btn-filter fil-cat" data-rel="<?php echo get_post_meta($post->ID, 'slug_emporter', true); ?>">
                                <img src="<?php echo get_post_meta($post->ID, 'icon-emporter', true); ?>" alt="<?php the_title(); ?>" >
                                <p><?php the_title(); ?></p>
                            </div>


                        <?php endwhile; endif;  wp_reset_postdata(); ?>
                        <!-- END region repete -->
                    </div>

                </div><!-- /.col-7. box-plat -->

            </div><!-- /.row -->
        </div><!-- /.col-md-10 .col-12 -->



        <div id="portfolio" class="col-md-10 col-12">
            <!-- STAR : region repete -->
            <?php
                wp_reset_postdata();

                $args = array(
                    'post_type'      => 'emporters',
                    'posts_per_page' => -1,
                    'orderby'        => 'id'
                );
                $my_query = new WP_query($args);
                if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
             ?>

                <div class="tile scale-anm <?php echo get_post_meta($post->ID, 'slug_emporter', true); ?>">
                <div class="row">
                    <div class="col-5 box-titre">
                        <h2><?php the_title(); ?></h2>
                        <div class="img-choix">
                            <img src="<?php echo get_post_meta($post->ID, 'bg-emporter', true); ?>" alt="">
                        </div>
                    </div><!-- /. -->
                    <div class="col-7 box-table">
                        <table class="table-emporter">
                            <tbody>
                                <!-- debut foreach -->
                                <tr>
                                    <td class="td-numb">00</td>
                                    <td class="td-name">Lorem ipsum dolor sit.</td>
                                    <td class="td-price">5,50€</td>
                                </tr>

                                <tr>
                                    <td class="td-numb">00</td>
                                    <td class="td-name">Lorem ipsum dolor sit.</td>
                                    <td class="td-price">5,50€</td>
                                </tr>

                                <tr>
                                    <td class="td-numb">00</td>
                                    <td class="td-name">Lorem ipsum dolor sit.</td>
                                    <td class="td-price">5,50€</td>
                                </tr>

                                <tr>
                                    <td class="td-numb">00</td>
                                    <td class="td-name">Lorem ipsum dolor sit.</td>
                                    <td class="td-price">5,50€</td>
                                </tr>

                                <tr>
                                    <td class="td-numb">00</td>
                                    <td class="td-name">Lorem ipsum dolor sit.</td>
                                    <td class="td-price">5,50€</td>
                                </tr>

                                <!-- end foreach -->
                            </tbody>
                        </table>
                    </div><!-- /. -->

                </div><!-- /.row -->
            </div><!-- /.col-md-10 .col-12 -->


            <?php endwhile; endif;  wp_reset_postdata(); ?>
            <!-- END : region repete -->
        </div>


    </div><!-- / #type-emporter -->

</section><!-- /#carte-empporter -->


<!-- START section 4 : section-commande -->
<?php
    // SI emporterpage_reservation_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('emporterpage_commander_hidden'), false)){
        ?>
        <section class="box-phone text-center">
            <h1>Passer commande</h1>
            <p>
                <?php echo get_option('inforesto_phone'); ?>
            </p>

        </section><!-- /  .bg-emporter-->
        <?php
    }
?>

<!-- START section 5 : emporter-emporter -->
<section id="emporter-emporter" class="container">
    <div class="text-center">
        <h1>emporter à emporter</h1>
        <p>faites votre choix dans les entrées et plats préparés</p>
    </div>

    <div class="row">
        <div class="col-md-7 col-12 box-left">
            <ul>

                    <!-- item-emporter-takeaway -->
                <li class="item-emporter-takeaway row">
                    <div class="col-4">
                        <img src="<?php echo get_option('emporterpage_formule_uno'); ?>" alt="">
                    </div>

                    <div class="col-5">
                        <p><?php echo get_option('txt_barquette_uno'); ?></p>
                    </div>

                    <div class="col-3">
                        <p class="prix"><?php echo get_option('prix_barquete_uno'); ?></p>
                    </div>

                </li><!-- /.item-emporter-takeaway -->

                <!-- item-emporter-takeaway -->
                <li class="item-emporter-takeaway row">
                    <div class="col-4">
                        <img src="<?php echo get_option('emporterpage_formule_due'); ?>" alt="">
                    </div>

                    <div class="col-5">
                        <p><?php echo get_option('txt_barquette_due'); ?></p>
                    </div>

                    <div class="col-3">
                        <p class="prix"><?php echo get_option('prix_barquette_due'); ?></p>
                    </div>

                </li><!-- /.item-emporter-takeaway -->

                <!-- item-emporter-takeaway -->
                <li class="item-emporter-takeaway row">
                    <div class="col-4">
                        <img src="<?php echo get_option('emporterpage_formule_tre'); ?>" alt="">
                    </div>

                    <div class="col-5">
                        <p><?php echo get_option('txt_barquette_tre'); ?></p>
                    </div>

                    <div class="col-3">
                        <p class="prix"><?php echo get_option('prix_barquette_tre'); ?></p>
                    </div>

                </li><!-- /.item-emporter-takeaway -->
            </ul>
        </div><!-- /.box-left -->
        <div class="col-md-5 box-right">
            <img src="<?php echo get_option('emporter_emporter_avatar'); ?>" alt="">
        </div><!-- /.box-right -->
    </div><!-- /.row -->

</section><!-- / #emporter-emporter .container -->

<?php get_footer(); ?>
