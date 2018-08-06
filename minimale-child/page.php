<?php

/**
 * page.php
 *
 **/

 check_direct();

?>

<?php get_header(); ?>

<main id="site-page" class="w-100 w-60-ns w-75-l fr-ns pa3 pa4-ns">

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'includes/content', 'page' ); ?>

<?php endwhile; ?>

<?php else : ?>

  <?php get_template_part( 'includes/content', 'none' ); ?>

<?php endif; ?>

</main> <!-- end site-page -->

<?php get_footer(); ?>
