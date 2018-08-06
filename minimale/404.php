<?php

/**
 * 404.php
 *
 **/

 check_direct();

?>
<?php get_header(); ?>

<main id="site-404" class="w-100 pl3 pt2 pl6-ns pt3-ns">

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'none' ); ?>

<?php endwhile; ?>

<?php else : ?>

  <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main> <!-- end 404 -->

<?php get_footer(); ?>
