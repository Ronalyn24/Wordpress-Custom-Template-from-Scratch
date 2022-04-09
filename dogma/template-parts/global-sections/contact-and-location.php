<section id="contact-location" class="mr-section sec-other-services contact-bottom">

    <div class="mr-row-columns row-left-img">

        <div class="col-1-of-2 col-content">

            <?php $contact_group_ctn = get_field('contact_group_content','option');

                $contact_title = $contact_group_ctn['title'];  

                $contact_content = $contact_group_ctn['descriptions']; 
                
            if ( $contact_title ) : ?>

                <h3 class="d-violet-text bernard-font-uppercase"><?php echo $contact_title; ?></h3>

            <?php endif; if ( $contact_content ) : ?>

                <div class="l-violet-text"><?php echo $contact_content; ?></div>

            <?php endif; ?>

        </div>

        <div class="col-1-of-2 col-large-img">

            <?php $contact_image_group = get_field('contact_large_image','option'); 
                        $contact_image = $contact_image_group['image'];

                        $contact_alt_text = get_post_meta( $contact_image , '_wp_attachment_image_alt', true); 
            
            if ( $contact_image ) : ?>

                <img class="large-img" <?php awesome_acf_responsive_image($contact_image ,'large_large','1400px'); ?>  alt="<?php echo $contact_alt_text; ?>" /> 

            <?php endif; ?>

        </div>

    </div><!-- .mr-row-columns -->         

</section>