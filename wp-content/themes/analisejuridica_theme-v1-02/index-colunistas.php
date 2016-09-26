
<div class="bxslider_wpr bxslider_02">

	<ul class="highlight highlight_wpr colunistas_slider">
	<?php 
		$args = array(
			'role' => 'author'
		); 
		$last_posts_list = array();

		$authors = get_users( $args  );
		foreach ($authors as $user) {
			
			$userid = $user->ID;
			
			wp_reset_postdata();

			$args = array( 
				'numberposts' => 1,
				'author'		 => $userid
			);

			$last_post = get_posts( $args );
			foreach ($last_post as $post){
				// echo the_title() . '<br/>';
				// echo the_id() . '<br/>';
				// echo $user->first_name . '<br/><br/>';
				$postid = get_the_ID();
				array_push($last_posts_list, $postid);
			}
		}

		
		$args = array(
			'role' => 'contributor'
		); 
		$contributor = get_users( $args  );
		foreach ($contributor as $user) {
			
			$userid = $user->ID;
			
			wp_reset_postdata();

			$args = array( 
				'numberposts' => 1,
				'author'		 => $userid
			);

			$last_post = get_posts( $args );
			foreach ($last_post as $post){
				// echo the_title() . '<br/>';
				// echo the_id() . '<br/>';
				// echo $user->first_name . '<br/><br/>';
				$postid = get_the_ID();
				array_push($last_posts_list, $postid);
			}
		}

		// var_dump($last_posts_list);
	
		

		wp_reset_postdata();

		$args = array( 
		 	'post_type' => array( 'any' ),
		 	'posts_per_page' => 20,
			'post__in' => $last_posts_list
		);
		$laspost_query = new WP_Query($args);

		$last_post = get_posts( $args );
		$n = 0;
		
		if( $laspost_query->have_posts() ) :
 			while ($laspost_query->have_posts()) : $laspost_query->the_post(); 
				$n++;
	 	?>

			<li class="author-item">
				<div class="slide_cntt">
					<?php 
						// $gravatar_url = 'http://www.gravatar.com/avatar/'. md5( strtolower( trim( the_author_meta('email') ) ) ). '?s=235&d=retro';
						$gravatar_url = get_the_author_meta('user_url');
						if(!$gravatar_url){
							$gravatar_url = 'https://www.gravatar.com/avatar/4?f=y&s=235&d=mm'; 
						}
					?>

					<p class="photo"><img src="<?php echo $gravatar_url; ?>"</p>
					<h3 class="title"><?php //echo get_the_author(); ?> </h3>
					<p class="despt">
						<?php echo the_title(); ?>
					</p>
					<a href="<?php echo get_permalink(); ?>" class="link"></a>
				</div>
			</li>

	<?php 
  			endwhile;
  		endif;

		wp_reset_postdata();
	?>
	<?php 
		
		$cat_obj = get_category_by_slug( 'colunistas' );
		$cat_id = $cat_obj->term_id;
		$cat_link = get_category_link($cat_id);
	?>
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
