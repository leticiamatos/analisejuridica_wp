<?php
  $n_posts = 4;
?>

<div class="tabs" id="prefooter-tabs01">
  <ul>
    <li><a href="#tabs-1">Notícias</a></li>
    <li><a href="#tabs-2">Vídeos</a></li>
    <li><a href="#tabs-3">Artigos</a></li>
  </ul>
  <div id="tabs-1">
    <?php 
  
      $cat_obj = get_category_by_slug( 'noticias' );
      $cat_id = $cat_obj->term_id;

      $args = array( 
        'posts_per_page' => $n_posts,
        'cat'    => $cat_id
      );
    ?>

    <ul class="prefooter_post-list">


    <?php
      $cat_posts = get_posts( $args );
      if ($cat_posts):
        $n = 0;
        foreach ( $cat_posts as $post ) : setup_postdata( $post );

    ?>
    <?php get_template_part('loop', 'prefooter'); ?>

    <?php 
      endforeach; 
      else:
    ?>
      <li class="postlist_item">    
        <article>
          <h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
        </article>
      </li>

    <?php 
      wp_reset_postdata();
      endif;
    ?>

    </ul>
  </div>
  <div id="tabs-2">
    <?php 
  
      $cat_obj = get_category_by_slug( 'videos' );
      $cat_id = $cat_obj->term_id;

      $args = array( 
        'posts_per_page' => $n_posts,
        'cat'    => $cat_id
      );
    ?>

    <ul class="prefooter_post-list">


    <?php
      $cat_posts = get_posts( $args );
      if ($cat_posts):
        $n = 0;
        foreach ( $cat_posts as $post ) : setup_postdata( $post );

    ?>
    <?php get_template_part('loop', 'prefooter'); ?>

    <?php 
      endforeach; 
      else:
    ?>
      <li class="postlist_item">    
        <article>
          <h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
        </article>
      </li>

    <?php 
      wp_reset_postdata();
      endif;
    ?>

    </ul>
  </div>
  <div id="tabs-3">
       <?php 
  
      $cat_obj = get_category_by_slug( 'artigos' );
      $cat_id = $cat_obj->term_id;

      $args = array( 
        'posts_per_page' => $n_posts,
        'cat'    => $cat_id
      );
    ?>

    <ul class="prefooter_post-list">


    <?php
      $cat_posts = get_posts( $args );
      if ($cat_posts):
        $n = 0;
        foreach ( $cat_posts as $post ) : setup_postdata( $post );

    ?>
    <?php get_template_part('loop', 'prefooter'); ?>

    <?php 
      endforeach; 
      else:
    ?>
      <li class="postlist_item">    
        <article>
          <h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
        </article>
      </li>

    <?php 
      wp_reset_postdata();
      endif;
    ?>

    </ul>
  </div>
</div>
 