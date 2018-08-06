<?php

/**
 * content-single.php
 *
 **/

 check_direct();

?>
<div id="page-page" <?php post_class('w-100 pt2 pt3-ns'); ?>>

  <div id="page-title" class="w-100">

    <h2 class="f2 f1-ns lh-title measure"><?php the_title(); ?></h2>

  </div> <!-- page-title -->

  <div id="page-content" class="w-100 f3 lh-copy measure">

    <?php the_content(); ?>

  </div> <!-- end page-content -->

  <div id="page-featured-image" class="w-50-l">

    <?php
      $minimale_by_rose_thumbnail = esc_url( get_the_post_thumbnail_url() );
      $minimale_by_rose_thumbnail_id = get_post_thumbnail_id( $post->ID );
      $minimale_by_rose_alt_text = get_post_meta( $minimale_by_rose_thumbnail_id, '_wp_attachment_image_alt', true );
      if( !empty( $minimale_by_rose_thumbnail ) ) {
         if( !empty( $minimale_by_rose_alt_text )){
           $minimale_by_rose_alt_text = $minimale_by_rose_alt_text;
         } else {
           $minimale_by_rose_alt_text = get_post(get_post_thumbnail_id())->post_title;
         }
        echo '<img src="'.get_the_post_thumbnail_url().'" alt="'.$minimale_by_rose_alt_text.'" class="mw-100 h-auto" />';
        }
    ?>

  </div> <!-- end page-featured-image -->

  <div id="page-navigation" class="w-100">

    <?php wp_link_pages(); ?>

  </div> <!-- end page-navigation -->

</div> <!-- end page-page -->
