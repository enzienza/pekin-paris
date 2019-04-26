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
