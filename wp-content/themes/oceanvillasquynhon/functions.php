<?php
require get_template_directory() . '/inc/polylang_custom_language_switcher.php';

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


// Source: https://wordpress.org/plugins/show-modified-date-in-admin-lists/
// Register Modified Date Column for both posts & pages
function modified_column_register( $columns ) {
    $columns['Modified'] = __( 'Modified Date', 'show-modified-date-in-admin-lists' );
    return $columns;
}
add_filter( 'manage_posts_columns', 'modified_column_register' );
add_filter( 'manage_pages_columns', 'modified_column_register' );
add_filter( 'manage_media_columns', 'modified_column_register' );

function modified_column_display( $column_name, $post_id ) {
    switch ( $column_name ) {
        case 'Modified':
            global $post;
            echo '<div class="mod-date">Modified</div>';
            echo '<div>'.get_the_modified_date('Y/m/d').' at '.get_the_modified_time().'</div>';
            if ( !empty( get_the_modified_author() ) ) {
                echo '<small>' . esc_html__( 'by', 'show-modified-date-in-admin-lists' ) . ' <strong>'.get_the_modified_author().'<strong></small>';
            } else {
                echo '<small>' . esc_html__( 'by', 'show-modified-date-in-admin-lists' ) . ' <strong>' . esc_html__( 'UNKNOWN', 'show-modified-date-in-admin-lists' ) . '<strong></small>';
            }
            break; // end all case breaks
    }
}
add_action( 'manage_posts_custom_column', 'modified_column_display', 10, 2 );
add_action( 'manage_pages_custom_column', 'modified_column_display', 10, 2 );
add_action( 'manage_media_custom_column', 'modified_column_display', 10, 2 );

function modified_column_register_sortable( $columns ) {
    $columns['Modified'] = 'modified';
    return $columns;
}
add_filter( 'manage_edit-post_sortable_columns', 'modified_column_register_sortable' );
add_filter( 'manage_edit-page_sortable_columns', 'modified_column_register_sortable' );
add_filter( 'manage_upload_sortable_columns', 'modified_column_register_sortable' );

function the_excerpt_limited( $charlength, $excerpt ){
    //$excerpt = get_the_excerpt();

    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '[...]';
    }
    else {
        echo $excerpt;
    }
}