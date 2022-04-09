<div class="mr-row-columns row-left-img bg-lighter-blue">

    <div class="col-1-of-2 col-content">

        <?php $cfb_group_ctn = get_field('cfb_group_content','option');

            $cfb_title = $cfb_group_ctn['cfb_title'];  

            $cfb_content = $cfb_group_ctn['cfb_descriptions']; 
            
        if ( $cfb_title ) : ?>

            <h3 class="d-violet-text bernard-font-uppercase"><?php echo $cfb_title; ?></h3>

        <?php endif; if ( $cfb_content ) : ?>

            <div class="l-violet-text"><?php echo $cfb_content; ?></div>

        <?php endif; ?>

    </div>

    <div class="col-1-of-2 col-large-img">

        <?php $cfb_image_group = get_field('cfb_large_image','option'); 
                    $cfb_image = $cfb_image_group['cfb_image'];

                     $alt_text = get_post_meta($cfb_image , '_wp_attachment_image_alt', true); 
        
        if ( $cfb_image ) : ?>

            <img class="large-img" <?php awesome_acf_responsive_image($cfb_image ,'large_large','1400px'); ?>  alt="<?php echo $alt_text; ?>" /> 

        <?php endif; ?>

    </div>

</div><!-- .mr-row-columns -->