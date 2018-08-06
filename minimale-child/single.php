<?php

/**
 * single.php
 *
 **/

 check_direct();

?>

<?php get_header(); ?>

<main id="site-single" class="w-100 w-60-ns w-75-l fr-ns pa3 pa4-ns">

  <div id="categories-menu">
    <?php if (function_exists(category_menu())) category_menu(); ?>
  </div>

  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'includes/content', 'single' ); ?>

    <?php if ( comments_open() || get_comments_number() ) {
        comments_template();
    } ?>

  <?php endwhile; ?>

  <?php else : ?>

    <?php get_template_part( 'includes/content', 'none' ); ?>

  <?php endif; ?>

</main> <!-- end site-single -->

<?php get_footer(); ?>
