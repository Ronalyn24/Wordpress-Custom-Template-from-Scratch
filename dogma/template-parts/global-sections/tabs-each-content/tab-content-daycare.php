

<?php if( have_rows('daycare_tab_inner_content','option') ): ?>

    <div class="tab-inner-wrap"> 

        <?php while( have_rows('daycare_tab_inner_content','option') ): the_row(); 
        
            $daycare_pricing_image = get_sub_field('image','option');  

            $daycare_pricing_img_alt = get_post_meta( $daycare_pricing_image , '_wp_attachment_image_alt', true); 

            $right_box_ctn = get_sub_field('right_box_column','option');

            $daycare_pricing_inner_title = $right_box_ctn['title'];

            $daycare_pricing_inner_sub_text = $right_box_ctn['sub_text'];  ?>

                <div class="tab-inner-item with-boxes">

                    <?php if (!empty( $daycare_pricing_image ) ) : ?>

                        <div class="image-container box-item left-box">

                            <img class="thumbnail-img" <?php awesome_acf_responsive_image($daycare_pricing_image ,'medium','300px'); ?>  alt="<?php echo $daycare_pricing_img_alt; ?>" /> 

                        </div><!--.box-item -->  

                    <?php endif; ?> 
                    
                <div class="box-item right-box bg-darker-v">

                        <div class="mr-headline">

                        <?php if (!empty( $daycare_pricing_inner_title ) ) : ?>

                                <h2 class="mr-title"><?php echo $daycare_pricing_inner_title; ?></h2>

                                <?php endif; ?> 

                                <?php if (!empty( $daycare_pricing_inner_sub_text ) ) : ?>

                                <p class="sub-text"><?php echo $daycare_pricing_inner_sub_text; ?></p>

                                <?php endif; ?>

                        </div>

                        <?php if( have_rows('right_box_column','option') ): while ( have_rows('right_box_column','option') ) : the_row(); 

                            if( have_rows('inner_lists','option') ): while ( have_rows('inner_lists','option') ) : the_row();  
                            
                                $inner_r_box_list_title = get_sub_field('inner_box_title','option');

                                $inner_r_box_list_price = get_sub_field('inner_box_price','option'); ?>

                                <div class="inner-box-lists">

                                    <?php if (!empty( $inner_r_box_list_title ) ) : ?>    

                                        <h4 class="mr-title"><?php echo $inner_r_box_list_title; ?></h4>  

                                    <?php endif; if (!empty( $inner_r_box_list_price ) ) : ?>

                                        <span class="price"><?php echo $inner_r_box_list_price; ?></span>

                                    <?php endif; ?>

                                </div>

                            <?php endwhile; endif; ?>

                        <?php endwhile; endif; ?>

                </div><!--.box-item -->         
                
            </div><!--.tab-inner-item -->

        <?php endwhile; ?>

    </div><!--.tab-inner-wrap -->

<?php endif; ?>

