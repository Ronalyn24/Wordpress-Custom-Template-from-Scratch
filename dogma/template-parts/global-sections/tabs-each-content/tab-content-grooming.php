
<?php if( have_rows('grooming_tab_inner_content','option') ): ?>

    <div class="tab-inner-wrap"> 

        <?php $child_count = 0; 

        while( have_rows('grooming_tab_inner_content','option') ): the_row(); 

        $child_count++;

            $grooming_pricing_image = get_sub_field('image','option');  

            $grooming_pricing_img_alt = get_post_meta( $grooming_pricing_image , '_wp_attachment_image_alt', true); 

            $grooming_pricing_inner_title = get_sub_field('title','option');

            $grooming_pricing_inner_price = get_sub_field('price','option');
            
            $grooming_pricing_inner_paragraph = get_sub_field('light_box_paragraph','option');?>

            <div class="tab-inner-item">

                <?php if (!empty( $grooming_pricing_image ) ) : ?>

                    <div class="image-container">

                        <img class="thumbnail-img" <?php awesome_acf_responsive_image($grooming_pricing_image ,'medium','300px'); ?>  alt="<?php echo $grooming_pricing_img_alt; ?>" /> 

                    </div>

                <?php endif; 
                
                if (!empty( $grooming_pricing_inner_title ) ) : ?>

                    <h2 class="mr-title"><?php echo $grooming_pricing_inner_title; ?></h2>

                <?php endif; 
                
                if (!empty( $grooming_pricing_inner_price ) ) : ?>

                    <span class="price"><?php echo $grooming_pricing_inner_price; ?></span>

                <?php endif; ?>


                <a class="mr-link view-lb-btn" href="#lightbox-content-3-<?php echo $child_count; ?>">View Details</a>


        </div><!--.tab-inner-item -->

    <?php endwhile; ?>

    </div><!--.tab-inner-wrap -->


    <div class="top-lightbox-wrapper">

    <?php $child_count = 0; 

    while( have_rows('grooming_tab_inner_content','option') ): the_row(); 

    $child_count++;

        $grooming_pricing_image = get_sub_field('image','option');  

        $grooming_pricing_img_alt = get_post_meta( $grooming_pricing_image , '_wp_attachment_image_alt', true); 

        $grooming_pricing_inner_title = get_sub_field('title','option');

        $grooming_pricing_inner_price = get_sub_field('price','option');
        
        $grooming_pricing_inner_paragraph = get_sub_field('light_box_paragraph','option');?>
        

        <div id="lightbox-content-3-<?php echo $child_count; ?>" class="popup-content-item">

            <button class="bck-close" href="#!" tabindex="9999" aria-label="Close this popup and go to main content" role="button">

                <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="close"/>

            </button>

            <div class="popup-inner-content">

                <div class="mr-inner-ctn">

                    <button class="bck-close" href="#!" tabindex="9999" aria-label="Close this popup and go to main content" role="button">

                        <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="close"/>

                    </button>

                        <?php $grooming_pricing_lb_image = get_sub_field('image');  

                        $grooming_pricing_lb_img_alt = get_post_meta( $grooming_pricing_lb_image , '_wp_attachment_image_alt', true); 
                            
                            
                            if (!empty( $grooming_pricing_lb_image ) ) : ?>

                                <div class="image-container">

                                    <img class="thumbnail-img" <?php awesome_acf_responsive_image($grooming_pricing_lb_image ,'medium_large','840px'); ?>  alt="<?php echo $grooming_pricing_lb_img_alt; ?>" /> 

                                </div>

                                <?php endif; ?>

                                <div class="mr-content">

                                        <?php if (!empty( $grooming_pricing_inner_title ) ) : ?>

                                        <h2 class="mr-title"><?php echo $grooming_pricing_inner_title; ?></h2>

                                        <?php endif; ?>

                                    <?php echo $grooming_pricing_inner_paragraph; ?>

                                </div>

                </div><!--.mr-inner-ctn -->

                <a class="bck-close-bg" href="#!" aria-label="close lighbox" role="link"></a>

            </div><!--.popup-inner-content -->

        </div>

        <?php endwhile; ?>

    </div>

<?php endif; ?>

