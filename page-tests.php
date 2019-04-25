<?php
/* Template Name: tests */
?>

<?php get_header(); ?>

<!-- START section 1 : cover-page-buffet -->
<?php
    // SI buffetpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-buffet" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('buffetpage_cover_affiche_img'), false)){ ?>
                    <!-- SI buffetpage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('buffetpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>

<!-- START section 2 : section-buffetpage_message -->
<?php
    // SI buffetpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_msg_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="page-buffet-msg" class="container">
            <div class="row justify-content-md-center">
                <div class="card box-msg col-md-8 col-12">
                    <h2><?php echo get_option('buffetpage_msg_titre'); ?></h2>
                    <div class="row">
                        <?php if(checked(1, get_option('buffetpage_msg_affiche_avatar'), false)){ ?>
                            <!-- SI buffetpage_msg_affiche_avatar EST COCHE => Alors on affiche l'avatar -->
                            <div class="col-4">
                                <img src="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-4 -->

                            <div class="col-8">

                                <ul>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                                        <span class="info-element-buffet">entrées froides</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                                        <span class="info-element-buffet">potages</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                                        <span class="info-element-buffet">entrées chaude</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                                        <span>
                                            sortes de plats <br/>
                                            (viandes, volailles, légumes, etc...)
                                        </span class="info-element-buffet">
                                    </li>
                                </ul>

                                <?php if(checked(1, get_option('buffetpage_msn_button'), false)){ ?>
                                     <!-- SI buffetpage_msn_button_img EST COCHE => Alors renvois à la section-tarif-buffet -->
                                    <div class="row justify-content-md-center">
                                        <a href="#section-tarif-buffet" class="btn btn-outline col-9">
                                            Voir nos tarif buffet
                                        </a>
                                    </div>
                                <?php } ?>

                            </div><!-- / .col-5 -->
                        <?php } else { ?>
                            <div class="col-12" style="padding: 0 13rem;">
                                        <ul>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                                                <span class="info-element-buffet">entrées froides</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                                                <span class="info-element-buffet">potages</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                                                <span class="info-element-buffet">entrées chaude</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                                                <span>
                                                    sortes de plats <br/>
                                                    (viandes, volailles, légumes, etc...)
                                                </span class="info-element-buffet">
                                            </li>
                                        </ul>

                                        <?php
                                            // SI buffetpage_msn_button_img EST COCHE
                                            // => Alors renvois à la section-tarif-buffet

                                            if(checked(1, get_option('buffetpage_msn_button'), false)){
                                                ?>
                                                    <div class="row justify-content-md-center">
                                                        <a href="#section-tarif-buffet" class="btn btn-outline col-9">
                                                            Voir nos tarif buffet
                                                        </a>
                                                    </div><!-- /.row .justify-content-md-center -->
                                                <?php
                                            }
                                        ?>
                                    </div><!-- /.col-12 -->
                        <?php } ?>
                    </div><!-- /.row" -->
                </div><!-- /.card .box-msg .col-md-8 .col-12 -->
            </div><!-- /.row .justify-content-md-center -->
        </section><!-- / #page-test-msg -->
        <?php
    }
?>


<!-- START section 3 : section-description-buffet -->
<?php
    // SI buffetpage_desc_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_desc_hidden'), false)) {
        ?><?php
    } else {
        // SINON
        // => Afficher la section
        ?>

        <section id="section-description-buffet" class="container">
            <h2 class="text-center">Description Buffet</h2>
            <div class="row">
                <div class="col-lg-6 col-12 box-left">
                    <div class="description-buffet">
                        <?php echo get_option('buffetpage_desc_txt_content'); ?>
                    </div><!-- ./ description-buffet -->
                </div><!-- ./ box-left -->
                <div class="col-lg-6 col-12 box-right">
                    <div class="row">
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_uno'); ?>" alt="">
                        </div>
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_due'); ?>" alt="Buffet">
                        </div>
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_tre'); ?>" alt="Buffet">
                        </div>
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_quattro'); ?>" alt="Buffet">
                        </div>
                    </div>
                </div><!-- ./ box-right -->
            </div><!-- ./ row -->
        </section><!-- ./ section #buffet -->

        <?php
    }
?>

<!-- START section 4 : section-tarif-buffet -->
<section id="section-tarif-buffet" class="container">
    <h1 class="text-center">Découvrez nos différents tarifs</h1>
    <div class="row box-intro-tarif" style="border: 2px solid purple;">
        <div class="col-md-7 col-12 box-left" style="background: antiquewhite;">
            <p><?php echo get_option('buffetpage_tarif_txt');?></p>
            <p class="catch"><?php echo get_option('buffetpage_tarif_catch');?></p>
        </div><!-- / .col-md-6 .col-12 .box-left -->
        <div class="col-md-5 col-12 box-right" style="background: aliceblue;">
            <img src="<?php echo get_option('avatar_tarif');?>" alt="sans boissons, avec boissons, full boisson">
        </div><!-- / .col-md-6 .col-12 .box-right -->
    </div><!-- / .row -->

    <div class="row box-formule" style="border:2px solid lime;">
        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
                <h3>Sans boissons</h3>
                <div class="card-body">
                    <ul>
                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_apero'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                <span class="info-formule">1 Apéritif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_vin'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                <span class="info-formule">1/2l de vin par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_soft'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                <span class="info-formule">Soft à volonter</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_cafe'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                <span class="info-formule">Thé ou Café</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_digestif'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                <span class="info-formule">1 digestif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- / .card-body -->

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#tarif_sans_midi" aria-expanded="false" aria-controls="tarif_sans_midi">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#tarif_sans_soir" aria-expanded="false" aria-controls="tarif_sans_midi">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->

            </div><!-- / .card.card-tarif -->
        </div><!-- / .col-md-3.col-12 -->

        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
                <h3>Avec boissons</h3>
                <div class="card-body">
                    <ul>
                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_apero'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                <span class="info-formule">1 Apéritif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_vin'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                <span class="info-formule">1/2l de vin par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_soft'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                <span class="info-formule">Soft à volonter</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_cafe'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                <span class="info-formule">Thé ou Café</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_digestif'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                <span class="info-formule">1 digestif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- / .card-bo -->

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#tarif_avec_midi" aria-expanded="false" aria-controls="tarif_avec_midi">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#tarif_avec_soir" aria-expanded="false" aria-controls="tarif_avec_midi">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->

            </div><!-- / .card card-tarif -->
        </div><!-- / .col-md-3.col-12.card.card-tarif -->

        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
                <h3>Full boissons</h3>
                <div class="card-body">
                    <ul>
                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_apero'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                <span class="info-formule">1 Apéritif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_vin'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                <span class="info-formule">1/2l de vin par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_soft'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                <span class="info-formule">Soft à volonter</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_cafe'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                <span class="info-formule">Thé ou Café</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_digestif'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                <span class="info-formule">1 digestif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- / .card-body -->

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#tarif_full_midi" aria-expanded="false" aria-controls="tarif_full_midi">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#tarif_full_soir" aria-expanded="false" aria-controls="tarif_full_midi">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->

            </div><!-- / .card card-tarif -->
        </div><!-- / .col-md-3.col-12 -->
    </div><!-- / .row -->


    <!-- START : collapse-sans-midi -->
    <div id="collapse-sans-midi" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="tarif_sans_midi">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet sans boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include -->
                </div>
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du midi</h2>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div>
            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-sans-midi -->

    <!-- STAT : collapse-sans-soir -->
    <div id="collapse-sans-soir" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="tarif_sans_soir">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet sans boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('sans_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include  -->
                </div><!-- / .box-collapse-left -->
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du soir</h2>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .box-collapse-right -->

            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-sans-soir -->

    <!-- START : collapse-avec-midi -->
    <div id="collapse-avec-midi" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="tarif_avec_midi">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet avec boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include -->
                </div>
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du midi</h2>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_lundi_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_lundi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_mardi_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_mardi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_mercredi_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_mercredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_jeudi_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_jeudi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_vendredi_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_vendredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_samedi_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_samedi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_dimanche_fermer'), false)){
                                    ?>
                                    <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="prix"><?php echo get_option('avec_dimanche_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div>
            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-avec-midi -->

    <!-- STAT : collapse-avec-soir -->
    <div id="collapse-avec-soir" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="tarif_avec_soir">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet avec boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include  -->
                </div><!-- / .box-collapse-left -->
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du soir</h2>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .box-collapse-right -->
            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-avec-soir -->

    <!-- START : collapse-full-midi -->
    <div id="collapse-full-midi" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="tarif_full_midi">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet full boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include -->
                </div>
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du midi</h2>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_lundi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mardi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mercredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_jeudi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_vendredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_samedi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_dimanche_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div>
            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-full-midi -->

    <!-- STAT : collapse-full-soir -->
    <div id="collapse-full-soir" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="tarif_full_soir">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet full boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('full_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include  -->
                </div><!-- / .box-collapse-left -->
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du soir</h2>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_lundi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mardi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mercredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_jeudi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_vendredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_samedi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_dimanche_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .box-collapse-right -->

            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-full-soir -->

</section><!-- / #section-tarif-buffet -->













<!-- START section 5 : section-reservation -->
<?php if(checked(1, get_option('buffetpage_reservation_hidden'), false)){ ?>
     <!-- SI buffetpage_reservation_hidden EST COCHE => Alors il n'y a pas de section -->
    <section class="box-phone text-center">
        <h1>Réserver maintenant</h1>
        <p>
            <?php echo get_option('inforesto_phone'); ?>
        </p>

    </section><!-- /  .bg-buffet-->
<?php } ?>

<?php get_footer(); ?>
