
                <?php get_template_part( 'template-parts/global-sections/contact-and', 'location' ); ?>
            
            </main><!-- #site-content -->


        <footer id="mr-footer" class="mr-section">

            <div class="mr-row-columns mr-row-widgets-1">

                <?php $fw_book_pup_group = get_field('book_your_pup_group','option'); 

                $fw_get_started_link = $fw_book_pup_group['get_started'];
                $fw_get_started_link_url = $fw_get_started_link['url'];
                $fw_get_started_link_title = $fw_get_started_link['title'];
                $fw_get_started_link_target = $fw_get_started_link['target'] ? $fw_get_started_link['target'] : '_self'; 
                
                    $fw_book_pup_headline = $fw_book_pup_group['headline']; 
                      
                    if ( $fw_book_pup_headline ) : ?>

                        <div class="col-1-of-2">

                            <h2 class="widget-title"><?php echo $fw_book_pup_headline; ?></h2>
                            
                        </div><!-- .col-1-of-2 -->

                    <?php endif; ?>

                    <?php if ( $fw_get_started_link ) : ?>

                        <div class="col-1-of-2">

                            <ul class="mr-buttons">

                                    <li class="btn-item"><a role="link" href="<?php echo esc_url( $fw_get_started_link_url ); ?>" target="<?php echo esc_attr( $fw_get_started_link_target ); ?>" rel="noopener noreferrer"><?php echo esc_html( $fw_get_started_link_title ); ?></a></li> 

                                    <li class="btn-item btn-no-bg"><a href=""><i class="fa fa-phone"></i>Contact Us</a></li>   

                            </ul>

                        </div><!-- .col-1-of-2 -->

                    <?php endif; ?>

            </div><!-- .mr-row -->

            <div class="mr-row-columns mr-row-widgets-2">

                <div class="footer-widgets">

                <a href="<?php echo get_site_url(); ?>" class="footer-logo" rel="home"><img class="small-img dogma-small-logo" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/footer-logo.png" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/footer-logo-2x.png 2x" alt="dogma logo"/></a>

                <?php $fw_one_group = get_field('widget_1','option'); 
                
                      $fw_one_content = $fw_one_group['short_descriptions']; 
                      
                      if ( $fw_one_content ) : ?>

                        <div class="f-descriptions"><?php echo $fw_one_content; ?></div>
                    
                      <?php endif; ?>
                    
                    <?php get_template_part( 'template-parts/footer-social', 'icons' ); ?>

                </div><!-- .footer-widgets -->

                <?php if ( is_active_sidebar( 'footer-widget-one' ) ) : ?>

                    <div class="footer-widgets">

                        <div id="widget-areas-one" class="widget-areas">

                            <?php dynamic_sidebar( 'footer-widget-one' ); ?>

                        </div><!-- .widget-areas -->

                    </div><!-- .footer-widgets -->

                <?php endif; ?>

                <div class="footer-widgets">

                    <div class="widget-inner-content">

                        <h1 class="widget-title">Contact Us</h1>

                        <a class="address" href="https://goo.gl/maps/ZWYAhm3hq8qoWnYY6" role="link" target="_blank" rel="noopener noreferrer">21-Seventh Ave. South New York, NY 10014</a><br>

                        <?php $footer_phone_num = get_field('footer_phone_number','option');

                        $info_footer_text_no = $footer_phone_num['info_text_number'];

                        $info_footer_link_no = $footer_phone_num['info_link_number'];

                            if ( $info_footer_text_no ) : ?>

                                <a href="tel:<?php echo $info_footer_link_no; ?>"><?php echo $info_footer_text_no; ?></a>

                             <?php endif; ?>   
                        
                        <br>

                        <a href="mailto:dogma@dogmanyc.com">dogma@dogmanyc.com</a>

                    </div>

                    <div class="widget-inner-content">

                        <h1 class="widget-title">Hours</h1>

                        <p>Monday to Friday<br> 7:30AM - 7:00PM</p>

                        <p>Saturday and Sunday<br> 9:00AM - 5:00PM</p>

                    </div>

                </div><!-- .footer-widgets -->

            </div><!-- .mr-row -->

        </footer>

        </div><!-- main-wrapper -->


        <?php wp_footer(); ?>

        <style>
            body {
                opacity: 1 !important;
            }
        </style>

        

        <script> window.broadlyChat = { id: "5ec55b5ffbab210016d8ebb9" }; </script> <script src="https://chat.broadly.com/javascript/chat.js" async></script>

    </body>

</html>
