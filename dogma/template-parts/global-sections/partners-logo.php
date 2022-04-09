<section id="client-partners" class="mr-section sec-partners bg-lighter-v">

    <div class="mr-row-columns">

        <div class="col-1-of-3 partner-items">

            <div class="box-content">

                <?php $partner_one = get_field('partner_logo_1','option');

                  $part_one_title = $partner_one['title']; 

                  $part_one_logo = $partner_one['logo']; 

                  $part_one_alt_text = get_post_meta($part_one_logo , '_wp_attachment_image_alt', true);
                  
                if ( $part_one_title ) : ?>

                    <p class="mr-title"><?php echo $part_one_title; ?></p>

                <?php endif; 

                if ( $part_one_logo ) : ?>

                    <div class="inner-logo">

                        <img class="small-img img-center the-spirit" <?php awesome_acf_responsive_image( $part_one_logo ,'medium_medium','365px'); ?>  alt="<?php echo $part_one_alt_text; ?>" /> 

                    </div>
        
                <?php endif; ?>

            </div><!-- .box-content -->

        </div><!-- .col-1-of-3 -->

        <div class="col-1-of-3 partner-items">

            <div class="box-content">

                <?php $partner_two = get_field('partner_logo_2','option');

                $part_two_title = $partner_two['title']; 

                $part_two_logo = $partner_two['logo']; 

                $part_two_alt_text = get_post_meta($part_two_logo , '_wp_attachment_image_alt', true);
                
                if ( $part_two_title ) : ?>

                    <p class="mr-title"><?php echo $part_two_title; ?></p>

                <?php endif; 

                if ( $part_two_logo ) : ?>

                    <div class="inner-logo">

                        <img class="small-img img-center expertise" <?php awesome_acf_responsive_image( $part_two_logo ,'medium_medium','365px'); ?>  alt="<?php echo $part_two_alt_text; ?>" /> 

                    </div>

                <?php endif; ?>

            </div><!-- .box-content -->

        </div><!-- .col-1-of-3 -->

        <div class="col-1-of-3 partner-items">

            <div class="box-content">

                <?php $partner_three = get_field('partner_logo_3','option');

                $part_three_title = $partner_three['title']; 

                $part_three_logo = $partner_three['logo']; 

                $part_three_alt_text = get_post_meta($part_three_logo , '_wp_attachment_image_alt', true);

                if ( $part_three_title ) : ?>

                    <p class="mr-title"><?php echo $part_three_title; ?></p>

                <?php endif; 

                if ( $part_three_logo ) : ?>

                    <div class="inner-logo">

                        <img class="small-img img-center pawp" <?php awesome_acf_responsive_image( $part_three_logo ,'medium_medium','365px'); ?>  alt="<?php echo $part_three_alt_text; ?>" /> 

                    </div>

                <?php endif; ?>

            </div><!-- .box-content -->

        </div><!-- .col-1-of-3 -->

    </div><!-- .mr-row-columns -->

</section><!-- .mr-section -->





