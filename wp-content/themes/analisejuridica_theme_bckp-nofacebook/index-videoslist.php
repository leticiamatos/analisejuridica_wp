<?php 
	
	$cat_obj = get_category_by_slug( 'videos' );
	$cat_id = $cat_obj->term_id;

	$args = array( 
		'posts_per_page' => 10,
		'cat'		 => $cat_id
	);
?>

<ul class="highlight_post_list">


<?php
	$cat_posts = get_posts( $args );
	if ($cat_posts):
		$n = 0;
		foreach ( $cat_posts as $post ) : setup_postdata( $post );

		$n++;
		if($n == 1){
			$videodestaque = $video_youtube_id = htmlspecialchars(get_post_meta(get_the_ID(), 'video_youtube_id', true));
			if($videodestaque){
				$videodestaque_id= $videodestaque;
?>
				<input class="videodestaque" type="hidden" data-videocntt="video_loader02" data-videoid="<?php echo $video_youtube_id; ?>" /> 
<?php
			}
		}
?>		
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
				$video_youtube_id = htmlspecialchars(get_post_meta(get_the_ID(), 'video_youtube_id', true)); 
				if($video_youtube_id):
				// $video_embed_code = htmlspecialchars(get_post_meta(get_the_ID(), 'video_embed_code', true)); 
				// if($video_embed_code):
			?>
				<a class="link video_link" data-videocntt="video_loader02" data-videoid="<?php echo $video_youtube_id; ?>" data-post-href="<?php the_permalink(); ?>"></a> 
			<?php endif; ?>

			<a class="link" href="<?php the_permalink(); ?>"></a> 

		</article>
	</li>

	<?php 
		endforeach; 
	else:
?>
	<li class="slide">
		<article class="noresult">
			<h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
		</article>
	</li>

<?php 
	wp_reset_postdata();
	endif;
?>

</ul>