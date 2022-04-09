<section id="google-reviews" class="mr-section sec-slider sec-reviews">

    <div class="mr-row">

        <img class="medium-img google-logo" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/google-logo.png" 

        srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/google-logo-2x.png 2x" alt="google logo"/>

       <div class="top-content">

        <h2 class="mr-title d-violet-text headline-bolder bernard-font-uppercase">335+ Dog Owners Love Us</h2>  

            <div class="slider-btn-control s-reviews for-desktop">

                    <div class="button button--previous" disabled>

                        <i class="fas fa-arrow-left"></i>

                    </div>

                    <div class="button button--next">

                        <i class="fas fa-arrow-right"></i>

                    </div>

            </div><!-- .slider-btn-control -->

       </div><!-- .top-content -->
        

        <?php $custom_query = new WP_Query( array( 

            'post_type'      => 'reviews', 
            'posts_per_page' => -1, 
            'order'          => 'DESC') );
        
            if ($custom_query->have_posts()) : ?>

                <div class="reviews-carousel">

                    <?php $slider_count = 1; 
                        
                        while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                            <div class="carousel-cell cell-<?php echo $slider_count;?>">

                                <div class="inner-ctn">

                                    <?php get_template_part( 'template-parts/global-sections/reviews', 'stars' ); ?>

                                    <div class="rev-content">

                                        <?php echo wp_trim_words( get_field('review_comment'), 25, '...' ); ?>

                                    </div>

                                    <?php $slider_lightbox = get_field('lightbox_full_content'); 
                                    
                                    if (!empty( $slider_lightbox )): ?>

                                        <a href="#review-slider-<?php echo $slider_count; ?>" class="show-slider-lightbox">Read full review</a>

                                        <?php else : ?>

                                        <br>

                                    <?php endif; ?>

                                    <div class="rev-avatar">

                                        <?php $rev_image = get_field('avatar');

                                            if( !empty( $rev_image ) ): ?>

                                                <img class="img-avatar" src="<?php echo esc_url($rev_image['url']); ?>" alt="<?php echo esc_attr($rev_image['alt']); ?>" />

                                        <?php endif; ?>

                                        <h2 class="mr-author">

                                            <?php the_field('author_name');?>

                                            <?php if( get_field('status_customer') ) : ?>

                                                <span class="verified">Verified customer</span>
                                            
                                            <?php endif; ?>

                                        </h2>

                                    </div><!-- .rev-avatar -->

                                </div><!-- .inner-ctn -->

                            </div><!-- .carousel-cell -->

                    <?php $slider_count ++;
                            
                    endwhile; ?>

                </div><!-- #reviews-slider -->



                <div class="lightbox-container slider-lb">

                    <?php $slider_count = 1; 
                            
                        while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                            <?php $slider_lightbox = get_field('lightbox_full_content'); 

                                if ( $slider_lightbox ): ?>


                                <div id="review-slider-<?php echo $slider_count; ?>" class="popup-content-item">

                                    <button class="bck-close" href="#!" tabindex="9999" aria-label="Close this popup and go to main content" role="button">

                                        <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="close"/>

                                    </button>

                                    <div class="popup-inner-content">   

                                        <div class="mr-inner-ctn">

                                            <button class="bck-close" href="#!" tabindex="9999" aria-label="Close this popup and go to main content" role="button">

                                                <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="close"/>

                                            </button>

                                                <?php get_template_part( 'template-parts/global-sections/reviews', 'stars' ); ?>

                                                <div class="mr-content">
                                                
                                                    <?php echo $slider_lightbox; ?>

                                                </div>

                                                <div class="rev-avatar">

                                                    <?php $rev_image = get_field('avatar');

                                                        if( !empty( $rev_image ) ): ?>

                                                            <img class="img-avatar" src="<?php echo esc_url($rev_image['url']); ?>" alt="<?php echo esc_attr($rev_image['alt']); ?>" />

                                                    <?php endif; ?>

                                                    <h2 class="mr-author">

                                                        <?php the_field('author_name');?>

                                                    </h2>

                                                </div><!-- .rev-avatar -->

                                        </div><!--.mr-inner-ctn -->

                                        <a class="bck-close-bg" href="#!" aria-label="close lighbox" role="link"></a>

                                    </div><!--.popup-inner-content -->

                                </div><!--.popup-content-item -->

                            <?php endif; ?>

                        <?php $slider_count ++;
                                
                    endwhile; ?>

                </div>


        <?php endif; // GEN ENDIF
        
        wp_reset_postdata(); ?>


        <div class="slider-btn-control s-reviews for-mobile">

        <div class="button button--previous" disabled>

            <i class="fas fa-arrow-left"></i>

        </div>

        <div class="button button--next">

            <i class="fas fa-arrow-right"></i>

        </div>

        </div><!-- .slider-btn-control -->


        <p class="more-reviews-google">More reviews can be found on our official <a href="https://www.google.com/search?q=dogma+nyc&rlz=1C5CHFA_enGB983GB983&oq=dogma+nyc&aqs=chrome..69i57j46i175i199i512j0i512l2j69i59j69i60l3.2760j1j9&sourceid=chrome&ie=UTF-8#lrd=0x89c25992e4f49bcf:0x4367711de38acd82,1" target="_bank" rel="noopener noreferrer">Google page</a></p>
        
    </div><!-- .mr-row -->

</section><!-- .mr-section -->