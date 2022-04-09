<div class="mr-row-columns row-left-img bg-lighter-blue row-video-monitor">

    <div class="col-1-of-2 col-content">

        <?php $vm_group_ctn = get_field('vm_group_content','option');

              $vm_title = $vm_group_ctn['vm_title'];   
              
              $vm_content = $vm_group_ctn['vm_descriptions']; 
              
        if ( $vm_title ) : ?>

            <h3 class="d-violet-text bernard-font-uppercase"><?php echo $vm_title; ?></h3>

        <?php endif; if ( $vm_content ) : ?>

            <div class="l-violet-text"><?php echo $vm_content; ?></div>
        
        <?php endif; ?>
        
    </div>

    <div class="col-1-of-2 col-large-img">

        <?php $vm_image_group = get_field('vm_large_image','option'); 

                    $vm_image = $vm_image_group['vm_elem_image'];

                    $alt_text = get_post_meta($vm_image , '_wp_attachment_image_alt', true); 
        
        if ( $vm_image ) : ?>

            <img class="large-img" <?php awesome_acf_responsive_image($vm_image ,'large_large','1400px'); ?>  alt="<?php echo $alt_text; ?>" /> 

        <?php endif; ?>

        
        <ul class="text-lists">

            <?php $video_TOne = get_field('text_one','option'); 
               $video_TTwo = get_field('text_two','option'); 
               $video_TThree = get_field('text_three','option');  ?> 
               
            <?php if ( $video_TOne ) : ?>

                <li class="text-item first"><span><?php echo $video_TOne; ?></span></li>

            <?php endif; ?>
            
            <?php if ( $video_TTwo ) : ?>

                <li class="text-item second"><span><?php echo $video_TTwo; ?></span></li>

            <?php endif; ?>
            
            <?php if ( $video_TThree ) : ?>

                <li class="text-item third"><span><?php echo $video_TThree; ?></span></li>

            <?php endif; ?>

        </ul>

    </div>

</div><!-- .mr-row-columns -->