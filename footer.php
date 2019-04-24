<!-- ===================== DEBUT FOOTER ===================== -->

<footer  role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 footer-left">
                <h3>Suivez-nous</h3>
                <div class="row">
                    <div class="col align-self-center">

                        <!-- item-carte -->
                        <?php
                        if(checked(1, get_option('yes_facebbok'), false)){
                            ?>
                            <a href="<?php echo(get_option('inforesto_facebook')); ?>" target="_blank">
                                <span class="icons flaticon-facebook"></span>
                            </a>
                            <?php
                        }
                        ?>

                        <!-- item-carte -->
                        <?php
                        if(checked(1, get_option('yes_twitter'), false)){
                            ?>
                            <a href="<?php echo(get_option('inforesto_twitter')); ?>" target="_blank">
                                <span class="icons flaticon-twitter"></span>
                            </a>
                            <?php
                        }
                        ?>

                        <!-- item-carte -->
                        <?php
                        if(checked(1, get_option('yes_instagram'), false)){
                            ?>
                            <a href="<?php echo(get_option('inforesto_instagram')); ?>" target="_blank">
                                <span class="icons flaticon-instagram"></span>
                            </a>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div><!-- / .footer-left -->
            <div class="col-md-6 col-12 footer-right">
                <h3>Mode de paiement</h3>
                <div class="">

                    <!-- item-carte -->
                    <?php
                    if(checked(1, get_option('inforesto_carte_visa'), false)){
                        ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-visa.png' ?>" class="icon-carte" alt="mode de paiement : accepte carte Visa" />
                        </span>
                        <?php
                    }
                    ?>

                    <!-- item-carte -->
                    <?php
                    if(checked(1, get_option('inforesto_carte_mastercard'), false)){
                        ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-mastercard.png' ?>" class="icon-carte" alt="mode de paiement : accepte carte MasterCard" />
                        </span>
                        <?php
                    }
                    ?>

                    <!-- item-carte -->
                    <?php
                    if(checked(1, get_option('inforesto_carte_american'), false)){
                        ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-american-express.png' ?>" class="icon-carte" alt="mode de paiement : accepte carte American Express" />
                        </span>
                        <?php
                    }
                    ?>

                    <!-- item-carte -->
                    <?php
                    if(checked(1, get_option('inforesto_carte_maestro'), false)){
                        ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-maestro.png' ?>" class="icon-carte" alt="mode de paiement : accepte carte Maestro / Bancontact" />
                        </span>
                        <?php
                    }
                    ?>
                </div>
            </div><!-- / .footer-right -->
        </div><!-- / .row -->
    </div><!-- / .container  -->


    <p class="footer-bottom">
        © <?php bloginfo('name'); ?> 2019 |
        Designed by <a href="http://enzalombardo.be/" target="_blank">Enza LOMBARDO</a>
        <!-- All rights reverved -->
    </p><!-- / .footer-bottom -->
</footer>
<!-- ===================== FIN FOOTER ===================== -->
<?php wp_footer(); ?>


<!-- START : Script -->
<script type="text/javascript">
    (function($) {

        $(document).ready(function() {
            // Transition effect for navbar
            $(window).scroll(function() {
                // checks if window is scrolled more than 500px, adds/removes solid class
                if($(this).scrollTop() > 100) {
                    $('.navbar').addClass('solid');
                } else {
                    $('.navbar').removeClass('solid');
                }
            });
        });

    })(jQuery);
</script>




</body>
</html>
