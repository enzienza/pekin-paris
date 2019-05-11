<?php
/* Template Name: contact */
?>

<?php get_header(); ?>

<!-- START section 1 : cover-page-contact -->
<?php
    // SI contactpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('contactpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-contact" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('contactpage_cover_affiche_img'), false)){ ?>
                    <!-- SI contactpage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('contactpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('contactpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('contactpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('contactpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('contactpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>



<!-- START section 2 : section-location -->
<section id="section-location" class="container">
    <h1 class="titre-section">Coordonnées</h1>
    <div class="row">
        <div class="col-md-7 col-12 box-left">
            <?php echo get_option('inforesto_map'); ?>
        </div>
        <div class="col-md-5 col-12 box-right">
            <ul>
                <li class="item-location">
                    <span class="icons flaticon-placeholder"></span>
                    <p><?php echo get_option('inforesto_adresse'); ?></p>
                </li><!-- /.item-location -->
                <li class="item-location">
                    <span class="icons flaticon-phone-call"></span>
                    <p><?php echo get_option('inforesto_phone'); ?></p>
                </li><!-- /.item-location -->
            </ul>
        </div><!-- /.box-right -->
    </div><!-- /.row -->
</section><!-- /#section-location -->

<!-- START section 3 : carte-content -->
<section id="section-horaire" class="container">
    <h1 class="titre-section">Heures d'ouverture</h1>
    <div class="row">
        <div class="col-md-6 col-12 box-left">
            <?php
                // SI contactpage_horaire_affiche_avatar est COCHE
                // => alors on affiche l'avatar
                if(checked(1, get_option('contactpage_horaire_affiche_avatar'), false)){
                    ?>
                        <img src="<?php echo get_option('contactpage_avatar_horaire'); ?>" alt="">
                    <?php
                }
             ?>
        </div><!-- /.box-left -->

        <div class="col-md-6 col-12 box-right">
            <table class="table-horaire">
                <tr class="item-heure">
                    <td class="day">Lundi</td>
                    <?php
                        // SI lundi_fermer est choche
                        // => alors
                        if(checked(1, get_option('lundi_fermer'), false)){
                    ?>
                        <td class="close"><span>FERME</span></td>
                    <?php } else{ ?>
                        <td class="heure">
                            <span><?php echo get_option('lundi_midi_de'); ?></span> - <span><?php echo get_option('lundi_midi_a'); ?></span><br />
                            <span><?php echo get_option('lundi_soir_de'); ?></span> - <span><?php echo get_option('lundi_soir_a'); ?></span>
                        </td>
                    <?php } ?>
                </tr><!--- /.item-heure --->

                <tr class="item-heure">
                    <td class="day">Mardi</td>

                    <?php
                        // SI mardi_fermer est choche
                        // => alors
                        if(checked(1, get_option('mardi_fermer'), false)){
                    ?>
                        <td class="close"><span>FERME</span></td>
                    <?php } else{ ?>
                            <td class="heure">
                                <span><?php echo get_option('mardi_midi_de'); ?></span> - <span><?php echo get_option('mardi_midi_a'); ?></span><br />
                                <span><?php echo get_option('mardi_soir_de'); ?></span> - <span><?php echo get_option('mardi_soir_a'); ?></span>
                            </td>

                    <?php }  ?>
                </tr><!--- /.item-heure --->

                <tr class="item-heure">
                    <td class="day">Mercredi</td>
                    <?php
                        // SI mercredi_fermer est choche
                        // => alors
                        if(checked(1, get_option('mercredi_fermer'), false)){
                    ?>
                        <td class="close"><span>FERME</span></td>
                    <?php } else{ ?>
                        <td class="heure">
                            <span><?php echo get_option('mercredi_midi_de'); ?></span> - <span><?php echo get_option('mercredi_midi_a'); ?></span><br />
                            <span><?php echo get_option('mercredi_soir_de'); ?></span> - <span><?php echo get_option('mercredi_soir_a'); ?></span>
                        </td>
                    <?php } ?>
                </tr><!--- /.item-heure --->

                <tr class="item-heure">
                    <td class="day">Jeudi</td>

                    <?php
                        // SI jeudi_fermer est choche
                        // => alors
                        if(checked(1, get_option('jeudi_fermer'), false)){
                    ?>
                        <td class="close"><span>FERME</span></td>
                    <?php } else{ ?>
                        <td class="heure">
                            <span><?php echo get_option('jeudi_midi_de'); ?></span> - <span><?php echo get_option('jeudi_midi_a'); ?></span><br />
                            <span><?php echo get_option('jeudi_soir_de'); ?></span> - <span><?php echo get_option('jeudi_soir_a'); ?></span>
                        </td>
                    <?php } ?>
                </tr><!--- /.item-heure --->

                <tr class="item-heure">
                    <td class="day">Vendredi</td>

                    <?php
                        // SI vendredi_fermer est choche
                        // => alors
                        if(checked(1, get_option('vendredi_fermer'), false)){
                     ?>
                        <td class="close"><span>FERME</span></td>
                     <?php } else{ ?>
                         <td class="heure">
                            <span><?php echo get_option('vendredi_midi_de'); ?></span> - <span><?php echo get_option('vendredi_midi_a'); ?></span><br />
                            <span><?php echo get_option('vendredi_soir_de'); ?></span> - <span><?php echo get_option('vendredi_soir_a'); ?></span>
                        </td>
                     <?php } ?>
                </tr><!--- /.item-heure --->

                <tr class="item-heure">
                    <td class="day">Samedi</td>
                    <?php
                        // SI samedi_fermer est choche
                        // => alors
                        if(checked(1, get_option('samedi_fermer'), false)){
                    ?>
                        <td class="close"><span>FERME</span></td>
                    <?php } else{ ?>
                        <td class="heure">
                            <span><?php echo get_option('samedi_midi_de'); ?></span> - <span><?php echo get_option('samedi_midi_a'); ?></span><br />
                            <span><?php echo get_option('samedi_soir_de'); ?></span> - <span><?php echo get_option('samedi_soir_a'); ?></span>
                        </td>
                    <?php } ?>
                </tr><!--- /.item-heure --->

                <tr class="item-heure">
                    <td class="day">Dimanche</td>
                    <?php
                        // SI dimanche_fermer est choche
                        // => alors
                        if(checked(1, get_option('dimanche_fermer'), false)){
                    ?>
                        <td class="close"><span>FERME</span></td>
                    <?php } else{ ?>
                        <td class="heure">
                            <span><?php echo get_option('dimanche_midi_de'); ?></span> - <span><?php echo get_option('dimanche_midi_a'); ?></span><br />
                            <span><?php echo get_option('dimanche_soir_de'); ?></span> - <span><?php echo get_option('dimanche_soir_a'); ?></span>
                        </td>
                    <?php } ?>
                </tr><!--- /.item-heure --->

            </table><!-- /.table-horaire -->
        </div><!-- /.box-rigt -->

    </div><!-- /row -->
</section><!-- /section-horaire -->


<?php get_footer(); ?>
