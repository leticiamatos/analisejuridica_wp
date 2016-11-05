<?php
  $n_posts = 4;
?>

<div class="tabs" id="prefooter-tabs02">
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

    <ul class="prefooter_post-list most_popular">

    <?php
      $args = array(
          'post_type' => 'post',
          'limit' => 4,
          'header' => 'Mais Lidas',
          'cat' => $cat_id
      );

      wpp_get_mostpopular( $args );
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

    <ul class="prefooter_post-list most_popular">

    <?php
      $args = array(
          'post_type' => 'post',
          'limit' => 4,
          'header' => 'Mais Lidas',
          'cat' => $cat_id
      );

      wpp_get_mostpopular( $args );
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

    <ul class="prefooter_post-list most_popular">

    <?php
      $args = array(
          'post_type' => 'post',
          'limit' => 4,
          'header' => 'Mais Lidas',
          'cat' => $cat_id
      );

      wpp_get_mostpopular( $args );
    ?>

    </ul>
  </div>
</div>
 