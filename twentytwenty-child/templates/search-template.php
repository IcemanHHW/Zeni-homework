<?php
/**
 * Template Name: Search template
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


        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/search-query' ); ?>">
            <div><label class="screen-reader-text" for="s">Search for:</label>
                <input type="text" value="" placeholder="search term" name="s" id="s" />
                <input type="text" value="" placeholder="exlude" name="e" id="e" />
                <input type="submit" id="searchsubmit" value="Search" />
            </div>
        </form>
        <br><br>


        <?php

$search_term = $_GET['s'];
$exclude = $_GET['e'];

$args = array(  
    's' => $search_term,
    'e' => $exclude,
);


$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 
    print the_title() ?> <br><br> <?php; 
    the_excerpt(); 
endwhile;

wp_reset_postdata(); 
?>


    </main><!-- #site-content -->

    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

    <?php get_footer(); ?>