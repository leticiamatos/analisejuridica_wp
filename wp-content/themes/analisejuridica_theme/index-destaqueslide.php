<?php 
	
	$cat_obj = get_category_by_slug( 'destaques' );
	$cat_id = $cat_obj->term_id;

	$args = array( 
		'posts_per_page' => 4,
		'cat'		 => $cat_id
	);
?>

<ul class="highlight_slider bxslider">


<?php
	$cat_posts = get_posts( $args );
	if ($cat_posts):
		$n = 0;
		foreach ( $cat_posts as $post ) : setup_postdata( $post );

		$n++;
?>
	<li class="postlist_item">		
		<article id="post-<?php get_the_ID(); ?> slide-<?php echo $n; ?>" <?php post_class(); ?>>
			<figure class="post_img">
				<?php get_template_part('thumbnail'); ?>


			</figure>
			<div class="gradient_bg"></div>
			<div class="text">
				<?php echo the_category_list(); ?>
				<h3 class="title"><?php the_title(); ?></h3>
			</div>

			<span class="clear"></span>

			<a class="link" href="<?php the_permalink(); ?>"></a> 

		</article>
	</li>

	<?php 
		endforeach; 
	else:
?>
	<li class="postlist_item">		
		<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
		</article>
	</li>

<?php 
	wp_reset_postdata();
	endif;
?>

</ul>