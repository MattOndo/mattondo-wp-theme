<?php

/**
 * page.php
 *
 **/

 check_direct();

?>

<?php get_header(); ?>

<main id="site-page" class="w-100 pl3 pt2 pl6-ns pt3-ns">

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; ?>

<?php else : ?>

  <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main> <!-- end site-page -->

<?php get_footer(); ?>
