


<?php get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<section class="block_wpr main_cntt">
			<div class="block_cntt">

<?php 
	if ( has_post_format( 'video' )) {
	  echo 'this is the video format';
	}
?>

				<div class="col3-4 post-list">
	
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php echo the_category_list(); ?>
						<h1 class="post_title"><?php the_title(); ?></h1>
						<p class="date">
							<?php 
								$date = 'Publicado em '. get_the_date('d/m/Y');
								$date .= ', '. get_the_time('g:i');

								if(get_the_modified_date()){
									$date .= ' /; Atualizado em '. get_the_modified_date('d/m/Y') .', '. get_the_modified_date('g:i');
								}
								//echo get_the_modified_date();
								echo $date; 
							?>
						</p>
						<p class="the_author">
							<?php the_author_posts_link(); ?>, para o Análise Jurídica
						</p>

					<?php
						$video_youtube_id = htmlspecialchars(get_post_meta(get_the_ID(), 'video_youtube_id', true)); 
						if($video_youtube_id):
					?>
						<div class="video_wpr">
							<iframe src="http://www.youtube.com/embed/<?php echo $video_youtube_id; ?>?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>
						</div>
					<?php else: ?>
						<figure class="post_img">
							<?php if ( has_post_thumbnail()) : ?>
								<?php the_post_thumbnail();  ?>
							<?php endif; ?>
						</figure>
					<?php endif; ?>

						<div class="text the_content">
							<?php the_content(); // Dynamic Content ?>
						</div>
						<div class="tags_wpr">
							<?php the_tags( __( '', 'html5blank' ), ' '); ?>
						</div>

						<div class="facebook">
							<h3 class="block_title">Comentários</h3>
							<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-mobile="true" width="auto"></div>
						</div>
						
						<div class="nextprev_buttons">
							<div class="col1-4">
								<span class="post_prev"><?php previous_post_link('%link', 'Anterior', TRUE); ?></span>
							</div>
							<div class="col2-4">
								&nbsp;
							</div>
							<div class="col1-4">
								<span class="post_next"><?php next_post_link('%link', 'Próximo', TRUE); ?></span>
							</div>
							<span class="clear"></span>
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
