<?php

/**
 * search.php
 *
 **/

 check_direct();

?>

<?php get_header(); ?>

<main id="site-search" class="w-100 pl3 pt2 pl6-ns pt3-ns">

  <div id="search-title" class="w-100">

    <h2 class="f3 f2-ns lh-title measure">Search Results For "<?php echo get_search_query(); ?>"</h2>

  </div> <!-- end search-title -->

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'search', 'excerpt' ); ?>

<?php endwhile; ?>


  <div class="w-100 f3 pt2 pt3-ns">

    <nav id="search-navigation">
      <div id="navigation-left" class="w-100 w-50-ns tl f3 f2-ns lh-copy">
        <p><?php previous_posts_link( '&larr; Newer' ); ?></p>
      </div> <!-- end navigation-left -->
      <div id="navigation-right" class="w-100 w-50-ns tl f3 f2-ns lh-copy">
        <p><?php next_posts_link( 'Older &rarr;' ); ?></p>
      </div> <!-- end navigation-right -->
    </nav> <!-- end index-navigation -->

  </div>


<?php else : ?>

  <div id="search-none" class="w-100">

      <?php get_template_part( 'content', 'none' ); ?>

  </div>

<?php endif; ?>

</main>

<?php get_footer(); ?>
