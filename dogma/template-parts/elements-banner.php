    <?php $banner_bg = get_field('background_image');
    
              $banner_title = get_field('banner_headline');
              
              $banner_content = get_field('banner_desc'); 
              
              $banner_images = get_field('banner_mobile_image');

              $benner_img_alt = get_post_meta( $banner_images , '_wp_attachment_image_alt', true);
              
              ?>

        <section class="mr-section sec-banner" <?php if ( !empty( $banner_bg ) ) : ?>
        
                style="--banner-bg:url('<?php echo $banner_bg['sizes']['large_large']; ?>')"

                <?php else : ?> style="--banner-bg:#2D1338" <?php endif; ?> >

            <div class="mr-row">

                <div class="mr-content">

                    <?php if ( $banner_title ) : ?>

                        <h1 class="mr-title white-text headline-bolder bernard-font-uppercase"><?php echo $banner_title; ?></h1>

                    <?php endif; if ( $banner_content ) : ?>    

                        <div class="mr-sub-title white-text"><?php echo $banner_content; ?></div>

                    <?php endif; ?>

                    <ul class="mr-buttons">

                        <?php $banner_buttons = get_field('banner_buttons');
                              $bb_One = $banner_buttons['button_1'];
                              $bb_Two = $banner_buttons['button_2'];

                        if( $bb_One ): 
                            $bb_One_url = $bb_One['url'];
                            $bb_One_title = $bb_One['title'];
                            $bb_One_target = $bb_One['target'] ? $bb_One['target'] : '_self'; ?>

                            <li class="btn-item">

                                <a role="button" href="<?php echo esc_url( $bb_One_url ); ?>" target="<?php echo esc_attr( $bb_One_target ); ?>" rel="noopener noreferrer"><?php echo esc_html( $bb_One_title ); ?></a>

                            </li>

                        <?php endif; if( $bb_Two ): 
                            $bb_Two_url = $bb_Two['url'];
                            $bb_Two_title = $bb_Two['title'];
                            $bb_Two_target = $bb_Two['target'] ? $bb_Two['target'] : '_self'; ?>

                            <li class="btn-item btn-no-bg">

                                <a role="button" href="<?php echo esc_url( $bb_Two_url ); ?>" target="<?php echo esc_attr( $bb_Two_target ); ?>"><?php echo esc_html( $bb_Two_title ); ?></a>
                                
                            </li>

                        <?php endif; ?>

                    </ul><!-- .mr-buttons -->

                    <?php if (!empty( $banner_images )) : ?>

                        <img class="banner-image" <?php awesome_acf_responsive_image($banner_images ,'medium_large','840px'); ?>  alt="<?php echo $benner_img_alt; ?>" /> 

                    <?php else : ?>

                        <img class="banner-image" src="<?php echo get_site_url() ;?>/wp-content/uploads/2021/12/hero-home-mobile.jpg"  alt="Dogs Comfortable" /> 

                    <?php endif; ?>

                </div><!-- .mr-content -->

            </div><!-- .mr-row -->

        </section><!-- .mr-section -->