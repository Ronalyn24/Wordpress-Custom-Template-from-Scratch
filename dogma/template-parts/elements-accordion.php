
<?php if( have_rows('accordion_items') ): ?>

    <div class="accordion-container">
    
        <?php while( have_rows('accordion_items') ) : the_row();

            $acc_title = get_sub_field('accordion_title');
            $acc_content = get_sub_field('accordion_content'); ?>
        
            <div class="acc-item">

                <button class="acc-btn"><?php echo $acc_title; ?><i class="fa fa-plus"></i></button>

                <div class="content">

                    <?php echo $acc_content; ?>

                </div>

            </div>
    
        <?php endwhile; ?>

    </div>

<?php endif; ?>


