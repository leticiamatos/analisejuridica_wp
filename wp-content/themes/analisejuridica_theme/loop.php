<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<li class="postlist_item">		
		<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
			<figure class="post_img">
				<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail();  ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-no.png">
				<?php endif; ?>
			</figure>
			<div class="text">
				<h3 class="title"><?php the_title(); ?></h3>
				<div class="excpt">
					<?php echo get_special_excerpt(250); ?>...

				</div>
			</div>

			<span class="clear"></span>
			<a class="link" href="<?php the_permalink(); ?>"></a> 

		</article>
	</li>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<li>
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
	</li>

<?php endif; ?>
