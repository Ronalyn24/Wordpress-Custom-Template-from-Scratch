<?php
/*
Template Name: Website Tutorials
*/

get_header(); ?>


<?php 
    if (post_password_required()) { 
        echo get_the_password_form();
    } else {
        get_template_part( 'template-parts/tutorials' );
    }
?>


<?php get_footer();