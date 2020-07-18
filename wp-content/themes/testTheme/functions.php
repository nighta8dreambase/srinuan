<?php

    function simple_theme_setup() {
        //Feature Image support
        add_theme_support( 'post-thumbnails' );

        //Menu setting
        register_nav_menus( array(
            'primary' => __( 'Primary Menu')
        ));
    }
    add_action('after_setup_theme', 'simple_theme_setup');

    // EXcrept Length
    function set_excerpt_length() {
        return 10;
    }

    add_filter('excerpt_length','set_excerpt_length');

    // Wiget Location
    function init_widget($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="side_widget">',
            'after_widget' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_action('widgets_init', 'init_widget');

?>