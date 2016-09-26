<?php 
	
	$cat_obj = get_category_by_slug( 'destaques' );
	$cat_id = $cat_obj->term_id;

	$args = array( 
		'posts_per_page' => 4,
		'cat'		 => $cat_id
	);
?>

<ul class="highlight_post_list">


<?php
	$cat_posts = get_posts( $args );
	if ($cat_posts):
		$n = 0;
		foreach ( $cat_posts as $post ) : setup_postdata( $post );

?>		
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
				<?php echo the_category_list(); ?>
				<h3 class="title"><?php the_title(); ?></h3>
			</div>

			<span class="clear"></span>
			
			<a class="link slide_link" data-slideorder="<?php echo $n; ?>"></a> 

		</article>
	</li>

	<?php 
		$n++;
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