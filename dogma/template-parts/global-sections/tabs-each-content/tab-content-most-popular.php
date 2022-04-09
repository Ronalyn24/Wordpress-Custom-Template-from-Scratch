
    <?php if( have_rows('most_pop_tab_inner_content','option') ): ?>

        <div class="tab-inner-wrap"> 

        <?php $child_count = 0; 
        
            while( have_rows('most_pop_tab_inner_content','option') ): the_row(); 

            $child_count++;
            
                $most_pop_pricing_image = get_sub_field('image','option');  

                $most_pop_pricing_img_alt = get_post_meta( $most_pop_pricing_image , '_wp_attachment_image_alt', true); 

                $most_pop_pricing_inner_title = get_sub_field('title','option');

                $most_pop_pricing_inner_price = get_sub_field('price','option'); 

                $most_pop_pricing_inner_paragraph = get_sub_field('light_box_paragraph','option'); ?>

                <div class="tab-inner-item">

                    <?php if (!empty( $most_pop_pricing_image ) ) : ?>

                        <div class="image-container">

                            <img class="thumbnail-img" <?php awesome_acf_responsive_image($most_pop_pricing_image ,'medium','300px'); ?>  alt="<?php echo $most_pop_pricing_img_alt; ?>" /> 

                        </div>

                    <?php endif; 
                    
                    if (!empty( $most_pop_pricing_inner_title ) ) : ?>

                        <h2 class="mr-title"><?php echo $most_pop_pricing_inner_title; ?></h2>

                    <?php endif; 
                    
                    if (!empty( $most_pop_pricing_inner_price ) ) : ?>

                        <span class="price"><?php echo $most_pop_pricing_inner_price; ?></span>

                    <?php endif; ?>
                    
                    <a class="mr-link view-lb-btn" href="#lightbox-content-1-<?php echo $child_count; ?>">View Details</a>

                </div><!--.tab-inner-item -->

            <?php endwhile; ?>


            <?php $fw_book_pup_group = get_field('book_your_pup_group','option'); 

                $fw_get_started_link = $fw_book_pup_group['get_started'];
                $fw_get_started_link_url = $fw_get_started_link['url'];
                $fw_get_started_link_title = $fw_get_started_link['title'];
                $fw_get_started_link_target = $fw_get_started_link['target'] ? $fw_get_started_link['target'] : '_self'; 

                    $fw_book_pup_headline = $fw_book_pup_group['headline']; ?>

                <div class="elem-booking bg-darker-v">

                    <?php if ( $fw_book_pup_headline ) : ?>

                        <h2 class="mr-title"><?php echo $fw_book_pup_headline; ?></h2>
                        
                    <?php endif; ?>

                    <?php if ( $fw_get_started_link ) : ?>

                        <ul class="mr-buttons">

                            <li class="btn-item"><a role="link" href="<?php echo esc_url( $fw_get_started_link_url ); ?>" target="<?php echo esc_attr( $fw_get_started_link_target ); ?>" rel="noopener noreferrer"><?php echo esc_html( $fw_get_started_link_title ); ?></a></li>   

                        </ul>

                    <?php endif; ?>

                </div>

        </div><!--.tab-inner-wrap -->


        <div class="top-lightbox-wrapper">

        <?php $child_count = 0; 
        
            while( have_rows('most_pop_tab_inner_content','option') ): the_row(); 

            $child_count++;
            
            $most_pop_pricing_image = get_sub_field('image','option');  

            $most_pop_pricing_img_alt = get_post_meta( $most_pop_pricing_image , '_wp_attachment_image_alt', true); 

            $most_pop_pricing_inner_title = get_sub_field('title','option');

            $most_pop_pricing_inner_price = get_sub_field('price','option'); 

            $most_pop_pricing_inner_paragraph = get_sub_field('light_box_paragraph','option'); ?>

            <div id="lightbox-content-0-<?php echo $child_count; ?>" class="popup-content-item">

                <button class="bck-close" href="#!" tabindex="9999" aria-label="Close this popup and go to main content" role="button">

                    <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="close"/>

                </button>

                <div class="popup-inner-content">

                    <div class="mr-inner-ctn">

                        <button class="bck-close" href="#!" tabindex="9999" aria-label="Close this popup and go to main content" role="button">

                            <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="close"/>

                        </button>

                        <?php if (!empty( $most_pop_pricing_image ) ) : ?>

                            <div class="image-container">

                                <img class="thumbnail-img" <?php awesome_acf_responsive_image(  $most_pop_pricing_image ,'medium_large','840px'); ?>  alt="<?php echo $most_pop_pricing_img_alt; ?>" /> 

                            </div>

                            <?php endif; ?>

                            <div class="mr-content">

                                    <?php if (!empty( $most_pop_pricing_inner_title ) ) : ?>

                                    <h2 class="mr-title"><?php echo $most_pop_pricing_inner_title; ?></h2>

                                    <?php endif; ?>

                                <?php echo $most_pop_pricing_inner_paragraph; ?>

                            </div>

                    </div><!--.mr-inner-ctn -->

                    <a class="bck-close-bg" href="#!" aria-label="close lighbox" role="link"></a>

                </div><!--.popup-inner-content -->

            </div><!--.popup-content-item -->

            <?php endwhile; ?>

        </div><!-- .top-lightbox-wrapper -->

    <?php endif; ?>

