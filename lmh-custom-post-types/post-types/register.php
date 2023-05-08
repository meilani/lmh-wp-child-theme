<?php 

function lmh_register_event_type() {
    $labels = array(
        'name' => __( 'Events', 'lmh-custom-post-types' ),
        'singular_name' => __( 'Event', 'lmh-custom-post-types' ),
        'featured_image' => __( 'Event Flyer', 'lmh-custom-post-types' ),
        'set_featured_image' => __( 'Set Event Flyer', 'lmh-custom-post-types' ),
        'remove_featured_image' => __( 'Remove Event Flyer', 'lmh-custom-post-types' ),
        'use_featured_image' => __( 'Use Event Flyer', 'lmh-custom-post-types' ),
        'archives' => __( 'Event Listings', 'lmh-custom-post-types' ),
        'add_new' => __( 'Add New Event', 'lmh-custom-post-types' ),
        'add_new_item' => __( 'Add New Event', 'lmh-custom-post-types' )
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'events',
        'rewrite' => array( 'has_front' => true ),
        'menu_icon' => 'dashicons-tickets',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true
    );

    register_post_type( 'event', $args);
}

function lmh_register_speaker_type() {
    $labels = array(
        'name' => __( 'Speakers', 'lmh-custom-post-types' ),
        'singular_name' => __( 'Speaker', 'lmh-custom-post-types' ),
        'featured_image' => __( 'Headshot', 'lmh-custom-post-types' ),
        'set_featured_image' => __( 'Set Headshot', 'lmh-custom-post-types' ),
        'remove_featured_image' => __( 'Remove Headshot', 'lmh-custom-post-types' ),
        'use_featured_image' => __( 'Use Headshot', 'lmh-custom-post-types' ),
        'archives' => __( 'Speakers', 'lmh-custom-post-types' ),
        'add_new' => __( 'Add New Speaker', 'lmh-custom-post-types' ),
        'add_new_item' => __( 'Add New Speaker', 'lmh-custom-post-types' )
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'speakers',
        'rewrite' => array( 'has_front' => true ),
        'menu_icon' => 'dashicons-businessperson',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true
    );

    register_post_type( 'speaker', $args);
}