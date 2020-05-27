<?php
/**
 * Template Name: Page filter template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

/* from data */
$day_from = intval( $_GET['day_from'] );
$month_from = intval( $_GET['month_from'] );
$year_from = intval( $_GET['year_from'] );

/* to data */
$day_to = intval( $_GET['day_to'] );
$month_to = intval( $_GET['month_to'] );
$year_to = intval( $_GET['year_to'] );

/* rating data */
$minimal_rating = intval( $_GET['minimal_rating'] );
$maximal_rating = intval( $_GET['maximal_rating'] );

/* order by data */
$page_rating_order = sanitize_text_field( $_GET['page_rating_order'] );

get_header();
?>

<main id="site-content" role="main">

    <form role="search" method="get" id="filterform" action="/page-filter-query">
        <div>
            <p>Select from date:</p>
            <select name="day_from">
                <option value="1" <?php if (1 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>1</option>
                <option value="2" <?php if (2 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>2</option>
                <option value="3" <?php if (3 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>3</option>
                <option value="4" <?php if (4 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>4</option>
                <option value="5" <?php if (5 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>5</option>
                <option value="6" <?php if (6 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>6</option>
                <option value="7" <?php if (7 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>7</option>
                <option value="8" <?php if (8 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>8</option>
                <option value="9" <?php if (9 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>9</option>
                <option value="10" <?php if (10 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>10</option>
                <option value="11" <?php if (11 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>11</option>
                <option value="12" <?php if (12 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>12</option>
                <option value="13" <?php if (13 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>13</option>
                <option value="14" <?php if (14 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>14</option>
                <option value="15" <?php if (15 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>15</option>
                <option value="16" <?php if (16 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>16</option>
                <option value="17" <?php if (17 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>17</option>
                <option value="18" <?php if (18 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>18</option>
                <option value="19" <?php if (19 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>19</option>
                <option value="20" <?php if (20 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>20</option>
                <option value="21" <?php if (21 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>21</option>
                <option value="22" <?php if (22 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>22</option>
                <option value="23" <?php if (23 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>23</option>
                <option value="24" <?php if (24 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>24</option>
                <option value="25" <?php if (25 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>25</option>
                <option value="26" <?php if (26 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>26</option>
                <option value="27" <?php if (27 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>27</option>
                <option value="28" <?php if (28 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>28</option>
                <option value="29" <?php if (29 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>29</option>
                <option value="30" <?php if (30 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>30</option>
                <option value="31" <?php if (31 === intval( $_GET['day_from'] )) echo 'selected="selected"'; ?>>31</option>
            </select>
            <select name="month_from">
                <option value="1" <?php if (1 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Jan</option>
                <option value="2" <?php if (2 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Feb</option>
                <option value="3" <?php if (3 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>March
                </option>
                <option value="4" <?php if (4 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>April
                </option>
                <option value="5" <?php if (5 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>May</option>
                <option value="6" <?php if (6 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>June</option>
                <option value="7" <?php if (7 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>July</option>
                <option value="8" <?php if (8 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Aug</option>
                <option value="9" <?php if (9 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Sept</option>
                <option value="10" <?php if (10 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Oct</option>
                <option value="11" <?php if (11 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Nov</option>
                <option value="12" <?php if (12 === intval( $_GET['month_from'] )) echo 'selected="selected"'; ?>>Dec</option>
            </select>
            <select name="year_from">
                <option value="2017" <?php if ('2017' === intval( $_GET['year_from'] )) echo 'selected="selected"'; ?>>2017</option>
                <option value="2018" <?php if ('2018' === intval( $_GET['year_from'] )) echo 'selected="selected"'; ?>>2018</option>
                <option value="2019" <?php if ('2019' === intval( $_GET['year_from'] )) echo 'selected="selected"'; ?>>2019</option>
                <option value="2020" <?php if ('2020' === intval( $_GET['year_from'] )) echo 'selected="selected"'; ?>>2020</option>
            </select>
        </div>
        <br><br>
        <div>
            <p>Select to date:</p>
            <select name="day_to">
                <option value="1" <?php if (1 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>1</option>
                <option value="2" <?php if (2 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>2</option>
                <option value="3" <?php if (3 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>3</option>
                <option value="4" <?php if (4 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>4</option>
                <option value="5" <?php if (5 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>5</option>
                <option value="6" <?php if (6 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>6</option>
                <option value="7" <?php if (7 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>7</option>
                <option value="8" <?php if (8 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>8</option>
                <option value="9" <?php if (9 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>9</option>
                <option value="10" <?php if (10 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>10</option>
                <option value="11" <?php if (11 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>11</option>
                <option value="12" <?php if (12 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>12</option>
                <option value="13" <?php if (13 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>13</option>
                <option value="14" <?php if (14 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>14</option>
                <option value="15" <?php if (15 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>15</option>
                <option value="16" <?php if (16 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>16</option>
                <option value="17" <?php if (17 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>17</option>
                <option value="18" <?php if (18 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>18</option>
                <option value="19" <?php if (19 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>19</option>
                <option value="20" <?php if (20 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>20</option>
                <option value="21" <?php if (21 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>21</option>
                <option value="22" <?php if (22 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>22</option>
                <option value="23" <?php if (23 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>23</option>
                <option value="24" <?php if (24 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>24</option>
                <option value="25" <?php if (25 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>25</option>
                <option value="26" <?php if (26 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>26</option>
                <option value="27" <?php if (27 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>27</option>
                <option value="28" <?php if (28 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>28</option>
                <option value="29" <?php if (29 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>29</option>
                <option value="30" <?php if (30 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>30</option>
                <option value="31" <?php if (31 === intval( $_GET['day_to'] )) echo 'selected="selected"'; ?>>31</option>
            </select>
            <select name="month_to">
                <option value="1" <?php if (1 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Jan</option>
                <option value="2" <?php if (2 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Feb</option>
                <option value="3" <?php if (3 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>March</option>
                <option value="4" <?php if (4 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>April</option>
                <option value="5" <?php if (5 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>May</option>
                <option value="6" <?php if (6 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>June</option>
                <option value="7" <?php if (7 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>July</option>
                <option value="8" <?php if (8 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Aug</option>
                <option value="9" <?php if (9 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Sept</option>
                <option value="10" <?php if (10 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Oct</option>
                <option value="11" <?php if (11 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Nov</option>
                <option value="12" <?php if (12 === intval( $_GET['month_to'] )) echo 'selected="selected"'; ?>>Dec</option>
            </select>
            <select name="year_to">
                <option value="2017" <?php if ( 2017 === intval( $_GET['year_to'] )) echo 'selected="selected"'; ?>>2017</option>
                <option value="2018" <?php if ( 2018 === intval( $_GET['year_to'] )) echo 'selected="selected"'; ?>>2018</option>
                <option value="2019" <?php if ( 2019 === intval( $_GET['year_to'] )) echo 'selected="selected"'; ?>>2019</option>
                <option value="2020" <?php if ( 2020 === intval( $_GET['year_to'] )) echo 'selected="selected"'; ?>>2020</option>
            </select>
        </div>
        <br><br>
        <div>
            <p>minimal rating</p>
            <input type="number" name="minimal_rating" value="<?php echo intval($_GET['minimal_rating']); ?>">
            <p>maximal rating</p>
            <input type="number" name="maximal_rating" value="<?php echo intval($_GET['maximal_rating']); ?>">
        </div>
        <br><br>
        <div>
            <p>Sorting order:</p>
            <select name="page_rating_order">
                <option value="DESC" <?php if ('DESC' === sanitize_text_field( $_GET['page_rating_order'] )) echo 'selected="selected"'; ?>>
                    Descending</option>
                <option value="ASC" <?php if ('ASC' === sanitize_text_field( $_GET['page_rating_order'] )) echo 'selected="selected"'; ?>>
                    Ascending</option>
            </select>
        </div>
        <br><br>
        <input type="submit" id="filtersubmit" value="filter" />
    </form>
    <br><br>


    <?php

$args = array(
	'post_type'              => 'page',
	'post_status'            => 'publish',
	'date_query'             => array(
		array(
			'before' => array(
				'year'  => $year_to,
				'month' => $month_to,
				'day'   => $day_to,
			),
			'after' => array(
				'year'  => $year_from,
				'month' => $month_from,
				'day'   => $day_from,
			),
			'inclusive' => false,
		),
	),
	'meta_query'             => array(
		array(
			'key'     => 'page_rating',
			'value'   => array( $minimal_rating, $maximal_rating ),
			'compare' => 'BETWEEN',
			'type'    => 'NUMERIC',
		),
    ),
    'orderby' => 'page_rating',
    'order' => $page_rating_order,
);


$loop = new WP_Query( $args ); 
if ( $loop->have_posts() ) : 
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_date(); ?></p>
    <p>Page rating: <?php echo get_post_meta($post->ID, 'page_rating', true) ?></p>
    <p><?php the_excerpt(); ?> </p>
    <?php
endwhile;

else :
    echo esc_html("No results found, please try again");

endif;

wp_reset_postdata(); 
?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>