<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


add_action('init',function(){   
	global $wp;    
    $wp->add_query_var('my_param');  
    $wp->add_query_var('e');
    $wp->add_query_var('day_from');
    $wp->add_query_var('month_from');
    $wp->add_query_var('year_from');
    $wp->add_query_var('day_to');
    $wp->add_query_var('month_to');
    $wp->add_query_var('year_to');
    $wp->add_query_var('minimal_rating');
    $wp->add_query_var('maximal_rating');
});

function create_posttype() {
 
    register_post_type( 'book',
        array(
            'labels' => array(
                'name' => __( 'Books' ),
                'singular_name' => __( 'Book' )
            ),
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'comments',
                'revisions',
                'thumbnail',
                'author',
                'page-attributes',),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'books'),
        )
    );

    register_post_type( 'product',
    array(
        'labels' => array(
            'name' => __( 'Products' ),
            'singular_name' => __( 'Product' )
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'custom-fields',
            'page-attributes',),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
    )
);

}

add_action( 'init', 'create_posttype' );