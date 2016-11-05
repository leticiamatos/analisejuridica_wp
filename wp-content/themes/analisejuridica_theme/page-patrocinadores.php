


<?php get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<section class="block_wpr main_cntt">
			<div class="block_cntt">
				<div class="col3-4 post-list">
	
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php echo the_category_list(); ?>
						<h1 class="page_title"><?php the_title(); ?></h1>

						<figure class="post_img  thumb_img">
							<?php if ( has_post_thumbnail()) : ?>
								<?php the_post_thumbnail();  ?>
							<?php endif; ?>
						</figure>
						<div class="text the_content">
							<?php the_content(); // Dynamic Content ?>
						</div>
						
						<div class="sponsorsform_wpr">
							<h4 class="block_title">Seja um patrocinador</h4>
							<div class="sponsorsform_cntt sForm">
								<form>
									<div class="form_div">
										<!-- <label>Nome:</label> -->
										<input type="text" class="txt" placeholder="Nome:" />
									</div>
									<div class="form_div">
										<!-- <label>E-mail:</label> -->
										<input type="text" class="txt" placeholder="E-mail:" />
									</div>
									<div class="buttons">
										<div class="captcha">		
										</div>
										<input type="button" class="btn" value="Enviar" />
									</div>
									<span class="clear"></span>
								</form>
							</div>
						</div>

					</article>
				

				</div>

				<?php get_sidebar(); ?>
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