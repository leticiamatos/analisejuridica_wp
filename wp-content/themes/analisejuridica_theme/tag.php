<?php get_header(); ?>

	<main role="main">

		<section class="block_wpr main_cntt">
			<div class="block_cntt">
				<div class="col3-4 post-list">
					<h1 class="page_title">
					Tag « <?php echo single_tag_title('', false); ?> »
					</h1> 
					<ul class="highlight_post_list">
						<?php get_template_part('loop'); ?>
					</ul>

					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
