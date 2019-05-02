<?php
/*
Name: Sauvegarde - MB_eleven_service_carte
Pluggin Parent: Service à la carte
Description: Sauvegarde des données de la métabox : eleven_service_carte | Solution Provisoir
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.5.1
*/


function save_MB_eleven_service_carte($POST_ID){
    if(isset($_POST['SC11_titre'])){
        update_post_meta($POST_ID, 'SC11_titre', $_POST['SC11_titre']);
    }

    /* --- ligne 1 --- */
    if(isset($_POST['SC11_L1_numb'])){
        update_post_meta($POST_ID, 'SC11_L1_numb', $_POST['SC11_L1_numb']);
    }
    if(isset($_POST['SC11_L1_nom'])){
        update_post_meta($POST_ID, 'SC11_L1_nom', $_POST['SC11_L1_nom']);
    }
    if(isset($_POST['SC11_L1_price'])){
        update_post_meta($POST_ID, 'SC11_L1_price', $_POST['SC11_L1_price']);
    }

    /* --- ligne 2 --- */
    if(isset($_POST['SC11_L2_numb'])){
        update_post_meta($POST_ID, 'SC11_L2_numb', $_POST['SC11_L2_numb']);
    }
    if(isset($_POST['SC11_L2_nom'])){
        update_post_meta($POST_ID, 'SC11_L2_nom', $_POST['SC11_L2_nom']);
    }
    if(isset($_POST['SC11_L2_price'])){
        update_post_meta($POST_ID, 'SC11_L2_price', $_POST['SC11_L2_price']);
    }

    /* --- ligne 3 --- */
    if(isset($_POST['SC11_L3_numb'])){
        update_post_meta($POST_ID, 'SC11_L3_numb', $_POST['SC11_L3_numb']);
    }
    if(isset($_POST['SC11_L3_nom'])){
        update_post_meta($POST_ID, 'SC11_L3_nom', $_POST['SC11_L3_nom']);
    }
    if(isset($_POST['SC11_L3_price'])){
        update_post_meta($POST_ID, 'SC11_L3_price', $_POST['SC11_L3_price']);
    }

    /* --- ligne 4 --- */
    if(isset($_POST['SC11_L4_numb'])){
        update_post_meta($POST_ID, 'SC11_L4_numb', $_POST['SC11_L4_numb']);
    }
    if(isset($_POST['SC11_L4_nom'])){
        update_post_meta($POST_ID, 'SC11_L4_nom', $_POST['SC11_L4_nom']);
    }
    if(isset($_POST['SC11_L4_price'])){
        update_post_meta($POST_ID, 'SC11_L4_price', $_POST['SC11_L4_price']);
    }

    /* --- ligne 5 --- */
    if(isset($_POST['SC11_L5_numb'])){
        update_post_meta($POST_ID, 'SC11_L5_numb', $_POST['SC11_L5_numb']);
    }
    if(isset($_POST['SC11_L5_nom'])){
        update_post_meta($POST_ID, 'SC11_L5_nom', $_POST['SC11_L5_nom']);
    }
    if(isset($_POST['SC11_L5_price'])){
        update_post_meta($POST_ID, 'SC11_L5_price', $_POST['SC11_L5_price']);
    }

    /* --- ligne 6 --- */
    if(isset($_POST['SC11_L6_numb'])){
        update_post_meta($POST_ID, 'SC11_L6_numb', $_POST['SC11_L6_numb']);
    }
    if(isset($_POST['SC11_L6_nom'])){
        update_post_meta($POST_ID, 'SC11_L6_nom', $_POST['SC11_L6_nom']);
    }
    if(isset($_POST['SC11_L6_price'])){
        update_post_meta($POST_ID, 'SC11_L6_price', $_POST['SC11_L6_price']);
    }

    /* --- ligne 7 --- */
    if(isset($_POST['SC11_L7_numb'])){
        update_post_meta($POST_ID, 'SC11_L7_numb', $_POST['SC11_L7_numb']);
    }
    if(isset($_POST['SC11_L7_nom'])){
        update_post_meta($POST_ID, 'SC11_L7_nom', $_POST['SC11_L7_nom']);
    }
    if(isset($_POST['SC11_L7_price'])){
        update_post_meta($POST_ID, 'SC11_L7_price', $_POST['SC11_L7_price']);
    }

    /* --- ligne 8 --- */
    if(isset($_POST['SC11_L8_numb'])){
        update_post_meta($POST_ID, 'SC11_L8_numb', $_POST['SC11_L8_numb']);
    }
    if(isset($_POST['SC11_L8_nom'])){
        update_post_meta($POST_ID, 'SC11_L8_nom', $_POST['SC11_L8_nom']);
    }
    if(isset($_POST['SC11_L8_price'])){
        update_post_meta($POST_ID, 'SC11_L8_price', $_POST['SC11_L8_price']);
    }

    /* --- ligne 9 --- */
    if(isset($_POST['SC11_L9_numb'])){
        update_post_meta($POST_ID, 'SC11_L9_numb', $_POST['SC11_L9_numb']);
    }
    if(isset($_POST['SC11_L9_nom'])){
        update_post_meta($POST_ID, 'SC11_L9_nom', $_POST['SC11_L9_nom']);
    }
    if(isset($_POST['SC11_L9_price'])){
        update_post_meta($POST_ID, 'SC11_L9_price', $_POST['SC11_L9_price']);
    }

    /* --- ligne 10 --- */
    if(isset($_POST['SC11_L10_numb'])){
        update_post_meta($POST_ID, 'SC11_L10_numb', $_POST['SC11_L10_numb']);
    }
    if(isset($_POST['SC11_L10_nom'])){
        update_post_meta($POST_ID, 'SC11_L10_nom', $_POST['SC11_L10_nom']);
    }
    if(isset($_POST['SC11_L10_price'])){
        update_post_meta($POST_ID, 'SC11_L10_price', $_POST['SC11_L10_price']);
    }








} // END => save_MB_SC11_titre_carte
