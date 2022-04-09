<section class="mr-section sec-get-started bg-darker-v">

    <div class="mr-row">

        <?php $bwgs_headline = get_field('bwgs_headline'); 
        
              $bwgs_sub_headline = get_field('bwgs_sub_text');
        
        if ( $bwgs_headline ) : ?>

            <h2 class="mr-title text-center white-text headline-bolder bernard-font-uppercase"><?php echo $bwgs_headline;?></h2>  

        <?php endif; if ( $bwgs_sub_headline ): ?>

            <div class="mr-sub-title text-center white-text"><?php echo  $bwgs_sub_headline; ?></div>

        <?php endif; ?>

        <div class="service-items <?php the_field('how_many_columns'); ?> dark-bg">

            <?php if( have_rows('bwgs_items') ): ?>

                <?php while( have_rows('bwgs_items') ): the_row(); 
 
                    $bwgs_image = get_sub_field('image'); 

                    $bwgs_title = get_sub_field('title'); 

                    $bwgs_content = get_sub_field('content');

                    $bwgs_required = get_sub_field('is_required');
                    
                    $bwgs_img_alt = get_post_meta( $bwgs_image , '_wp_attachment_image_alt', true); ?>

                    <div class="ser-item no-bottom-spacing">

                        <?php if (!empty( $bwgs_image )) : ?>

                            <div class="image-container">

                                    <img class="thumbnail-img had-two-cols" <?php awesome_acf_responsive_image($bwgs_image ,'medium_large-h','740px'); ?>  alt="<?php echo $bwgs_img_alt; ?>" /> 

                                    <img class="thumbnail-img default-cols" <?php awesome_acf_responsive_image($bwgs_image ,'medium_large-h','740px'); ?>  alt="<?php echo $bwgs_img_alt; ?>" /> 
                                
                            </div><!-- .image-container -->

                        <?php endif; ?>

                        
                        <?php if ( $bwgs_title ) : ?>

                            <h2 class="mr-title"><?php echo $bwgs_title; ?></h2>

                        <?php endif; ?>

                        <?php if ( $bwgs_required ) : ?>

                            <p class="required-tag">Required</p>

                        <?php endif; ?>
                        
                        <?php if ( $bwgs_content ) : 

                            echo $bwgs_content; 
                            
                        endif; ?>

                    </div><!-- .ser-item -->

                <?php endwhile; ?>

            <?php endif; ?>

        </div><!-- .service-items -->


    </div><!-- .mr-row -->

</section><!-- .mr-section -->