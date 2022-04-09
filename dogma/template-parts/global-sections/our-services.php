<section id="our-services" class="mr-section sec-services bg-lighter-v">

    <div class="mr-row">

        <?php $serv_headline = get_field('our_serv_headline','option'); 
        
              $serv_sub_headline = get_field('our_serv_sub_headline','option');
        
        if ( $serv_headline ) : ?>

            <h2 class="mr-title text-center l-violet-text headline-bolder bernard-font-uppercase"><?php echo $serv_headline;?></h2>  

        <?php endif; if ( $serv_sub_headline ): ?>

            <div class="mr-sub-title text-center d-violet-text"><?php echo  $serv_sub_headline; ?></div>

        <?php endif; ?>


        <?php if( have_rows('services_items','option') ): ?>

            <div class="service-items">

                <?php while( have_rows('services_items','option') ): the_row(); 

                    $ser_item_image = get_sub_field('image','option'); 
                    $ser_item_title = get_sub_field('title','option'); 
                    $ser_item_ctn = get_sub_field('descriptions','option'); 
                    $ser_item_link = get_sub_field('direct_link','option'); 
                    
                    $ser_item_text = get_post_meta($ser_item_image , '_wp_attachment_image_alt', true); 
                    
                    $ser_item_link_url = $ser_item_link['url'];
                    $ser_item_link_title = $ser_item_link['title'];
                    $ser_item_link_target = $ser_item_link['target'] ? $ser_item_link['target'] : '_self'; ?>

                    <div class="ser-item">

                        <a class="blocks-link" role="link" href="<?php echo esc_url( $ser_item_link_url ); ?>" target="<?php echo esc_attr( $ser_item_link_target ); ?>"> 
                        
                            <?php if (!empty( $ser_item_image )) : ?>

                                <div class="image-container">

                                    <img class="thumbnail-img" <?php awesome_acf_responsive_image($ser_item_image ,'medium_small','360px'); ?>  alt="<?php echo $ser_item_text; ?>" /> 

                                </div><!-- .image-container -->

                            <?php endif; ?>

                            <h2 class="mr-title"><?php echo $ser_item_title;?></h2>

                            <?php echo $ser_item_ctn; ?>

                        </a><!--.blocks-link -->
                            
                        <?php if( $ser_item_link ): ?>

                            <a class="mr-link" role="link" href="<?php echo esc_url( $ser_item_link_url ); ?>" target="<?php echo esc_attr( $ser_item_link_target ); ?>"><?php echo esc_html( $ser_item_link_title ); ?></a>

                        <?php endif; ?>

                    </div><!-- .ser-item -->

                <?php endwhile; ?>

            </div><!-- .service-items -->

        <?php endif; ?>

    </div><!-- .mr-row -->

</section><!-- .mr-section -->