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
