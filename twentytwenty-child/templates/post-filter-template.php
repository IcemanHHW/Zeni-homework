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


        <form role="search" method="get" id="filterform" action="/post-filter-query">
            <div>
            <p>Select from date:</p>
                <select name="day_from">
                    <option value="1" <?php if ($_GET['day_from'] == '1') echo 'selected="selected"'; ?> >1</option>
                    <option value="2" <?php if ($_GET['day_from'] == '2') echo 'selected="selected"'; ?> >2</option>
                    <option value="3" <?php if ($_GET['day_from'] == '3') echo 'selected="selected"'; ?> >3</option>
                    <option value="4" <?php if ($_GET['day_from'] == '4') echo 'selected="selected"'; ?> >4</option>
                    <option value="5" <?php if ($_GET['day_from'] == '5') echo 'selected="selected"'; ?> >5</option>
                    <option value="6" <?php if ($_GET['day_from'] == '6') echo 'selected="selected"'; ?> >6</option>
                    <option value="7" <?php if ($_GET['day_from'] == '7') echo 'selected="selected"'; ?> >7</option>
                    <option value="8" <?php if ($_GET['day_from'] == '8') echo 'selected="selected"'; ?> >8</option>
                    <option value="9" <?php if ($_GET['day_from'] == '9') echo 'selected="selected"'; ?> >9</option>
                    <option value="10" <?php if ($_GET['day_from'] == '10') echo 'selected="selected"'; ?> >10</option>
                    <option value="11" <?php if ($_GET['day_from'] == '11') echo 'selected="selected"'; ?> >11</option>
                    <option value="12" <?php if ($_GET['day_from'] == '12') echo 'selected="selected"'; ?> >12</option>
                    <option value="13" <?php if ($_GET['day_from'] == '13') echo 'selected="selected"'; ?> >13</option>
                    <option value="14" <?php if ($_GET['day_from'] == '14') echo 'selected="selected"'; ?> >14</option>
                    <option value="15" <?php if ($_GET['day_from'] == '15') echo 'selected="selected"'; ?> >15</option>
                    <option value="16" <?php if ($_GET['day_from'] == '16') echo 'selected="selected"'; ?> >16</option>
                    <option value="17" <?php if ($_GET['day_from'] == '17') echo 'selected="selected"'; ?> >17</option>
                    <option value="18" <?php if ($_GET['day_from'] == '18') echo 'selected="selected"'; ?> >18</option>
                    <option value="19" <?php if ($_GET['day_from'] == '19') echo 'selected="selected"'; ?> >19</option>
                    <option value="20" <?php if ($_GET['day_from'] == '20') echo 'selected="selected"'; ?> >20</option>
                    <option value="21" <?php if ($_GET['day_from'] == '21') echo 'selected="selected"'; ?> >21</option>
                    <option value="22" <?php if ($_GET['day_from'] == '22') echo 'selected="selected"'; ?> >22</option>
                    <option value="23" <?php if ($_GET['day_from'] == '23') echo 'selected="selected"'; ?> >23</option>
                    <option value="24" <?php if ($_GET['day_from'] == '24') echo 'selected="selected"'; ?> >24</option>
                    <option value="25" <?php if ($_GET['day_from'] == '25') echo 'selected="selected"'; ?> >25</option>
                    <option value="26" <?php if ($_GET['day_from'] == '26') echo 'selected="selected"'; ?> >26</option>
                    <option value="27" <?php if ($_GET['day_from'] == '27') echo 'selected="selected"'; ?> >27</option>
                    <option value="28" <?php if ($_GET['day_from'] == '28') echo 'selected="selected"'; ?> >28</option>
                    <option value="29" <?php if ($_GET['day_from'] == '29') echo 'selected="selected"'; ?> >29</option>
                    <option value="30" <?php if ($_GET['day_from'] == '30') echo 'selected="selected"'; ?> >30</option>
                    <option value="31" <?php if ($_GET['day_from'] == '31') echo 'selected="selected"'; ?> >31</option>
                </select>
                <select name="month_from">
                    <option value="1" <?php if ($_GET['month_from'] == '1') echo 'selected="selected"'; ?> >Jan</option>
                    <option value="2" <?php if ($_GET['month_from'] == '2') echo 'selected="selected"'; ?> >Feb</option>
                    <option value="3" <?php if ($_GET['month_from'] == '3') echo 'selected="selected"'; ?> >March</option>
                    <option value="4" <?php if ($_GET['month_from'] == '4') echo 'selected="selected"'; ?> >April</option>
                    <option value="5" <?php if ($_GET['month_from'] == '5') echo 'selected="selected"'; ?> >May</option>
                    <option value="6" <?php if ($_GET['month_from'] == '6') echo 'selected="selected"'; ?> >June</option>
                    <option value="7" <?php if ($_GET['month_from'] == '7') echo 'selected="selected"'; ?> >July</option>
                    <option value="8" <?php if ($_GET['month_from'] == '8') echo 'selected="selected"'; ?> >Aug</option>
                    <option value="9" <?php if ($_GET['month_from'] == '9') echo 'selected="selected"'; ?> >Sept</option>
                    <option value="10" <?php if ($_GET['month_from'] == '10') echo 'selected="selected"'; ?> >Oct</option>
                    <option value="11" <?php if ($_GET['month_from'] == '11') echo 'selected="selected"'; ?> >Nov</option>
                    <option value="12" <?php if ($_GET['month_from'] == '12') echo 'selected="selected"'; ?> >Dec</option>
                </select>
                <select name="year_from">
                    <option value="2017" <?php if ($_GET['year_from'] == '2017') echo 'selected="selected"'; ?> >2017</option>
                    <option value="2018" <?php if ($_GET['year_from'] == '2018') echo 'selected="selected"'; ?> >2018</option>
                    <option value="2019" <?php if ($_GET['year_from'] == '2019') echo 'selected="selected"'; ?> >2019</option>
                    <option value="2020" <?php if ($_GET['year_from'] == '2020') echo 'selected="selected"'; ?> >2020</option>
                </select>
            </div>
            <br><br>
            <div>
            <p>Select to date:</p>
                <select name="day_to">
                    <option value="1" <?php if ($_GET['day_to'] == '1') echo 'selected="selected"'; ?> >1</option>
                    <option value="2" <?php if ($_GET['day_to'] == '2') echo 'selected="selected"'; ?> >2</option>
                    <option value="3" <?php if ($_GET['day_to'] == '3') echo 'selected="selected"'; ?> >3</option>
                    <option value="4" <?php if ($_GET['day_to'] == '4') echo 'selected="selected"'; ?> >4</option>
                    <option value="5" <?php if ($_GET['day_to'] == '5') echo 'selected="selected"'; ?> >5</option>
                    <option value="6" <?php if ($_GET['day_to'] == '6') echo 'selected="selected"'; ?> >6</option>
                    <option value="7" <?php if ($_GET['day_to'] == '7') echo 'selected="selected"'; ?> >7</option>
                    <option value="8" <?php if ($_GET['day_to'] == '8') echo 'selected="selected"'; ?> >8</option>
                    <option value="9" <?php if ($_GET['day_to'] == '9') echo 'selected="selected"'; ?> >9</option>
                    <option value="10" <?php if ($_GET['day_to'] == '10') echo 'selected="selected"'; ?> >10</option>
                    <option value="11" <?php if ($_GET['day_to'] == '11') echo 'selected="selected"'; ?> >11</option>
                    <option value="12" <?php if ($_GET['day_to'] == '12') echo 'selected="selected"'; ?> >12</option>
                    <option value="13" <?php if ($_GET['day_to'] == '13') echo 'selected="selected"'; ?> >13</option>
                    <option value="14" <?php if ($_GET['day_to'] == '14') echo 'selected="selected"'; ?> >14</option>
                    <option value="15" <?php if ($_GET['day_to'] == '15') echo 'selected="selected"'; ?> >15</option>
                    <option value="16" <?php if ($_GET['day_to'] == '16') echo 'selected="selected"'; ?> >16</option>
                    <option value="17" <?php if ($_GET['day_to'] == '17') echo 'selected="selected"'; ?> >17</option>
                    <option value="18" <?php if ($_GET['day_to'] == '18') echo 'selected="selected"'; ?> >18</option>
                    <option value="19" <?php if ($_GET['day_to'] == '19') echo 'selected="selected"'; ?> >19</option>
                    <option value="20" <?php if ($_GET['day_to'] == '20') echo 'selected="selected"'; ?> >20</option>
                    <option value="21" <?php if ($_GET['day_to'] == '21') echo 'selected="selected"'; ?> >21</option>
                    <option value="22" <?php if ($_GET['day_to'] == '22') echo 'selected="selected"'; ?> >22</option>
                    <option value="23" <?php if ($_GET['day_to'] == '23') echo 'selected="selected"'; ?> >23</option>
                    <option value="24" <?php if ($_GET['day_to'] == '24') echo 'selected="selected"'; ?> >24</option>
                    <option value="25" <?php if ($_GET['day_to'] == '25') echo 'selected="selected"'; ?> >25</option>
                    <option value="26" <?php if ($_GET['day_to'] == '26') echo 'selected="selected"'; ?> >26</option>
                    <option value="27" <?php if ($_GET['day_to'] == '27') echo 'selected="selected"'; ?> >27</option>
                    <option value="28" <?php if ($_GET['day_to'] == '28') echo 'selected="selected"'; ?> >28</option>
                    <option value="29" <?php if ($_GET['day_to'] == '29') echo 'selected="selected"'; ?> >29</option>
                    <option value="30" <?php if ($_GET['day_to'] == '30') echo 'selected="selected"'; ?> >30</option>
                    <option value="31" <?php if ($_GET['day_to'] == '31') echo 'selected="selected"'; ?> >31</option>
                </select>
                <select name="month_to">
                    <option value="1" <?php if ($_GET['month_to'] == '1') echo 'selected="selected"'; ?> >Jan</option>
                    <option value="2" <?php if ($_GET['month_to'] == '2') echo 'selected="selected"'; ?> >Feb</option>
                    <option value="3" <?php if ($_GET['month_to'] == '3') echo 'selected="selected"'; ?> >March</option>
                    <option value="4" <?php if ($_GET['month_to'] == '4') echo 'selected="selected"'; ?> >April</option>
                    <option value="5" <?php if ($_GET['month_to'] == '5') echo 'selected="selected"'; ?> >May</option>
                    <option value="6" <?php if ($_GET['month_to'] == '6') echo 'selected="selected"'; ?> >June</option>
                    <option value="7" <?php if ($_GET['month_to'] == '7') echo 'selected="selected"'; ?> >July</option>
                    <option value="8" <?php if ($_GET['month_to'] == '8') echo 'selected="selected"'; ?> >Aug</option>
                    <option value="9" <?php if ($_GET['month_to'] == '9') echo 'selected="selected"'; ?> >Sept</option>
                    <option value="10" <?php if ($_GET['month_to'] == '10') echo 'selected="selected"'; ?> >Oct</option>
                    <option value="11" <?php if ($_GET['month_to'] == '11') echo 'selected="selected"'; ?> >Nov</option>
                    <option value="12" <?php if ($_GET['month_to'] == '12') echo 'selected="selected"'; ?> >Dec</option>
                </select>
                <select name="year_to">
                    <option value="2017" <?php if ($_GET['year_to'] == '2017') echo 'selected="selected"'; ?> >2017</option>
                    <option value="2018" <?php if ($_GET['year_to'] == '2018') echo 'selected="selected"'; ?> >2018</option>
                    <option value="2019" <?php if ($_GET['year_to'] == '2019') echo 'selected="selected"'; ?> >2019</option>
                    <option value="2020" <?php if ($_GET['year_to'] == '2020') echo 'selected="selected"'; ?> >2020</option>
                </select>
            </div>
            <br><br>
                <input type="submit" id="filtersubmit" value="filter" />
        </form>
        <br><br>


        <?php

/* from data */
$day_from = $_GET['day_from'];
$month_from = $_GET['month_from'];
$year_from = $_GET['year_from'];

/* to data */
$day_to = $_GET['day_to'];
$month_to = $_GET['month_to'];
$year_to = $_GET['year_to'];

$args =  [   'date_query' => [     
    [    
        'before'    => [ 
            'year'  => $year_to,         
            'month' => $month_to,         
            'day'   => $day_to,       
        ],                  
        'after'    => [ 
                    'year'  => $year_from,         
                    'month' => $month_from,         
                    'day'   => $day_from,       
    ],                  
    'inclusive' => false,     
],   
],   
'post_type' => 'post',
'nopaging' => true,
];


$loop = new WP_Query( $args ); 
if ( $loop->have_posts() ) :   
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_date(); ?></p>
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