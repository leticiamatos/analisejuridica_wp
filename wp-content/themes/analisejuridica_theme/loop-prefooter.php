<li class="postlist_item">		
	<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
		<figure class="post_img">
				<?php get_template_part('thumbnail'); ?>

		</figure>
		<div class="text">
			<?php echo the_category_list(); ?>
			<h3 class="title"><?php the_title(); ?></h3>
		</div>

		<span class="clear"></span>
		<?php
			$video_embed_code = htmlspecialchars(get_post_meta(get_the_ID(), 'video_embed_code', true)); 
			if($video_embed_code):
		?>
			<a class="link bxlider_link" data-videocntt="video_loader01"></a> 
			<code>
				<?php //echo $video_embed_code; ?>
			</code>

		<?php else: ?>
			<a class="link" href="<?php the_permalink(); ?>"></a> 
		<?php endif; ?>

	</article>
</li>
