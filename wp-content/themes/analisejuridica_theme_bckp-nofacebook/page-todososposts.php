<?php 

/* Template Name: Todos os Posts */

?>

<?php get_header(); ?>

<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array( 
		'posts_per_page' => 30,
		'paged'          => $paged
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
							$date_prev = false;
							$date_same = false;
							$n = 1;

							while ( have_posts() ) : the_post();

							$date_curr = get_the_time('d/m');
							if($date_curr == $date_prev):
								$date_same = true;
								// echo $date_curr . ' datecurr</br>';
								// echo $date_prev . ' date_prev</br>';
								// echo "é a mesma data!";
							else:
								$date_same = false;
								// echo $date_curr . ' datecurr</br>';
								// echo $date_prev . ' date_prev</br>';
								// echo "NAO é a mesma data!";
							endif;
							$date_prev = $date_curr;
							// echo '</br>'. $n;
						 	?>

								<?php if (!$date_same && $n != 1): ?>
										<span class="clear"></span>
									</div> <!-- .same-date_wpr -->
								<?php endif; $n++; ?>
				
								
								<?php if (!$date_same): ?>
									<h3 class="date"><?php the_date('d/m/Y'); ?></h3>
									<div class="same-date_wpr">
								<?php endif; ?>

								<li class="postlist_item col1-2">		
									<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
										<div class="text">
											<?php echo the_category_list(); ?> 
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
							<span class="clear"></span>
						</div> <!-- .same-date_wpr -->
					</ul>

					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>