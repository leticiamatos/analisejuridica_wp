<?php get_header(); ?>

	<main role="main">

		<section class="block_wpr destaque">
			<div class="block_cntt">

<?php
	// Categories IDs
	$cat_obj = get_category_by_slug( 'destaques' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );
?>
				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Destaques</a></h3>
				<div class="col2-3 ">
					<div class="highlight_slide_wpr">
						<?php get_template_part('index', 'destaqueslide'); ?>
					</div>
				</div>
				<div class="col1-3">
					<?php get_template_part('index', 'destaquelist'); ?>
				</div>
				<span class="clear"></span>
			</div>
		</section>

		<section class="block_wpr colunistas">
			<div class="block_cntt">
<?php
	// Categories IDs
	$cat_obj = get_category_by_slug( 'colunistas' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );
?>
	
				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Colunistas</a></h3>
				<div class="col3-4">
					<?php get_template_part('index', 'colunistas'); ?>
				</div>
				<div class="col1-4">
					<!-- Advertising widget area 02 -->
				  	<?php get_template_part('advertising', 'area2'); ?>
				</div>
				<span class="clear"></span>
			</div>
		</section>

		<section class="block_wpr noticias">
			<div class="block_cntt">

<?php
	// Categories IDs
	$cat_obj = get_category_by_slug( 'noticias' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );
?>
				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Notícias</a></h3>
				<?php get_template_part('index', 'noticias'); ?>
				<span class="clear"></span>
	
				<!-- Advertising widget area 04 -->
			  	<?php get_template_part('advertising', 'area4'); ?>
			</div>
		</section>


		<section class="block_wpr videos">
			<div class="block_cntt">
<?php
	// Categories IDs
	$cat_obj = get_category_by_slug( 'videos' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );
?>

				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Vídeos</a></h3>
				<div class="col2-3">
					<div class="video_msg_wpr">
						<p class="video_msg">
							<a href="#" id="video_more_link">Clique aqui e veja mais sobre este vídeo</a>
							<span class="arrow_down"></span>
						</p>
					</div>
					<div class="video_loader" id="video_loader02">

						<div class="video_cntt"></div>
					</div>

				</div>
				<div class="col1-3">
					<?php get_template_part('index', 'videoslist'); ?>
				</div>
				<span class="clear"></span>
	
			</div>
		</section>

		<section class="block_wpr colunistas">
			<div class="block_cntt">
<?php
	// Categories IDs
	$cat_obj = get_category_by_slug( 'debates' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );
?>

				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Debates</a></h3>
				<div class="col3-4">
					<?php get_template_part('index', 'debates'); ?>
				</div>
				<div class="col1-4">
					<!-- Advertising widget area 05 -->
				  	<?php get_template_part('advertising', 'area5'); ?>
				</div>
				<span class="clear"></span>
			</div>
		</section>

		<section class="block_wpr noticias">
			<div class="block_cntt">
<?php
	// Categories IDs
	$cat_obj = get_category_by_slug( 'entrevistas' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );
?>

				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Entrevistas</a></h3>
				<?php get_template_part('index', 'entrevistas'); ?>
				<span class="clear"></span>
	
			</div>
		</section>
		
	</main>

<?php get_footer(); ?>
