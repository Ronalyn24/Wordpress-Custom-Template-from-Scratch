<?php
/*
Template Name: Services - Dog Training
*/

get_header(); ?>


    <div class="main-content mr-dog-training-page">

        <?php get_template_part( 'template-parts/elements', 'banner' ); ?>

        <?php get_template_part( 'template-parts/global-sections/partners', 'logo' ); ?>


        <section class="mr-section sec-dog-train bg-darker-v">

            <div class="mr-row">

                <?php $dog_train_headline = get_field('dog_train_headline'); 

                    $dog_train_ctn = get_field('dog_train_descriptions');
                
                if ( $dog_train_headline ) : ?>

                    <h2 class="mr-title text-center white-text span-pink headline-bolder bernard-font-uppercase"><?php echo $dog_train_headline;?></h2>  

                <?php endif; if ( $dog_train_ctn ) : ?>

                    <div class="mt-content white-text v-small-text">

                        <?php echo $dog_train_ctn; ?>

                    </div>

                <?php endif; ?>

            </div><!-- .mr-row -->

        </section><!-- .mr-section -->


        <section id="why-dogma" class="mr-section sec-other-services">
            
            <div class="mr-row-columns row-left-img bg-lighter-blue row-white">

                <div class="col-1-of-2 col-content">

                    <?php $row_white_left = get_field('white_row_left'); 

                    $row_white_title = $row_white_left['title_row_white'];

                    $row_white_ctn = $row_white_left['text_row_white'];
                    
                    if ( $row_white_title ) : ?>

                        <h3 class="d-violet-text bernard-font-uppercase"><?php echo $row_white_title; ?></h3>

                    <?php endif; 
                    
                    if ( $row_white_ctn ) : ?>

                        <div class="l-violet-text"><?php echo $row_white_ctn; ?></div>

                    <?php endif; ?>

                </div>

                <div class="col-1-of-2 col-large-img">

                    <?php $row_white_right = get_field('white_row_right'); 

                            $row_white_img = $row_white_right['image_row_white'];

                                $alt_row_white_text = get_post_meta($row_white_img , '_wp_attachment_image_alt', true); 
                    
                    if ( $row_white_img ) : ?>

                        <img class="large-img" <?php awesome_acf_responsive_image($row_white_img ,'large_large','1400px'); ?>  alt="<?php echo $alt_row_white_text; ?>" /> 

                    <?php endif; ?>

                </div>

            </div><!-- .mr-row-columns -->


                <div class="mr-row-columns bg-lighter-v">

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

        <section class="mr-section sec-other-quest bg-darker-v">

            <div class="mr-row-columns row-faq">

                <div class="col-2-of-3">

                    <?php $questions_headline = get_field('other_q_headline'); 
                        
                    if ( $questions_headline ) : ?>

                        <h2 class="mr-title white-text headline-bolder bernard-font-uppercase"><?php echo  $questions_headline;?></h2>  

                    <?php endif; ?>

                    <?php if( have_rows( 'questions_lists') ): ?>

                        <div class="mt-content white-text v-small-text">

                            <?php while( have_rows( 'questions_lists') ): the_row(); 

                                $question_title = get_sub_field('title');

                                $question_content = get_sub_field('descriptions'); ?>

                               <div class="adt-inner-ctn">

                                    <h6 class="v-small-title"><?php echo $question_title; ?></h6>   
                                
                                    <?php echo $question_content; ?>

                               </div>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>
                            
                </div>

                <div class="col-1-of-3">

                    <?php if( have_rows( 'add_more_images') ): ?>

                        <div class="service-items vertical">

                            <?php while( have_rows( 'add_more_images') ): the_row(); 

                                $adt_img = get_sub_field('adt_image'); 
                                    
                                $adt_img_alt = get_post_meta($adt_img , '_wp_attachment_image_alt', true); ?>

                                <div class="ser-item">

                                    <div class="image-container">

                                        <img class="thumbnail-img default-cols" <?php awesome_acf_responsive_image($adt_img ,'medium_large-h','740px'); ?>  alt="<?php echo $adt_img_alt; ?>" /> 

                                    </div>

                                </div><!-- .ser-item -->

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div><!-- .mr-row -->

        </section><!-- .mr-section -->

        <?php get_template_part( 'template-parts/global-sections/tabs', 'content' ); ?>

        <?php get_template_part( 'template-parts/global-sections/reviews', 'slider' ); ?>

        <?php get_template_part( 'template-parts/global-sections/our', 'services' ); ?>

        <?php get_template_part( 'template-parts/global-sections/tour-our', 'space' ); ?>  

        <?php get_template_part( 'template-parts/sec-serving-the-best', 'dogs' ); ?>

        <?php get_template_part( 'template-parts/sec-frequently-asked', 'question' ); ?>

    </div><!-- .main-content -->

<?php get_footer();