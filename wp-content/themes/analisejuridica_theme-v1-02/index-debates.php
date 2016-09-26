<?php 
	
	$cat_obj = get_category_by_slug( 'debates' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link($cat_id);
	$args = array( 
		'posts_per_page' => 10,
		'cat'		 => $cat_id
	);
?>

	<?php 
		$cat_posts = get_posts( $args );
		if ($cat_posts):
	?>
<div class="bxslider_wpr bxslider_02">

	<ul class="highlight highlight_wpr colunistas_slider">
	
	<?php
			$n = 0;
			foreach ( $cat_posts as $post ) : setup_postdata( $post );
	?>
					<li class="author-item">
						<div class="slide_cntt">
						<p class="photo">
							<?php if ( has_post_thumbnail()) : ?>
								<?php the_post_thumbnail();  ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-no.png">
							<?php endif; ?>
						</p>
						<div class="text">
							<?php //echo the_category_list(); ?>
							<h3 class="title"><?php the_title(); ?></h3>
						</div>
						<a href="<?php echo get_permalink(); ?>" class="link"></a>
					</li>
	<?php endforeach; ?>
		<li class="author-item last_slide">
			<div class="slide_cntt">
				<span class="img_gap"></span>
				<div class="text">
					<h3 class="title">Veja mais
					</h3>
				</div>
				<a href="<?php echo $cat_link; ?>" class="link"></a>
			</div> 
		</li>	
	</ul>
</div>
	
	<?php else: ?>
		<?php echo errorMessage(); ?>
	<?php endif;?>


	<?php 
		wp_reset_postdata();
	?>
