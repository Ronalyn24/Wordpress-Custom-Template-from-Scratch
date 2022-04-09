<?php
/*
Template Name: Dogma Home
*/

get_header(); ?>


    <div class="main-content mr-home-page">

        <?php get_template_part( 'template-parts/elements', 'banner' ); ?>

        <?php get_template_part( 'template-parts/global-sections/partners', 'logo' ); ?>

        <section id="award-winning" class="mr-section sec-award">

            <div class="mr-row-columns">

                <div class="col-2-of-3 imgs-award">

                    <?php $award_left_col = get_field('award_left'); 

                      $award_left_image = $award_left_col['left_image']; 

                      $award_alt_text = get_post_meta($award_left_image , '_wp_attachment_image_alt', true); 
                    
                     if ( $award_left_image ) : ?>

                        <div class="img-award-item first-aw-item">

                        <img class="medium-img" <?php awesome_acf_responsive_image($award_left_image ,'medium','300px'); ?>  alt="<?php echo $alt_text; ?>" /> 

                        </div><!-- .img-award-item -->

                     <?php endif; ?>   


                    <div class="img-award-item second-aw-item">

                        <?php $award_left_col = get_field('award_left'); 

                        $right_group_images = $award_left_col['right_images'];

                        $award_right_top_image = $right_group_images['image_right_top'];

                        $award_right_bottom_image = $right_group_images['image_right_bottom'];
                        
                        $award_alt_rt_text = get_post_meta($award_right_top_image , '_wp_attachment_image_alt', true);

                        $award_alt_rb_text = get_post_meta($award_right_bottom_image , '_wp_attachment_image_alt', true); 

                        if ( $award_right_top_image ) : ?>

                        <div class="aw-item-ctn">

                            <img class="medium-img" <?php awesome_acf_responsive_image($award_right_top_image ,'medium','300px'); ?>  alt="<?php echo $award_alt_rt_text; ?>" /> 

                        </div><!-- .aw-item-ctn -->

                        <?php endif; 
                        
                        if ( $award_right_bottom_image ) : ?>

                        <div class="aw-item-ctn">

                            <img class="medium-img" <?php awesome_acf_responsive_image( $award_right_bottom_image ,'medium','300px'); ?>  alt="<?php echo $award_alt_rb_text; ?>" /> 

                        </div><!-- .aw-item-ctn -->

                        <?php endif; ?>  

                    </div><!-- .img-award-item -->
                    
                </div><!-- .col-2-of-3 -->

                <div class="col-1-of-3">

                <?php $award_right_col = get_field('award_right'); 

                      $award_right_title = $award_right_col['title'];

                      $award_right_ctn = $award_right_col['descriptions'];

                      $award_btn = $award_right_col['button'];
                    
                    if ( $award_right_title ) : ?>

                        <h2 class="mr-title d-violet-text headline-bolder bernard-font-uppercase"><?php echo $award_right_title; ?></h2>

                    <?php endif; if ( $award_right_ctn ) : ?>    

                        <div class="mr-sub-title l-green-text"><?php echo $award_right_ctn; ?></div>

                    <?php endif;
                    
                    if( $award_btn ): 
                    
                            $award_btn_url = $award_btn['url'];
                            $award_btn_title = $award_btn['title'];
                            $award_btn_target = $award_btn['target'] ? $award_btn['target'] : '_self'; ?>

                    <a class="mr-link" role="link" href="<?php echo esc_url( $award_btn_url ); ?>" target="<?php echo esc_attr( $award_btn_target ); ?>"><?php echo esc_html( $award_btn_title ); ?></a>

                    <?php endif; ?>

                </div><!-- .col-1-of-3 -->

            </div><!-- .mr-row-columns -->

        </section><!-- .mr-section -->

        <?php get_template_part( 'template-parts/global-sections/our', 'services' ); ?>

        <?php get_template_part( 'template-parts/global-sections/reviews', 'slider' ); ?>


        <section id="why-dogma" class="mr-section sec-other-services">
        
            <?php get_template_part( 'template-parts/global-rows/row-video', 'monitoring' ); ?>

            <?php get_template_part( 'template-parts/global-rows/row-our', 'staff' ); ?>

            <?php get_template_part( 'template-parts/global-rows/row-cage', 'free' ); ?>

            <div class="mr-row-columns bg-lighter-v">

                <div class="col-1-of-2 col-content">

                    <?php $guest_group_ctn = get_field('guest_group_content');

                        $guest_title = $guest_group_ctn['guest_title']; 
                        
                        $guest_content = $guest_group_ctn['guest_descriptions']; 
                        
                    if ( $guest_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $guest_title; ?></h3>

                    <?php endif; if ( $guest_content ) : ?>

                        <div class="l-violet-text"><?php echo $guest_content; ?></div>

                    <?php endif; ?>

                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $guest_Group_Image = get_field('guest_group_image'); 

                                $guest_Image = $guest_Group_Image['guest_image'];

                                $guest_alt_text = get_post_meta($guest_Image , '_wp_attachment_image_alt', true); 

                    if ( $guest_Image ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($guest_Image ,'large_large','1400px'); ?>  alt="<?php echo $guest_alt_text; ?>" /> 

                    <?php endif; ?>

                </div>

            </div><!-- .mr-row-columns -->

        </section><!-- .mr-section -->

        <?php get_template_part( 'template-parts/global-sections/tour-our', 'space' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tabs', 'content' ); ?>

        <?php get_template_part( 'template-parts/sec-serving-the-best', 'dogs' ); ?>

        <?php get_template_part( 'template-parts/sec-frequently-asked', 'question' ); ?>

    </div><!-- .main-content -->

<?php get_footer();