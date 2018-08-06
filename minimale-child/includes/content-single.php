<?php

/**
 * content-single.php
 *
 **/

 check_direct();

?>
<div id="single-post" <?php post_class('w-100 pt2 pt3-ns mw7'); ?>>

  <div id="post-title" class="w-100">

    <h2 class="f2 f1-ns lh-title mb0"><?php the_title(); ?></h2>

  </div> <!-- end post_title -->

  <div id="post-content" class="mb5 lh-copy">

    <p id="content-meta" class="mt1 f5">Posted on <?php
      $minimale_by_rose_post_date = date_i18n( get_option( 'date_format' ) , get_the_date( 'U' ) );
      echo $minimale_by_rose_post_date;
    ?> by <?php the_author_link(); ?>
  </p> <!-- end content-meta -->

    <?php the_content(); ?>

    <?php wp_link_pages(); ?>

  </div> <!-- end post-content -->

  <div id="post-featured-image" class="w-50-l">
    <p>
      <?php
        $minimale_by_rose_thumbnail = esc_url( get_the_post_thumbnail_url() );
        $minimale_by_rose_thumbnail_id = get_post_thumbnail_id( $post->ID );
        $minimale_by_rose_alt_text = get_post_meta( $minimale_by_rose_thumbnail_id, '_wp_attachment_image_alt', true );
        if( !empty( $minimale_by_rose_thumbnail ) ) {
           if( !empty( $minimale_by_rose_alt_text )){
             $minimale_by_rose_alt_text = $minimale_by_rose_alt_text;
           } else {
             $minimale_by_rose_alt_text = get_post(get_post_thumbnail_id())->post_title."featured image";
           }
          echo '<img src="'.get_the_post_thumbnail_url().'" alt="'.$minimale_by_rose_alt_text.'" class="mw-100 h-auto" />';
        }
      ?>
    </p>
  </div> <!-- end post-featured-image -->

</div> <!-- end single-post -->
