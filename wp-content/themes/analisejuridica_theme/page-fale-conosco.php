


<?php get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<section class="block_wpr main_cntt">
			<div class="block_cntt">
				<div class="col3-4 post-list">
					<div class="social_wpr">
						<?php // echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?> 
						<?php //echo do_shortcode('[DISPLAY_ULTIMATE_PLUS]'); ?>
					</div>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php echo the_category_list(); ?>
						<h1 class="page_title"><?php the_title(); ?></h1>

						<figure class="post_img thumb_img">
							<?php if ( has_post_thumbnail()) : ?>
								<?php the_post_thumbnail();  ?>
							<?php endif; ?>
						</figure>
						<div class="text the_content">
							<div class="col1-2">
								<?php the_content(); // Dynamic Content ?>
								<p class="gap"></p>
							</div>
							<div class="col1-2">
								<div class="contactform_wpr sForm">
									<?php echo do_shortcode('[contact-form-7 id="3617" title="Fale Conosco - Página Fale Conosco"]' ); ?>
								</div>
							</div>
							<span class="clear"></span>
						</div>
						

					</article>

				</div>

				<?php get_sidebar(); ?>
				<span class="clear"></span>

			</div>
		</section>



	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<!-- /section -->
	</main>


<?php get_footer(); ?>