<?php

/**
 * content-excerpt.php
 *
 **/

 check_direct();

?>
<section <?php post_class('w-100 index-excerpt'); ?>>

    <div class="w-100 excerpt-title">

      <h3 class="pt3 f3 f2-ns fw7 lh-title measure"><a href="<?php echo esc_url( get_the_permalink() ); ?>" title="Read <?php the_title(); ?>"> <?php the_title(); ?> </a></h3>

    </div>

    <div class="w-100 f3 lh-copy measure excerpt-content ">

      <?php the_excerpt(); ?>

    </div>


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
             echo '<div class="w-100 w-60-l excerpt-featured-image"><p>';
             echo '<img src="'.get_the_post_thumbnail_url().'" alt="'.$minimale_by_rose_alt_text.'" class="w-100 h-auto" />';
             echo '</p></div>';
          }
        ?>


</section> <!-- end of index-excerpt -->
