<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>

	<?php 
	if(is_home()):
		$home_class = "home";
	else:
		$home_class = false;
	endif;
	?>

	<body <?php body_class($home_class); ?>>

		<!-- Facebook Comments API -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=252945901438792";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<?php
			$cat_parent = '';

			// Check if isn't Home Page
			if (!is_home()){	
				// Check if is Category or archive page
				if (is_category() || is_archive()){
					$this_category = get_category(get_query_var('cat'),false);			
					$this_category_ID = $this_category->cat_ID;
					
				// Check if is Single
				}elseif (is_single( )) {
					$first_cat = get_the_category($post);
					$this_category_ID = $first_cat[0]->cat_ID;	
					// echo 'first cat!'.$first_cat[0]->name ;
				}else{
					$this_category_ID = 1;	
				}
				// Check if the main category is Parent Cat.
				// echo 'ID Categoria 01: '.$this_category_ID;
				$possible_parent_id = is_parent_category($this_category_ID);
				if($possible_parent_id){
					$parent_id = $possible_parent_id;
					// echo '<br />ID Categoria 02: '.$parent_id;
					$possible_parent_id = is_parent_category($parent_id); 
					if($possible_parent_id){
						$parent_id = $possible_parent_id;
						// echo '<br />ID Categoria 03: '.$parent_id;
						$possible_parent_id = is_parent_category($parent_id);
						if($parent_id){
							// echo '<br />ID Categoria 04: '.$parent_id;
							$parent_id = $possible_parent_id;
						}						
					}
				}else{
					$parent_id = $this_category_ID;
				}

				// echo $parent_id;
				$parent = get_category($parent_id);
				$parent_slug = $parent->slug;
				// echo $parent_slug;
				
				// Checking the name of the cat
				// switch ($parent_slug) {
				//     case "caminhoes":
				//         $cat_parent = 'parent-cat-caminhoes';
				//         break;
			 //        default:
				// 		$cat_parent = 'parent-default';
				// }

			}
		?>

		<section class="general <?php echo $cat_parent; ?>">
			<div class="relative">
				<div class="gap"></div>
				<div class="fixed">

					<section class="block_wpr block_header">
						<div class="block_cntt">
							<div class="col1-3 col_menu">
								<a class="menu_link"><span>Menu</span></a>
								<span>&nbsp;</span>
								<div class="menu_absolute_wpr">
									<div class="menu_wpr">
										<nav class="menu_cntt">
											<?php 
												wp_nav_menu( $args = array('menu' => 'primary') );
											?>
										</nav>
									</div>
								</div>
							</div>

							<div class="col1-3">
							  	<h1 class="logo">
									<a href="<?php echo home_url(); ?>" title="Análise Jurídica" alt="Análise Jurídica - identidade visual">
										<img src="<?php echo get_template_directory_uri(); ?>/img/logo-analisejuridica.png" />
								  		
									</a>
								</h1>
							</div>
							<div class="col1-3">
								<span>&nbsp;</span>
								<?php get_template_part('searchform'); ?>
							</div>

							<span class="clear"></span>
						</div>
					</section>
				</div> <!-- .fixed -->
			</div> <!-- .relative -->
			
			<section class="block_wpr block_01">
				<div class="block_cntt">
				  	<?php // get_template_part('searchform', 'mobile'); ?>
				  	
					<!-- Advertising widget area 01 -->
				  	<?php get_template_part('advertising', 'area1'); ?>
				</div>
			</section>
				
		</section>

		<div class="loading"><?php get_template_part('svg', 'loading'); ?></div>
