<?php
/*
Template Name: Dogma Instagram
*/

$GLOBALS['light_header'] = true;

get_header(); ?>


    <div class="main-content mr-insta-page">

        <div class="mr-section">

            <?php echo do_shortcode( '[instagram-feed]' ); ?>

        </div>

    </div><!-- .main-content -->

<?php get_footer();