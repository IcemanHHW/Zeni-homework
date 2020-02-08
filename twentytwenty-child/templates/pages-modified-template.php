<?php
/**
 * Template Name: Pages modified template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main">

    <?php

$args =  
[   'date_query' => [     
    [      
        'before'    => [ 
                    'year'  => 2019,         
                    'month' => 1,         
                    'day'   => 1,       
                 ], 
                ], 
    ],  
    [                  
        [  
            'column' => 'post_modified_gmt',     
            'before'    => [ 
                        'year'  => 2020,         
                        'month' => 1,         
                        'day'   => 1,       
                     ], 
                    ],     
    ], 
    'post_type' => 'page',
    'post_status' => 'draft',
    'posts_per_page' => 7,
    'offset' => 2, 
];


$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_date(); ?></p>
    <p><?php the_excerpt(); ?> </p>
    <?php
endwhile;

wp_reset_postdata(); 
?>



</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>