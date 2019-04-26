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
