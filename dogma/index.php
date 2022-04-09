<?php get_header(); ?>

<div class="main-content mr-default-page">

		<?php if ( have_posts() ) : 
			
			while ( have_posts() ) : the_post(); ?>

				<section class="mr-section">

					<div class="mr-row">

						<div class="mr-inner-content">

							<h1><?php the_title(); ?></h1>

							<?php the_content(); ?>

						</div><!-- .mr-inner-content -->

					</div><!-- .mr-row -->

				</section><!-- .mr-section -->

		<?php endwhile; 
		
		else : ?>

			<p class="no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

</div><!-- .main-content -->

<?php get_footer(); ?>