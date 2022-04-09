
<section class="mr-section sec-serving">

    <div class="mr-row text-center">

        <?php $ser_best_dog_headline = get_field('ser_best_dog_headline'); 
    
          $ser_best_dog_sub_text = get_field('ser_best_dog_sub_text');
          
        if ( $ser_best_dog_headline ) : ?>

            <h2 class="mr-title d-violet-text headline-bolder bernard-font-uppercase"><?php echo $ser_best_dog_headline; ?></h2> 

        <?php endif; 
        
        if ( $ser_best_dog_sub_text ) : ?>

            <div class="mr-sub-title d-violet-text"><?php echo $ser_best_dog_sub_text; ?></div>

        <?php endif; ?>    

            <div class="service-items no-text">

                <?php $sbd_wv_images = get_field('sbd_images');

                    $sbd_wv_alt_text = get_post_meta($sbd_wv_images , '_wp_attachment_image_alt', true); 
                    
                    foreach( $sbd_wv_images as $wv_image ): ?>
                    
                        <div class="ser-item">

                            <div class="image-container">

                            <img class="thumbnail-img" <?php awesome_acf_responsive_image($wv_image ,'medium_medium','365px'); ?>  alt="<?php echo $sbd_wv_alt_text; ?>" />

                            </div><!-- .image-container -->

                        </div><!-- .ser-item -->

                <?php endforeach; ?>

            </div><!-- .service-items -->

            <a class="mr-link" role="link" href="<?php echo get_site_url(); ?>/instagram-feed/" target="_self">View Gallery</a>     
        
    </div><!-- .mr-row-columns -->

</section><!-- .mr-section -->  