
<?php if( have_rows('bording_group','option') ): ?>

    <div class="tab-inner-wrap"> 

        <?php while( have_rows('bording_group','option') ): the_row(); 
        
            $boarding_pricing_inner_title = get_sub_field('headline','option');

            $boarding_pricing_inner_sub_text = get_sub_field('sub_text','option');
            
            $boarding_pricing_inner_paragraph = get_sub_field('bottom_pragraph','option'); ?>

            <div class="tab-inner-item mr-fullwidth bg-darker-v">
                
                <?php if (!empty( $boarding_pricing_inner_title ) ) : ?>

                    <h2 class="mr-title text-center"><?php echo $boarding_pricing_inner_title; ?></h2>

                <?php endif; 
                
                if (!empty( $boarding_pricing_inner_sub_text ) ) : ?>

                    <p class="sub-text text-center"><i><?php echo $boarding_pricing_inner_sub_text; ?></i></p>

                <?php endif; ?>


            <?php if( have_rows('price_lists','option') ): ?>

            <div class="inner-prices-list">

                        <?php while( have_rows('price_lists','option') ): the_row(); 
                        
                        $inner_price_list_title = get_sub_field('price_item_title','option');
                        
                        $inner_price_list_price = get_sub_field('price_item_price','option'); 

                        $inner_price_list_thumb = get_sub_field('boarding_thumbnail','option'); 
                        
                        $inner_price_list_thumb_alt = get_post_meta( $inner_price_list_thumb , '_wp_attachment_image_alt', true); ?>

                    <div class="inner-price-item">

                            <?php if (!empty( $inner_price_list_thumb ) ) : ?>

                                <div class="image-container">

                                    <img class="thumbnail-img" <?php awesome_acf_responsive_image($inner_price_list_thumb ,'medium','300px'); ?>  alt="<?php echo $inner_price_list_thumb_alt; ?>" /> 

                                </div>

                            <?php endif; ?>

                                <h4 class="mr-title"><?php echo $inner_price_list_title; ?></h4>

                                <span class="price"><?php echo $inner_price_list_price; ?></span>

                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

                <p class="sub-text bottom text-center"><i><?php echo $boarding_pricing_inner_paragraph; ?></i></p>

            </div><!--.tab-inner-item -->

        <?php endwhile; ?>


    </div><!--.tab-inner-wrap -->

<?php endif; ?>

