<?php

function MB_two_service_carte($POST){
    wp_nonce_field(basename(__FILE__), 'MB_S2_titre_carte_nonce');
    $S2_titre    = get_post_meta($POST->ID, 'S2_titre', true);

    /* --- ligne 1 --- */
    $S2_L1_numb    = get_post_meta($POST->ID, 'S2_L1_numb', true);
    $S2_L1_nom     = get_post_meta($POST->ID, 'S2_L1_nom', true);
    $S2_L1_price   = get_post_meta($POST->ID, 'S2_L1_price', true);

    /* --- ligne 2 --- */
    $S2_L2_numb    = get_post_meta($POST->ID, 'S2_L2_numb', true);
    $S2_L2_nom     = get_post_meta($POST->ID, 'S2_L2_nom', true);
    $S2_L2_price   = get_post_meta($POST->ID, 'S2_L2_price', true);

    /* --- ligne 3 --- */
    $S2_L3_numb    = get_post_meta($POST->ID, 'S2_L3_numb', true);
    $S2_L3_nom     = get_post_meta($POST->ID, 'S2_L3_nom', true);
    $S2_L3_price   = get_post_meta($POST->ID, 'S2_L3_price', true);

    /* --- ligne 4 --- */
    $S2_L4_numb    = get_post_meta($POST->ID, 'S2_L4_numb', true);
    $S2_L4_nom     = get_post_meta($POST->ID, 'S2_L4_nom', true);
    $S2_L4_price   = get_post_meta($POST->ID, 'S2_L4_price', true);

    /* --- ligne 5 --- */
    $S2_L5_numb    = get_post_meta($POST->ID, 'S2_L5_numb', true);
    $S2_L5_nom     = get_post_meta($POST->ID, 'S2_L5_nom', true);
    $S2_L5_price   = get_post_meta($POST->ID, 'S2_L5_price', true);

    /* --- ligne 6 --- */
    $S2_L6_numb    = get_post_meta($POST->ID, 'S2_L6_numb', true);
    $S2_L6_nom     = get_post_meta($POST->ID, 'S2_L6_nom', true);
    $S2_L6_price   = get_post_meta($POST->ID, 'S2_L6_price', true);

    /* --- ligne 7 --- */
    $S2_L7_numb    = get_post_meta($POST->ID, 'S2_L7_numb', true);
    $S2_L7_nom     = get_post_meta($POST->ID, 'S2_L7_nom', true);
    $S2_L7_price   = get_post_meta($POST->ID, 'S2_L7_price', true);

    /* --- ligne 8 --- */
    $S2_L8_numb    = get_post_meta($POST->ID, 'S2_L8_numb', true);
    $S2_L8_nom     = get_post_meta($POST->ID, 'S2_L8_nom', true);
    $S2_L8_price   = get_post_meta($POST->ID, 'S2_L8_price', true);

    /* --- ligne 9 --- */
    $S2_L9_numb    = get_post_meta($POST->ID, 'S2_L9_numb', true);
    $S2_L9_nom     = get_post_meta($POST->ID, 'S2_L9_nom', true);
    $S2_L9_price   = get_post_meta($POST->ID, 'S2_L9_price', true);

    /* --- ligne 10 --- */
    $S2_L10_numb    = get_post_meta($POST->ID, 'S2_L10_numb', true);
    $S2_L10_nom     = get_post_meta($POST->ID, 'S2_L10_nom', true);
    $S2_L10_price   = get_post_meta($POST->ID, 'S2_L10_price', true);


    ?>
    <div class="" style="margin-bottom: 2rem;">
        <label for="S2_titre">Titre</label>
        <input class="widefat" type="text" id="S2_titre" name="S2_titre" value="<?php echo $S2_titre; ?>">
    </div>

    <table class="table-service" width="100%">
        <thead>
            <tr>
                <th width="15%">Num.</th>
                <th width="60%">Nom</th>
                <th width="15%">Prix</th>
            </tr>
        </thead>

        <tbody>
            <!-- ligne 1 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L1_numb" name="S2_L1_numb" value="<?php echo $S2_L1_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L1_nom" name="S2_L1_nom" value="<?php echo $S2_L1_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L1_price" name="S2_L1_price" value="<?php echo $S2_L1_price; ?>"></td>
            </tr>

            <!-- ligne 2 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L2_numb" name="S2_L2_numb" value="<?php echo $S2_L2_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L2_nom" name="S2_L2_nom" value="<?php echo $S2_L2_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L2_price" name="S2_L2_price" value="<?php echo $S2_L2_price; ?>"></td>
            </tr>

            <!-- ligne 3 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L3_numb" name="S2_L3_numb" value="<?php echo $S2_L3_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L3_nom" name="S2_L3_nom" value="<?php echo $S2_L3_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L3_price" name="S2_L3_price" value="<?php echo $S2_L3_price; ?>"></td>
            </tr>

            <!-- ligne 4 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L4_numb" name="S2_L4_numb" value="<?php echo $S2_L4_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L4_nom" name="S2_L4_nom" value="<?php echo $S2_L4_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L4_price" name="S2_L4_price" value="<?php echo $S2_L4_price; ?>"></td>
            </tr>

            <!-- ligne 5 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L5_numb" name="S2_L5_numb" value="<?php echo $S2_L5_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L5_nom" name="S2_L5_nom" value="<?php echo $S2_L5_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L5_price" name="S2_L5_price" value="<?php echo $S2_L5_price; ?>"></td>
            </tr>

            <!-- ligne 6 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L6_numb" name="S2_L6_numb" value="<?php echo $S2_L6_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L6_nom" name="S2_L6_nom" value="<?php echo $S2_L6_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L6_price" name="S2_L6_price" value="<?php echo $S2_L6_price; ?>"></td>
            </tr>

            <!-- ligne 7 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L7_numb" name="S2_L7_numb" value="<?php echo $S2_L7_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L7_nom" name="S2_L7_nom" value="<?php echo $S2_L7_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L7_price" name="S2_L7_price" value="<?php echo $S2_L7_price; ?>"></td>
            </tr>

            <!-- ligne 8 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L8_numb" name="S2_L8_numb" value="<?php echo $S2_L8_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L8_nom" name="S2_L8_nom" value="<?php echo $S2_L8_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L8_price" name="S2_L8_price" value="<?php echo $S2_L8_price; ?>"></td>
            </tr>

            <!-- ligne 9 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L9_numb" name="S2_L9_numb" value="<?php echo $S2_L9_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L9_nom" name="S2_L9_nom" value="<?php echo $S2_L9_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L9_price" name="S2_L9_price" value="<?php echo $S2_L9_price; ?>"></td>
            </tr>

            <!-- ligne 10 -->
            <tr>
                <td><input class="widefat" type="text" id="S2_L10_numb" name="S2_L10_numb" value="<?php echo $S2_L10_numb; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L10_nom" name="S2_L10_nom" value="<?php echo $S2_L10_nom; ?>"></td>
                <td><input class="widefat" type="text" id="S2_L10_price" name="S2_L10_price" value="<?php echo $S2_L10_price; ?>"></td>
            </tr>


        </tbody>
    </table>

    <?php

} // END => MB_type_cartes
