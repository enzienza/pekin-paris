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
    <h1>Carte à emporter</h1>
    <div class="row">
        <div class="col-3">
            <img src="<?php echo get_option('emporterpage_info_avatar'); ?>" alt="">
        </div><!-- /.col-3 -->

        <div class="col-9">
            <ul>
                <li>
                    <strong><?php echo get_option('emporterpage_promo_reduction'); ?></strong>
                    sur tout les plats à emporter
                </li>
                <li>
                    <strong>
                        <?php echo get_option('emporterpage_promo_offert'); ?> <span> offert</span>
                    </strong>
                    <span>a partir de </span>
                    <span><?php echo get_option('emporterpage_promo_minimum'); ?></span>
                </li>
            </ul>
        </div><!-- /.col-9 -->
    </div><!-- /.row -->

    <!-- region repete => CPT-Emporter -->
    <!-- START : filter - nav-secondaire -->
        <div class="toolbar mb2 mt2">
            <?php
                wp_reset_postdata();

                $args = array(
                    'post_type'      => 'emporters',
                    'posts_per_page' => -1,
                    'orderby'        => 'id',
                    'order'          => 'DESC'
                );
                $my_query = new WP_query($args);
                if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
             ?>

            <button class="btn fil-cat" data-rel="<?php echo get_post_meta($post->ID, 'slug_emporter', true); ?>">
                <img src="<?php echo get_post_meta($post->ID, 'icon-emporter', true); ?>" alt="" style="width: 21px; height 21px;">
                <p><?php the_title(); ?></p>
            </button>

            <?php endwhile; endif;  wp_reset_postdata(); ?>
        </div><!-- / .toolbar .mb2 .mt2 -->



        <!-- START : grille -->
        <div id="portfolio" class="">

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

            <div class="tile scale-anm <?php echo get_post_meta($post->ID, 'slug_emporter', true); ?>" style="background: url('<?php echo get_post_meta($post->ID, 'bg-emporter', true); ?>') ;">
                <h3 class="titre"><?php the_title(); ?></h3>


                <img src="<?php //echo get_post_meta($post->ID, 'icon', true); ?>" alt="">
                <table class="table-carte" >
                    <!-- <thead>
                        <tr class="table-titre">
                            <th class="td-numb">Num.</th>
                            <th class="td-nom">Nom</th>
                            <th class="td-price">Prix</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <?php
                            // $repeatable_fields = get_post_meta($post->ID, 'repeatable_fields', true);
                            // foreach ($repeatable_fields as $field) :

                                ?>
                                    <tr>
                                        <td class="td-numb"><?php //echo $field['numb']; ?></td>
                                        <td class="td-nom"><?php //echo $field['nom']; ?></td>
                                        <td class="td-price"><?php //echo $field['price'];  ?></td>
                                    </tr>
                                <?php
                            // endforeach;
                         ?>
                    </tbody>
                </table>
            </div><!-- / .tile .scale-anm -->
            <?php endwhile; endif;  wp_reset_postdata(); ?>
        </div><!-- / #portfolio -->


</section><!-- / #carte-emporter .container -->


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
