<?php if ( has_post_thumbnail()) : ?>
	<div class="image_crop"><?php the_post_thumbnail();  ?></div>
<?php else: ?>
	<div class="image_crop"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-no.png" /></div>
<?php endif; ?>
