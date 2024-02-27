<?php

if (!function_exists('oceanvillasquynhon_setup_themes')):
    function oceanvillasquynhon_setup_themes(){

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        add_post_type_support( 'page', 'excerpt' );
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
    }
endif;
add_action('after_setup_theme', 'oceanvillasquynhon_setup_themes');