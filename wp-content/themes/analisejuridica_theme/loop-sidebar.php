<li class="postlist_item">		
	<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
		<figure class="post_img">
			<p class="date">
				<?php the_time('d/m/Y'); ?>
			</p>
				<?php get_template_part('thumbnail'); ?>

		</figure>
		<div class="text">
			<?php echo the_category_list(); ?>
			<h3 class="title"><?php the_title(); ?></h3>
		</div>
		<span class="line"></span>
		<span class="clear"></span>

		<a class="link" href="<?php the_permalink(); ?>"></a> 

	</article>
</li>
