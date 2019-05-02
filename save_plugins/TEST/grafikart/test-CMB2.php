<?php

/*
Plugin Name: test - CMB2
Description:
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.21
*/


add_action( 'cmb2_admin_init', 'koala_register_repeatable_group_field_metabox' );
/**
* Hook in and add a metabox to demonstrate repeatable grouped fields
*/
function koala_register_repeatable_group_field_metabox() {
    $prefix = 'koala_group_';


    //Repeatable Field Groups --------------------------------------------------
    $cmb_group = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => esc_html__( 'Groupe de champ répétable', 'cmb2' ),
        'object_types' => array( 'cartes' ),
        'context'       => 'normal',
        'priority'      => 'default',
    ) );

    // $group_field_id is the field id string, so in this case: $prefix . 'demo'
    $group_field_id = $cmb_group->add_field( array(
        'name' => __( 'group service', 'cmb2' ),
        'id' => $prefix . 'group_field_id',
        'type' => 'group',
        'options' => array(
            'group_title' => 'service{#}',
            'add_button' => 'ajouter un service',
            'remove_button' => 'supprimer le service',
        ),
    ) );

    /** ------------------------------------------------------------------------
    * Group fields works the same, except ids only need
    * to be unique to the group. Prefix is not needed.
    *
    * The parent field's id needs to be passed as the first argument.
    ** -------------------------------------------------------------------------*/

    // $cmb_group->add_group_field( $group_field_id, array(
    //     // 'name'       => esc_html__( 'Titre de l\'entrée', 'cmb2' ),
    //     // 'id'         => 'title',
    //     // 'type'       => 'text',
    //     // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    // ) );


    $cmb_group->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'Titre de l\'entrée', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
    ));

    $cmb_group->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'Liste', 'cmb2' ),
        'id'         => 'list',
        'type'       => 'group',
        'repeating'  => true,
        'title'      => 'item',
        'fields'     => array(
            array(
                'name' => 'nom',
                'id'   => 'nom_id',
                'type' => 'textbox',
                'label'=> 'nom',
            ),
        ),
    ));



}
