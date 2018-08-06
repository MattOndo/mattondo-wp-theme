<?php

/**
 * search-excerpt.php
 *
 **/

 check_direct();

?>

<section <?php post_class('w-100 search-excerpt'); ?>>

  <div class="w-100 search-title">

    <h3 class="pt3 f3 f2-ns fw7 lh-title measure"><a href="<?php echo get_the_permalink(); ?>" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>

  </div>

  <div class="w-100 f3 lh-copy measure search-content">

    <?php if( get_post_type() !== "page" ): ?>
    <p class="lh-copy measure">
      Posted on
      <?php
        $minimale_post_date = date_i18n( get_option( 'date_format' ), get_the_date( 'U' ) );
        echo $minimale_post_date;
      ?>
      by
      <?php
        $minimale_author_url = get_the_author_meta('url');
        $minimale_author_name = get_the_author();
        if( !empty( $minimale_author_url ) ) {
          echo '<a href="' . $minimale_author_url . '" '._('title','tachyons-wp').'="' . $minimale_author_name . '\'s ' . __( 'homepage', 'tachyons-wp' ) . '">';
          echo $minimale_author_name;
          echo '</a>';
        } else {
          echo $minimale_author_name;
        }
      ?>
      </p>
      <?php endif ;?>

      <?php the_excerpt(); ?>

  </div> <!-- end of search-content -->

</section> <!-- end of search-excerpt -->
