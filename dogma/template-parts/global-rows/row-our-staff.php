<div class="mr-row-columns bg-lighter-v">

    <div class="col-1-of-2 col-content">

        <?php $os_group_ctn = get_field('os_group_content','option');

            $os_title = $os_group_ctn['os_title']; 
              
            $os_content = $os_group_ctn['os_descriptions']; 
            
        if ( $os_title ) : ?>

            <h3 class="d-violet-text bernard-font-uppercase"><?php echo $os_title; ?></h3>

        <?php endif; if ( $os_content ) : ?>

            <div class="l-violet-text"><?php echo $os_content; ?></div>

        <?php endif; ?>

    </div>

    <div class="col-1-of-2 col-large-img">

        <?php $os_Group_Image = get_field('os_large_image','option'); 

                    $os_large = $os_Group_Image['os_image'];

                    $alt_text = get_post_meta($os_large , '_wp_attachment_image_alt', true); 
        
        if ( $os_large ) : ?>

            <img class="large-img" <?php awesome_acf_responsive_image($os_large ,'large_large','1400px'); ?>  alt="<?php echo $alt_text; ?>" /> 

        <?php endif; ?>

    </div>

</div><!-- .mr-row-columns -->