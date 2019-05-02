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
                            <div class="col-5">
                                <img src="<?php echo get_option('cartepage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-4 -->

                            <div class="col-6">
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
        <section id="section-desc-carte" class="container">
            <h1 class="titre-section">Description</h1>
            <p class="desc-carte"><?php echo get_option('cartepage_desc_txt_content'); ?></p>
        </section>
        <?php
    }
?>

<section id="carte-content" class="container">
    <ul class="nav nav-tabs" >
        <li class="nav-item">
            <a class="nav-link active" id="carte-memu" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="">
                <p>Menu</p>
            </a>
        </li><!-- /.nav-item -->

        <!-- ICI region repete ==> cartes -->
        <?php
            wp_reset_postdata();

            $args = array(
                'post_type'      => 'cartes',
                'posts_per_page' => 4,
                'orderby'        => 'id',
                'order'          => 'ASC'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();


            //echo get_post_meta($post->ID, 'slug_carte', true);
            // id => ...-tab
            // href => #...
            // aria-controls

         ?>

            <li class="nav-item">
                <a class="nav-link " id="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>-tab"
                   data-toggle="tab" href="#<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>"
                   role="tab" aria-controls="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>" aria-selected="true">
                    <img src="<?php echo get_post_meta($post->ID, 'icon-carte', true); ?>" alt="">
                    <p><?php the_title(); ?></p>
                </a>
            </li>

        <?php endwhile; endif;  wp_reset_postdata(); ?>
        <!-- FIN region repete -->


    </ul><!-- /.nav .nav-tabs -->

    <div class="tab-content" id="myTabContent">

        <div id="menu" class="tab-pane fade show active" role="tabpanel" aria-labelledby="carte-memu" style="background-image:url(<?php echo get_option('tableriz_img_bg'); ?>);">
            <div class="bg-opacity">
                <h1 class="titre-section">Menu</h1>

                <div class="row justify-content-md-center">

                    <div id="table-riz" class="card card-menu col-md-9 col-12">

                        <!-- stat : titre -->
                        <div class="titre-card">
                            <h1>Table de riz</h1>
                        </div><!-- /.titre -->

                        <!-- stat :  info-menu-->
                        <div class="info-menu">
                            <p class="prix"><?php echo get_option('tableriz_prix'); ?></p>
                            <ul>
                                <li>Prix par personnne</li>
                                <li>Minimum <?php echo get_option('tableriz_couvert'); ?> couvert</li>
                            </ul>
                        </div><!-- /.info-menu -->

                        <!-- stat : service-1 -->
                        <div class="service-1">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_un_titre'); ?></h2>
                            <p class="content-servive"><?php echo get_option('tableriz_service_un_txt'); ?></p>
                        </div><!-- / .service-1 -->

                        <!-- stat : service-2 -->
                        <div class="service-2">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_deux_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_one'); ?></li>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_two'); ?></li>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_three'); ?></li>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_four'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-2 -->

                        <!-- stat : service-3 -->
                        <div class="service-3">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_trois_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_one'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_two'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_three'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_four'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_five'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-3 -->

                        <!-- stat : service-4 -->
                        <div class="service-4">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_quatre_titre'); ?></h2>
                            <p class="content-servive"><?php echo get_option('tableriz_service_quatre_txt'); ?></p>
                        </div><!-- / .service-4 -->

                    </div><!-- / #table-riz .card .card-menu .col-md-9 .col-12 -->

                    <div id="fondu-chinoise" class="card card-menu col-md-9 col-12">

                        <!-- stat : titre -->
                        <div class="titre-card">
                            <h1>Fondu chinoise</h1>
                        </div><!-- /.titre -->

                        <!-- stat :  info-menu-->
                        <div class="info-menu">
                            <p class="prix"><?php echo get_option('fondu_prix'); ?></p>
                            <ul>
                                <li>Prix par personnne</li>
                                <li>Minimum <?php echo get_option('fondu_couvert'); ?> couvert</li>
                            </ul>
                        </div><!-- /.info-menu -->

                        <!-- stat : service-1 -->
                        <div class="service-1">
                            <h2 class="titre-service"><?php echo get_option('fondu_service_un_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-choix"><?php echo get_option('fondu_service_un_choice_one'); ?></li>
                                    <li class="item-choix"><?php echo get_option('fondu_service_un_choice_two'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-1 -->

                        <!-- stat : service-2 -->
                        <div class="service-2">
                            <h2 class="titre-service"><?php echo get_option('fondu_service_deux_titre'); ?></h2>
                            <div class="content-servive">
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

                        <!-- stat : service-3 -->
                        <div class="service-3">
                            <h2 class="titre-service"><?php echo get_option('fondu_service_tre_titre'); ?></h2>
                            <div class="content-servive">
                                <?php echo get_option('fondu_service_tre_txt'); ?>
                            </div>
                        </div><!-- / .service-3 -->



                    </div><!-- / #table-riz .card .card-menu .col-md-9 .col-12 -->

                </div><!-- / .row .justify-content-md-center -->

            </div><!-- /.bg-opacity -->
        </div><!-- / #menu . tab-pane .fade .show .active-->

        <!-- ICI region retete -->
        <?php
            wp_reset_postdata();

            $args = array(
                'post_type'      => 'cartes',
                'posts_per_page' => 4,
                'orderby'        => 'id',
                'order'          => 'ASC'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
         ?>

         <div class="tab-pane fade" id="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>" role="tabpanel" aria-labelledby="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>-tab" style="background-image: url(<?php echo get_post_meta($post->ID, 'bg-carte', true); ?>);">
             <div class="bg-opacity">
                 <h1 class="titre-section"><?php the_title(); ?></h1>
                 <div class="row justify-content-md-center">
                     <div id="" class="card card-carte col-md-9 col-12">


                         <!-- start : service-1 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_one_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                         $repeat_one_services = get_post_meta($post->ID, 'repeat_one_services', true);
                                         foreach ($repeat_one_services as $field) :

                                             ?>
                                                 <tr class="item-service">
                                                     <td class="num"><?php echo $field['numb_one_service']; ?></td>
                                                     <td class="nom"><?php echo $field['name_one_service']; ?></td>
                                                     <td class="prix"><?php echo $field['price_one_service'];  ?></td>
                                                 </tr>
                                             <?php
                                         endforeach;
                                      ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-1 -->

                         <!-- start : service-2 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_two_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_two_services = get_post_meta($post->ID, 'repeat_two_services', true);
                                     foreach ($repeat_two_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_two_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_two_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_two_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-2 -->

                         <!-- start : service-3 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_three_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_three_services = get_post_meta($post->ID, 'repeat_three_services', true);
                                     foreach ($repeat_three_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_three_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_three_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_three_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-3 -->

                         <!-- start : service-4 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_four_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_four_services = get_post_meta($post->ID, 'repeat_four_services', true);
                                     foreach ($repeat_four_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_four_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_four_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_four_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-4 -->

                         <!-- start : service-5 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_five_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_five_services = get_post_meta($post->ID, 'repeat_five_services', true);
                                     foreach ($repeat_five_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_five_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_five_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_five_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-5 -->

                         <!-- start : service-6 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_six_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_six_services = get_post_meta($post->ID, 'repeat_six_services', true);
                                     foreach ($repeat_six_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_six_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_six_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_six_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-6 -->

                         <!-- start : service-7 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_seven_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_seven_services = get_post_meta($post->ID, 'repeat_seven_services', true);
                                     foreach ($repeat_seven_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_seven_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_seven_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_seven_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-7 -->

                         <!-- start : service-8 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_eight_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_eight_services = get_post_meta($post->ID, 'repeat_eight_services', true);
                                     foreach ($repeat_eight_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_eight_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_eight_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_eight_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-8 -->

                         <!-- start : service-9 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_nine_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_nine_services = get_post_meta($post->ID, 'repeat_nine_services', true);
                                     foreach ($repeat_nine_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_nine_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_nine_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_nine_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-9 -->

                         <!-- start : service-10 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_ten_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_ten_services = get_post_meta($post->ID, 'repeat_ten_services', true);
                                     foreach ($repeat_ten_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_ten_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_ten_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_ten_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-10 -->

                         <!-- start : service-11 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_eleven_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_eleven_services = get_post_meta($post->ID, 'repeat_eleven_services', true);
                                     foreach ($repeat_eleven_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_eleven_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_eleven_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_eleven_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-11 -->

                         <!-- start : service-12 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_twelve_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_twelve_services = get_post_meta($post->ID, 'repeat_twelve_services', true);
                                     foreach ($repeat_twelve_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_twelve_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_twelve_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_twelve_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-12 -->

                         <!-- start : service-13 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_thirteen_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_thirteen_services = get_post_meta($post->ID, 'repeat_thirteen_services', true);
                                     foreach ($repeat_thirteen_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_thirteen_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_thirteen_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_thirteen_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-13 -->

                         <!-- start : service-14 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_fourteen_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_fourteen_services = get_post_meta($post->ID, 'repeat_fourteen_services', true);
                                     foreach ($repeat_fourteen_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_fourteen_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_fourteen_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_fourteen_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-14 -->

                         <!-- start : service-15 -->
                         <div class="service">
                             <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_fifteen_service', true); ?></h2>
                             <table class="table-service">

                                 <tbody>
                                     <?php
                                     $repeat_fifteen_services = get_post_meta($post->ID, 'repeat_fifteen_services', true);
                                     foreach ($repeat_fifteen_services as $field) :

                                         ?>
                                         <tr class="item-service">
                                             <td class="num"><?php echo $field['numb_fifteen_service']; ?></td>
                                             <td class="nom"><?php echo $field['name_fifteen_service']; ?></td>
                                             <td class="prix"><?php echo $field['price_fifteen_service'];  ?></td>
                                         </tr>
                                         <?php
                                     endforeach;
                                     ?>
                                 </tbody>

                             </table>
                         </div><!-- / .service-15 -->

                     </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                 </div><!-- / .row .justify-content-md-center -->

             </div><!-- /.bg-opacity -->
         </div><!-- / #france -->

        <?php endwhile; endif;  wp_reset_postdata(); ?>

    </div><!-- /#myTabContent .tab-content -->
</section><!-- /#carte-content -->


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
