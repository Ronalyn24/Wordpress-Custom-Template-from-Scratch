<?php
/*
Template Name: Services - Day Care
*/

get_header(); ?>


    <div class="main-content mr-daycare-page">

        <?php get_template_part( 'template-parts/elements', 'banner' ); ?>

        <?php get_template_part( 'template-parts/global-sections/partners', 'logo' ); ?>

        <section id="why-dogma" class="mr-section sec-other-services">
            
            <?php get_template_part( 'template-parts/global-rows/row-cage', 'free' ); ?>

            <?php get_template_part( 'template-parts/global-rows/row-our', 'staff' ); ?>

        </section><!-- .mr-section -->


        <section class="mr-section sec-why-choose-dogma bg-lighter-blue">

            <div class="mr-row first-row">

                <?php $wc_dogma_headline = get_field('wc_dogma_headline'); 
                
                if ( $wc_dogma_headline ) : ?>

                    <h2 class="mr-title text-center l-violet-text headline-bolder bernard-font-uppercase"><?php echo $wc_dogma_headline; ?></h2>  

                <?php endif; ?>

                <?php if( have_rows('wc_dogma_row_one') ):  ?>

                    <div class="service-items wc_dogma-items">

                        <?php while( have_rows('wc_dogma_row_one') ): the_row(); 
                        
                            $wc_dogma_bg_image = get_sub_field('bg_image'); 
                            $wc_dogma_title = get_sub_field('title'); 
                            $wc_dogma_ctn = get_sub_field('descriptions'); 
                            
                            $wc_dogma_text = get_post_meta($wc_dogma_bg_image , '_wp_attachment_image_alt', true); ?>

                            <div class="ser-item">

                                <div class="inner-ctn">

                                    <?php if (!empty( $wc_dogma_bg_image )) : ?>

                                    <img class="thumbnail-img" <?php awesome_acf_responsive_image($wc_dogma_bg_image ,'medium_small-h','360px'); ?>  alt="<?php echo $wc_dogma_text; ?>" /> 

                                    <?php endif; ?>

                                    <h2 class="mr-title"><?php echo $wc_dogma_title;?></h2>

                                    <?php echo $wc_dogma_ctn; ?>

                                </div><!-- .ser-item -->

                            </div><!-- .inner-ctn -->

                        <?php endwhile; ?>

                    </div><!-- .service-items -->

                <?php endif; ?>


                <div class="service-items wc_dogma-items fullwidth">
                
                    <?php $wc_dogma_second_row_bg = get_field('2nd_row_bg');

                    $wc_dogma_second_row_alt_text = get_post_meta($wc_dogma_second_row_bg , '_wp_attachment_image_alt', true);

                    if (!empty( $wc_dogma_second_row_bg )) : ?>

                        <img class="thumbnail-img" <?php awesome_acf_responsive_image($wc_dogma_second_row_bg ,'Large_large','1680px'); ?>  alt="<?php echo $wc_dogma_second_row_alt_text; ?>" /> 

                    <?php endif; ?>

                    <?php if( have_rows('wc_dogma_row_second') ): 

                        while( have_rows('wc_dogma_row_second') ): the_row(); 
                                    
                            $wc_dogma_second_row_img = get_sub_field('bg_image'); 
                            $wc_dogma_second_row_title = get_sub_field('title'); 
                            $wc_dogma_second_row_ctn = get_sub_field('descriptions'); ?>

                            <div class="ser-item">

                                <h2 class="mr-title"><?php echo $wc_dogma_second_row_title;?></h2>

                                <?php echo $wc_dogma_second_row_ctn; ?>

                            </div><!-- .ser-item -->

                    <?php endwhile; endif; ?>

                </div><!-- .service-items -->

            </div><!-- .mr-row -->
            

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