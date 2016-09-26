<?php get_header(); ?>

	<main role="main">

		<section class="block_wpr main_cntt">
			<div class="block_cntt">
				<div class="col3-4 post-list">
					<div class="card">
					<?php 
						$gravatar_url = 'http://www.gravatar.com/avatar/'. md5( strtolower( trim( get_the_author_meta('email') ) ) ). '?s=235&d=mm';
					?>

						<figure class="photo"><img src="<?php echo $gravatar_url; ?>" ?></figure>

						<h1 class="page_title"><?php the_author(); ?></h1>
						<?php $curauth = $wp_query->get_queried_object(); ?>
						<div class="despt"><?php echo $curauth->description; ?></div>
						<span class="clear"></span>
					</div>
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
