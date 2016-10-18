<?php 

/* Template Name: Todos os Posts */

?>

<?php get_header(); ?>

<?php
	
	$args = array( 
		'posts_per_page' => 30
	);
// The Query
query_posts( $args );
 
?>

		<main role="main">

		<section id="todososposts_wpr" class="block_wpr main_cntt">
			<div class="block_cntt">
				<div class="col3-4 post-list">
					<h1 class="page_title"><?php the_title(); ?></h1>
					<ul class="highlight_post_list">
						<?php
							while ( have_posts() ) : the_post();
						 	?>
								<li class="postlist_item">		
									<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
										<div class="text">
											<?php echo the_category_list(); ?> 
											<span class="date"><?php the_date('d/m/Y'); ?></span>
											<h3 class="title"><?php the_title(); ?></h3>
											<div class="excpt">
												<?php echo get_special_excerpt(250); ?>...
											</div>
										</div>

										<span class="clear"></span>
										<a class="link" href="<?php the_permalink(); ?>"></a> 

									</article>
								</li>
						<?php 
							endwhile; 
						?>
					</ul>

					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>