<?php
/*
Template Name: Services - Dog Grooming
*/

get_header(); ?>


    <div class="main-content mr-dog-grooming-page">

        <?php get_template_part( 'template-parts/elements', 'banner' ); ?>


        <?php get_template_part( 'template-parts/global-sections/partners', 'logo' ); ?>

        <section id="why-dogma" class="mr-section sec-other-services">
            
            <div class="mr-row-columns row-left-img bg-lighter-blue">

                <div class="col-1-of-2 col-content">

                    <?php $vm_group_ctn = get_field('vm_group_content');

                        $vm_title = $vm_group_ctn['vm_title'];   
                        
                        $vm_content = $vm_group_ctn['vm_descriptions']; 
                        
                    if ( $vm_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $vm_title; ?></h3>

                    <?php endif; if ( $vm_content ) : ?>

                        <div class="l-violet-text"><?php echo $vm_content; ?></div>
                    
                    <?php endif; ?>
                    
                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $vm_image_group = get_field('vm_large_image'); 

                                $vm_image = $vm_image_group['vm_elem_image'];

                                $alt_text = get_post_meta($vm_image , '_wp_attachment_image_alt', true); 
                    
                    if ( $vm_image ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($vm_image ,'large_large','1400px'); ?>  alt="<?php echo $alt_text; ?>" /> 

                    <?php endif; ?>

                </div>

            </div><!-- .mr-row-columns -->

            <div class="mr-row-columns bg-lighter-v">

                <div class="col-1-of-2 col-content">

                    <?php $os_group_ctn = get_field('os_group_content');

                        $os_title = $os_group_ctn['os_title']; 
                        
                        $os_content = $os_group_ctn['os_descriptions']; 
                        
                    if ( $os_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $os_title; ?></h3>

                    <?php endif; if ( $os_content ) : ?>

                        <div class="l-violet-text"><?php echo $os_content; ?></div>

                    <?php endif; ?>

                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $os_Group_Image = get_field('os_large_image'); 

                                $os_large = $os_Group_Image['os_image'];

                                $alt_text = get_post_meta($os_large , '_wp_attachment_image_alt', true); 
                    
                    if ( $os_large ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($os_large ,'large_large','1400px'); ?>  alt="<?php echo $alt_text; ?>" /> 

                    <?php endif; ?>

                </div>

                </div><!-- .mr-row-columns -->

                <div class="mr-row-columns row-left-img bg-lighter-blue">

                    <div class="col-1-of-2 col-content">

                        <?php $cfb_group_ctn = get_field('cfb_group_content');

                            $cfb_title = $cfb_group_ctn['cfb_title'];  

                            $cfb_content = $cfb_group_ctn['cfb_descriptions']; 
                            
                        if ( $cfb_title ) : ?>

                            <h3 class="d-violet-text bernard-font-uppercase"><?php echo $cfb_title; ?></h3>

                        <?php endif; if ( $cfb_content ) : ?>

                            <div class="l-violet-text"><?php echo $cfb_content; ?></div>

                        <?php endif; ?>

                    </div>

                    <div class="col-1-of-2 col-large-img">

                        <?php $cfb_image_group = get_field('cfb_large_image'); 
                        
                                    $cfb_image = $cfb_image_group['cfb_image'];

                                    $alt_text = get_post_meta($cfb_image , '_wp_attachment_image_alt', true); 
                        
                        if ( $cfb_image ) : ?>

                            <img class="large-img" <?php awesome_acf_responsive_image($cfb_image ,'large_large','1400px'); ?>  alt="<?php echo $alt_text; ?>" /> 

                        <?php endif; ?>

                    </div>

                    </div><!-- .mr-row-columns -->

        </section><!-- .mr-section -->

        <?php get_template_part( 'template-parts/sec-before-we-get', 'started' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tabs', 'content' ); ?>

        <?php get_template_part( 'template-parts/global-sections/reviews', 'slider' ); ?>

        <?php get_template_part( 'template-parts/global-sections/our', 'services' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tour-our', 'space' ); ?>

        <?php get_template_part( 'template-parts/sec-serving-the-best', 'dogs' ); ?>

        <?php get_template_part( 'template-parts/sec-frequently-asked', 'question' ); ?>

    </div><!-- .main-content -->

<?php get_footer();