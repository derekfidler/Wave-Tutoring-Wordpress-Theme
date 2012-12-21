<?php
    // Add RSS links to <head> section
    automatic_feed_links();
    
    // Load jQuery
    if ( !function_exists(core_mods) ) {
        function core_mods() {
            if ( !is_admin() ) {
                wp_deregister_script('jquery');
                wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.js"), false);
                wp_enqueue_script('jquery');
            }
        }
        core_mods();
    }

    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array( 
            "menu" => "Main Navigation",
            "footer-menu" => "Footer Navigation"
     ) ); 
?>