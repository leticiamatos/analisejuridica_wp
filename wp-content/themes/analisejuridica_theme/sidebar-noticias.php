<?php 
  
  $cat_obj = get_category_by_slug( 'noticias' );
  $cat_id = $cat_obj->term_id;
  $cat_link = get_category_link( $cat_id );

  $args = array( 
    'posts_per_page' => 5,
    'cat'    => $cat_id
  );
?>

<div class="prefooter_post-wpr">
  <h3 class="col_title"><a href="<?php echo $cat_link; ?>">Últimas Notícias</a></h3>
  <ul class="prefooter_post-list">

<?php
  $cat_posts = get_posts( $args );
  if ($cat_posts):
    foreach ( $cat_posts as $post ) : setup_postdata( $post );
?>    

    <?php get_template_part('loop', 'sidebar'); ?>


  <?php 
    endforeach; 
  else:
?>
    <li class="slide">
      <article class="noresult">
        <h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
      </article>
    </li>

<?php 
  wp_reset_postdata();
  endif;
?>

  </ul>
</div>