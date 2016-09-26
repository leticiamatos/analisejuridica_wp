<?php 
	
	$cat_obj = get_category_by_slug( 'entrevistas' );
	$cat_id = $cat_obj->term_id;

	$args = array( 
		'posts_per_page' => 3,
		'cat'		 => $cat_id
	);
?>

<ul class="news_list">


<?php
	$cat_posts = get_posts( $args );
	if ($cat_posts):
		$n = 0;
		foreach ( $cat_posts as $post ) : setup_postdata( $post );

			$n++;
			
			if($n == 2):
?>
			<div class="col1-4">
				<!-- Advertising widget area 06 -->
			  	<?php get_template_part('advertising', 'area6'); ?>
			</div>
<?php
			endif;

?>		
	<li class="news_item col1-4">		
		<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
			<figure class="post_img">
				<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail();  ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-no.png">
				<?php endif; ?>
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