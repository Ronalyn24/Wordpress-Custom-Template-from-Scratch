<section id="pricing" class="mr-section sec-pricing sec-gen-tab">

    <div class="mr-row mr-tab">

        <div class="tab-top-content">

            <h2 class="mr-title l-violet-text headline-bolder bernard-font-uppercase">Pricing</h2>

            <ul class="tab-header">

                <?php $parent_count = 1; ?>

                    <li class="gen-tab-item <?php if (is_page( array( '10','160' ) )) : ?>tab-current<?php endif;?>" data-tab-item="1">Daycare</li>

                    <li class="gen-tab-item <?php if (is_page( '183' )) : ?>tab-current<?php endif;?>" data-tab-item="2">Boarding</li>

                    <li class="gen-tab-item <?php if (is_page( '305' )) : ?>tab-current<?php endif;?>" data-tab-item="3">Grooming & Spa</li>

                    <li class="gen-tab-item <?php if (is_page( '288' )) : ?>tab-current<?php endif;?>" data-tab-item="4">Walking</li>

                    <li class="gen-tab-item <?php if (is_page( '420' )) : ?>tab-current<?php endif;?>" data-tab-item="5">Classes</li>
                
                    <li class="gen-tab-item <?php if (is_page( '384' )) : ?>tab-current<?php endif;?>" data-tab-item="6">Training</li>
                    

                <?php $parent_count++; ?>

            </ul><!--.tab-header -->

        </div><!--.tab-top-content -->


         <div class="gen-tab-content">

            <?php if( have_rows('tab_group','option') ): 
            
            while( have_rows('tab_group','option') ): the_row(); 

                $parent_count = 1; ?>

                <div id="tab-inner-content-1" class="tab-content-wrapper col-two scroll-snap <?php if (is_page( array( '10','160' ) )) : ?>tab-current<?php endif;?>">  

                    <?php get_template_part( 'template-parts/global-sections/tabs-each-content/tab-content', 'daycare' ); ?>

                </div><!--.tab-content-wrapper -->


                <div id="tab-inner-content-2" class="tab-content-wrapper col-one <?php if (is_page( '183' )) : ?>tab-current<?php endif;?>">  

                    <?php get_template_part( 'template-parts/global-sections/tabs-each-content/tab-content', 'boarding' ); ?>

                </div><!--.tab-content-wrapper -->


                <div id="tab-inner-content-3" class="tab-content-wrapper col-four scroll-snap <?php if (is_page( '305' )) : ?>tab-current<?php endif;?>">  

                    <?php get_template_part( 'template-parts/global-sections/tabs-each-content/tab-content', 'grooming' ); ?>

                </div><!--.tab-content-wrapper -->


                <div id="tab-inner-content-4" class="tab-content-wrapper col-three scroll-snap <?php if (is_page( '288' )) : ?>tab-current<?php endif;?>">  

                    <?php get_template_part( 'template-parts/global-sections/tabs-each-content/tab-content', 'walking' ); ?>

                </div><!--.tab-content-wrapper -->

                <div id="tab-inner-content-5" class="tab-content-wrapper col-three scroll-snap <?php if (is_page( '420' )) : ?>tab-current<?php endif;?>">  

                    <?php get_template_part( 'template-parts/global-sections/tabs-each-content/tab-content', 'classes' ); ?>

                </div><!--.tab-content-wrapper -->

                <div id="tab-inner-content-6" class="tab-content-wrapper col-three scroll-snap <?php if (is_page( '384' )) : ?>tab-current<?php endif;?>">  

                    <?php get_template_part( 'template-parts/global-sections/tabs-each-content/tab-content', 'training' ); ?>

                </div><!--.tab-content-wrapper -->


                <?php $parent_count++; ?>

            <?php endwhile; endif; ?>

        </div> <!--.gen-tab-content -->

    </div><!-- .mr-row -->

</section><!-- .mr-section -->