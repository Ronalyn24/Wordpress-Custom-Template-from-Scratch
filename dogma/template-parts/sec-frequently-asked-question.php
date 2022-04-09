<section id="faqs" class="mr-section sec-faq bg-darker-v">

<div class="mr-row">  

    <?php $faqTitle = get_field('faq_headline');
    
    if (!empty( $faqTitle )) : ?>

        <h2 class="mr-title white-text text-center bernard-font-uppercase"><?php echo $faqTitle; ?></h2>

    <?php endif;?>

    <?php get_template_part( 'template-parts/elements', 'accordion' ); ?>

</div><!-- .mr-row -->

</section><!-- .mr-section -->   