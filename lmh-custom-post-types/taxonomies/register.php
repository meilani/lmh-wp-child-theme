<?php 

function lmh_register_room_taxonomy() {
    $labels = array(
        'name' => __( 'Rooms', 'lmh-custom-post-types' ),
        'singular_name' => __( 'Room', 'lmh-custom-post-types' ),
        'add_new_item' => __( 'Add New Room', 'lmh-custom-post-types' )
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_admin_column' => true,
        'show_in_quick_edit' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite' => array( 'hierarchical' => true, 'has_front' => true )
    );

    $post_types = array( 'event' );

    register_taxonomy( 'room', $post_types, $args );
}