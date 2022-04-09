<section class="mr-section sec-our-story">

    <div class="mr-inner-wrapper"> 

        <?php $story_left_col = get_field('story_left_column'); 

        $story_large_img = $story_left_col['image'];

        $story_alt_text = get_post_meta($story_large_img , '_wp_attachment_image_alt', true); 
        
        // 2nd column
        $story_right_col = get_field('story_right_column'); 

        $story_right_title = $story_right_col['title']; 

        $story_right_qoutes = $story_right_col['qoutes']; 

        $story_right_ctn = $story_right_col['descriptions'];

        $story_right_owner = $story_right_col['owner_name'];
        
        $story_right_position = $story_right_col['position']; ?>

    <?php if ( $story_large_img ) : ?>

            <div class="mr-inner-about-ctn large-image">

                <img class="jun-takama for-desktop" <?php awesome_acf_responsive_image($story_large_img ,'Large_medium','900px'); ?>  alt="<?php echo $story_alt_text; ?>" />
                
            </div> <!-- .inner-wrapper -->  
            
        <?php endif; ?>

        <div class="mr-inner-about-ctn mr-content"> 

        <?php if ( $story_right_title ) : ?>
        
            <h1 class="mr-title l-violet-text headline-bolder bernard-font-uppercase">

                <?php echo $story_right_title; ?>

            </h1>  

        <?php endif; if ( $story_right_qoutes ) : ?>

            <p><i><?php echo $story_right_qoutes; ?></i></p>

        <?php endif; if ( $story_large_img ) : ?>

            <img class="jun-takama for-mobile" <?php awesome_acf_responsive_image($story_large_img ,'Large_medium','900px'); ?>  alt="<?php echo $story_alt_text; ?>" />
                
        <?php endif; if ( $story_right_ctn ) : echo $story_right_ctn; endif;

            if ( $story_right_owner ) : ?>

                <h2 class="owner text-right"><?php echo $story_right_owner; ?><span><?php echo $story_right_position; ?></span></h2>

            <?php endif; ?>

        </div>

    </div> <!-- .inner-wrapper -->     
    
</section><!-- .mr-section -->