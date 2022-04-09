<?php
/*
Template Name: Services - Dog Walking
*/

get_header(); ?>


    <div class="main-content mr-dog-walking-page">

        <?php get_template_part( 'template-parts/elements', 'banner' ); ?>

        <?php get_template_part( 'template-parts/global-sections/partners', 'logo' ); ?>

        <section id="why-dogma" class="mr-section sec-other-services">

            <div class="mr-row-columns row-left-img bg-lighter-blue walking-prices">

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

                    <?php $row_white_left_three = get_field('white_row_left_three'); 

                    $row_white_title = $row_white_left_three['title_row_white'];

                    $row_white_ctn = $row_white_left_three['text_row_white'];
                    
                    if ( $row_white_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $row_white_title; ?></h3>

                    <?php endif; 
                    
                    if ( $row_white_ctn ) : ?>

                        <div class="l-violet-text"><?php echo $row_white_ctn; ?></div>

                    <?php endif; ?>

                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $row_white_right_three = get_field('white_row_right_three'); 

                            $row_white_img_three = $row_white_right_three['image_row_white'];

                                $alt_row_white_text = get_post_meta($row_white_img_three , '_wp_attachment_image_alt', true); 
                    
                    if ( $row_white_img_three ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($row_white_img_three ,'large_large','1400px'); ?>  alt="<?php echo $alt_row_white_text; ?>" /> 

                    <?php endif; ?>

                </div>

            </div><!-- .mr-row-columns -->   

            <div class="mr-row-columns row-left-img bg-lighter-blue">

                <div class="col-1-of-2 col-content">

                    <?php $row_white_left_two = get_field('white_row_left_two'); 

                    $row_white_title = $row_white_left_two['title_row_white'];

                    $row_white_ctn = $row_white_left_two['text_row_white'];
                    
                    if ( $row_white_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $row_white_title; ?></h3>

                    <?php endif; 
                    
                    if ( $row_white_ctn ) : ?>

                        <div class="l-violet-text"><?php echo $row_white_ctn; ?></div>

                    <?php endif; ?>

                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $row_white_right_two = get_field('white_row_right_two'); 

                            $row_white_img_two = $row_white_right_two['image_row_white'];

                                $alt_row_white_text = get_post_meta($row_white_img_two , '_wp_attachment_image_alt', true); 
                    
                    if ( $row_white_img_two ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($row_white_img_two ,'large_large','1400px'); ?>  alt="<?php echo $alt_row_white_text; ?>" /> 

                    <?php endif; ?>

                </div>

            </div><!-- .mr-row-columns -->

            <?php get_template_part( 'template-parts/global-rows/row-our', 'staff' ); ?>            
            
        </section><!-- .mr-section -->


        <section class="mr-section sec-map bg-darker-v">

            <div class="mr-row first-row">

                <?php $map_headline = get_field('map_headline'); 
                      $map_sub_headline = get_field('map_sub_headline'); 

                if ( $map_headline ) : ?>

                    <h2 class="mr-title text-center white-text headline-bolder bernard-font-uppercase"><?php echo $map_headline; ?></h2>  

                <?php endif; if ( $map_sub_headline ) : ?>

                    <div class="mr-sub-title text-center white-text"><?php echo  $map_sub_headline; ?></div>

                <?php endif; ?>


                <?php $zone_one = get_field('zone_one'); 
                        $zone_one_text = $zone_one['text'];
                        $zone_one_bg = $zone_one['back_color'];
                        $zone_one_color = $zone_one['text_color'];
                        $zone_one_border = $zone_one['border_color'];

                    $zone_two = get_field('zone_two'); 
                        $zone_two_text = $zone_two['text'];
                        $zone_two_bg = $zone_two['back_color'];
                        $zone_two_color = $zone_two['text_color'];
                        $zone_two_border = $zone_two['border_color'];  
                        
                    $zone_three = get_field('zone_three'); 
                        $zone_three_text = $zone_three['text'];
                        $zone_three_bg = $zone_three['back_color'];
                        $zone_three_color = $zone_three['text_color'];
                        $zone_three_border = $zone_three['border_color'];  

                    $zone_four = get_field('zone_four'); 
                        $zone_four_text = $zone_four['text'];
                        $zone_four_bg = $zone_four['back_color'];
                        $zone_four_color = $zone_four['text_color'];
                        $zone_four_border = $zone_four['border_color']; 
                        
                    $zone_five = get_field('zone_five'); 
                        $zone_five_text = $zone_five['text'];
                        $zone_five_bg = $zone_five['back_color'];
                        $zone_five_color = $zone_five['text_color'];
                        $zone_five_border = $zone_five['border_color']; ?>  


                <div class="map-zones">

                    <?php if (!empty( $zone_one_text )) : ?>

                        <div class="map-zone-item" style="--map-item-bg:<?php echo $zone_one_bg; ?>; --map-item-color:<?php echo $zone_one_color; ?>; --map-item-border-color:<?php echo $zone_one_border; ?>">

                            <?php echo $zone_one_text; ?>

                        </div><!-- .map-zone-item -->

                    <?php endif; ?>


                    <?php if (!empty( $zone_two_text )) : ?>

                        <div class="map-zone-item" style="--map-item-bg:<?php echo $zone_two_bg; ?>; --map-item-color:<?php echo $zone_two_color; ?>; --map-item-border-color:<?php echo $zone_two_border; ?>">

                            <?php echo $zone_two_text; ?>

                        </div><!-- .map-zone-item -->

                    <?php endif; ?>


                    <?php if (!empty( $zone_three_text )) : ?>

                        <div class="map-zone-item" style="--map-item-bg:<?php echo $zone_three_bg; ?>; --map-item-color:<?php echo $zone_three_color; ?>; --map-item-border-color:<?php echo $zone_three_border; ?>">

                            <?php echo $zone_three_text; ?>

                        </div><!-- .map-zone-item -->

                    <?php endif; ?>


                    <?php if (!empty( $zone_four_text )) : ?>

                        <div class="map-zone-item" style="--map-item-bg:<?php echo $zone_four_bg; ?>; --map-item-color:<?php echo $zone_four_color; ?>; --map-item-border-color:<?php echo $zone_four_border; ?>">

                            <?php echo $zone_four_text; ?>

                        </div><!-- .map-zone-item -->

                    <?php endif; ?>

                    <?php if (!empty( $zone_five_text )) : ?>

                        <div class="map-zone-item" style="--map-item-bg:<?php echo $zone_five_bg; ?>; --map-item-color:<?php echo $zone_five_color; ?>; --map-item-border-color:<?php echo $zone_five_border; ?>">

                            <?php echo $zone_five_text; ?>

                        </div><!-- .map-zone-item -->

                    <?php endif; ?>
                    
                </div><!-- .map-zones -->


                <?php $map_large_image = get_field('map_large_image');

                    $map_large_img_alt_text = get_post_meta($map_large_image , '_wp_attachment_image_alt', true);

                    if (!empty( $map_large_image )) : ?>

                        <img style="max-width: 835px;" class="large-img img-center map-large" <?php awesome_acf_responsive_image($map_large_image ,'extra_large','840px'); ?>  alt="<?php echo $map_large_img_alt_text; ?>" /> 

                <?php endif; ?>

            </div><!-- .mr-row -->
            

        </section><!-- .mr-section -->

        <?php get_template_part( 'template-parts/global-sections/tabs', 'content' ); ?>

        <?php get_template_part( 'template-parts/global-sections/reviews', 'slider' ); ?>

        <?php get_template_part( 'template-parts/global-sections/our', 'services' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tour-our', 'space' ); ?>

        <?php get_template_part( 'template-parts/sec-serving-the-best', 'dogs' ); ?>

        <?php get_template_part( 'template-parts/sec-frequently-asked', 'question' ); ?>

    </div><!-- .main-content -->

<?php get_footer();