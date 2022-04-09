<div id="photo-gallery">

    <div class="service-items no-text"> 

		<?php if( have_rows('sbd_images_repeater') ): 

			$total = count(get_field('sbd_images_repeater'));
			$count = 0;
			$number = 5;		
            			
			while ( have_rows('sbd_images_repeater') ) : the_row(); ?>	
            					
                    <div class="ser-item">

                        <?php $image = get_sub_field('image');

                        $sbd_wv_alt_text = get_post_meta($image , '_wp_attachment_image_alt', true);?>

                        <div class="image-container">

                            <img class="thumbnail-img" <?php awesome_acf_responsive_image($image ,'medium_medium','365px'); ?>  alt="<?php echo $sbd_wv_alt_text; ?>" />

                        </div><!-- .image-container -->

                    </div><!-- .ser-item -->
                    
				<?php
				if ($count == $number) {
					// we've shown the number, break out of loop
					break;
				} ?>					
			    <?php $count++; 
                
            endwhile;

		else : endif; ?>

	</div>

	<a id="gallery-load-more" class="ajax-load-button" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>See More Photos</a>

</div>