<?php
/*
Template Name: Services - Overnight Boarding
*/

get_header(); ?>


    <div class="main-content mr-ob-page">

        <?php get_template_part( 'template-parts/elements', 'banner' ); ?>

        <?php get_template_part( 'template-parts/global-sections/partners', 'logo' ); ?>

        <section class="mr-section sec-other-services">
            
            
            <div class="mr-row-columns row-left-img bg-lighter-blue row-white">

                <div class="col-1-of-2 col-content">

                <?php $row_white_left = get_field('white_row_left'); 

                    $row_white_title = $row_white_left['title_row_white'];

                    $row_white_ctn = $row_white_left['text_row_white'];
                    
                    if ( $row_white_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $row_white_title; ?></h3>

                    <?php endif; 
                    
                    if ( $row_white_ctn ) : ?>

                        <div class="l-violet-text"><?php echo $row_white_ctn; ?></div>

                    <?php endif; ?>

                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $row_white_right = get_field('white_row_right'); 

                            $row_white_img = $row_white_right['image_row_white'];

                                $alt_row_white_text = get_post_meta($row_white_img , '_wp_attachment_image_alt', true); 
                    
                    if ( $row_white_img ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($row_white_img ,'large_large','1400px'); ?>  alt="<?php echo $alt_row_white_text; ?>" /> 

                    <?php endif; ?>

                </div>

                </div><!-- .mr-row-columns -->

                <div class="mr-row-columns bg-lighter-v">

                    <div class="col-1-of-2 col-content">

                        <?php $match_group_ctn = get_field('match_group_content');

                            $match_title = $match_group_ctn['title']; 
                            
                            $match_content = $match_group_ctn['descriptions']; 
                            
                        if ( $match_title ) : ?>

                            <h3 class="d-violet-text bernard-font-uppercase"><?php echo $match_title; ?></h3>

                        <?php endif; if ( $match_content ) : ?>

                            <div class="l-violet-text"><?php echo $match_content; ?></div>

                        <?php endif; ?>

                    </div>

                    <div class="col-1-of-2 col-large-img">

                        <?php $match_group_img = get_field('match_group_image'); 

                                $match_image = $match_group_img['match_image'];

                                $match_alt_text = get_post_meta($match_image , '_wp_attachment_image_alt', true); 

                        if ( $match_image ) : ?>

                            <img class="large-img" <?php awesome_acf_responsive_image($match_image ,'large_large','1400px'); ?>  alt="<?php echo $match_alt_text; ?>" /> 

                        <?php endif; ?>

                    </div>

            </div><!-- .mr-row-columns -->


            <?php get_template_part( 'template-parts/global-rows/row-cage', 'free' ); ?>

        </section><!-- .mr-section -->

        <?php get_template_part( 'template-parts/sec-before-we-get', 'started' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tabs', 'content' ); ?>
 
        <?php get_template_part( 'template-parts/global-sections/reviews', 'slider' ); ?>

        <?php get_template_part( 'template-parts/global-sections/our', 'services' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tour-our', 'space' ); ?>

        <?php get_template_part( 'template-parts/sec-serving-the-best', 'dogs' ); ?>

        <?php get_template_part( 'template-parts/sec-frequently-asked', 'question' ); ?>

    </div><!-- .main-content -->

<?php get_footer();