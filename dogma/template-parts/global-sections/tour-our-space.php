<section id="tour-space" class="mr-section sec-slider sec-space">

    <div class="mr-row">

        <div class="top-content">

            <h2 class="mr-title l-violet-text headline-bolder bernard-font-uppercase">Tour Our Space</h2>  

            <?php if( have_rows('space_tab_repeater','option') ): 

                echo '<ul class="tab-header">';

                    $count = 1; 

                        while( have_rows('space_tab_repeater','option') ): the_row(); 

                            $space_tab_title = get_sub_field('title'); ?>

                                <li space-tab-item="<?php echo $count; ?>" class="space-tab-item <?php if($count == 1) { echo 'space-current'; } ?>"><?php echo $space_tab_title; ?></li>
                            
                        <?php $count++;

                    endwhile; 

                echo '</ul> <!-- .tab-header -->'; ?>

            <div class="slider-btn-control s-space for-desktop">

                <div class="button button--previous">

                    <i class="fas fa-arrow-left"></i>
                    
                </div>

                <div class="button button--next">

                    <i class="fas fa-arrow-right"></i>

                </div>

            </div><!-- .slider-btn-control -->

        </div>

        <?php echo'<div class="tab-content space-tab-content">';

            $count = 1; 

            while( have_rows('space_tab_repeater','option') ): the_row(); ?>

                <div id="space-tab-inner-content-<?php echo $count; ?>" class="space-content-wrapper <?php if($count == 1) { echo 'space-current'; } ?>">

                    <div class="space-carousel">

                        <?php $gallery_images = get_sub_field('gallery_slider','option');

                        $gallery_img_alt = get_post_meta( $gallery_images , '_wp_attachment_image_alt', true);
                        
                        foreach( $gallery_images as $gall_image ): ?>

                            <img class="carousel-cell-image" <?php awesome_acf_responsive_image($gall_image ,'medium_large','840px'); ?>  alt="<?php echo $gallery_img_alt; ?>" /> 

                        <?php endforeach; ?>
                        
                    </div><!-- #space-slider -->

                </div><!--.tab-content-wrapper -->

            <?php $count++;

            endwhile; 

        echo '</div> <!--.tab-content -->';

        endif; ?> <!-- //Repeater ENDIF  -->


        <div class="slider-btn-control s-space for-mobile">

            <div class="button button--previous">

                <i class="fas fa-arrow-left"></i>
                
            </div>

            <div class="button button--next">

                <i class="fas fa-arrow-right"></i>

            </div>

        </div><!-- .slider-btn-control -->

    </div><!-- .mr-row -->

</section><!-- .mr-section -->