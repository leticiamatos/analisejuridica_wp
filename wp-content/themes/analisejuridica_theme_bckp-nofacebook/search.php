<?php 
	get_header(); 
	$search_query = get_search_query();

	// Only from cat
	// $catid = 9;

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	global $wp_query;

	query_posts(array_merge(
		array(
			'post_type' => 'post',
			//'cat'		 => $catid,
	  		'paged'          => $paged
  		),
		$wp_query->query
	));
?>



	<main role="main">

		<section class="block_wpr main_cntt">
			<div class="block_cntt">
				<div class="col3-4 post-list">
					<h1 class="page_title">Pesquisando por « 
					<?php 
						$wp_query->found_posts; 
						echo get_search_query(); ?>
					 »
					</h1>

					<ul class="highlight_post_list">
						<?php get_template_part('loop'); ?>
					</ul>

					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>
				<span class="clear"></span>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
