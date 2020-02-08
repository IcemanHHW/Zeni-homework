<?php
/**
 * Template Name: Posts filter template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main">


    <main id="site-content" role="main">


        <form role="search" method="get" id="filterform" action="">
            <div>
                <input type="submit" id="filtersubmit" value="filter" />
            </div>
        </form>
        <br><br>


        <?php

$args =  [   'date_query' => [     
    [    
        'before'    => [ 
            'year'  => 2019,         
            'month' => 2,         
            'day'   => 14,       
        ],                  
        'after'    => [ 
                    'year'  => 2019,         
                    'month' => 2,         
                    'day'   => 14,       
    ],                  
    'inclusive' => false,     
],   
],   
'posts_per_page' => -1, 
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