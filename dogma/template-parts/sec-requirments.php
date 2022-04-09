<section class="mr-section sec-requirments bg-darker-v">

    <div class="mr-row">

        <?php $req_headline = get_field('req_headline'); 
        
              $req_sub_headline = get_field('req_text');
        
        if ( $req_headline ) : ?>

            <h2 class="mr-title text-center white-text"><?php echo $req_headline;?></h2>  

        <?php endif; if ( $req_sub_headline ): ?>

            <div class="mr-sub-title text-center white-text"><?php echo  $req_sub_headline; ?></div>

        <?php endif; ?>


        <?php if( have_rows('req_lists') ): ?>

            <ul class="requirments-items white-text">

                <?php while( have_rows('req_lists') ): the_row(); 
 
                    $req_item_content = get_sub_field('items'); ?>

                    <li class="req-item"><?php echo $req_item_content; ?></li>

                <?php endwhile; ?>

            </div><!-- .service-items -->

        <?php endif; ?>

    </div><!-- .mr-row -->

</section><!-- .mr-section -->