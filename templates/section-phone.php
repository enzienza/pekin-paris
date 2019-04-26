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
