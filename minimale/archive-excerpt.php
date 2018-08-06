<?php

/**
 * archive-excerpt.php
 *
 **/

 check_direct();

?>
<section <?php post_class('w-100 archive-excerpt'); ?>>

    <div class="w-100 excerpt-title">

      <h3 class="pt3 f3 f2-ns fw7 lh-title measure"><a href="<?php echo esc_url( get_the_permalink() ); ?>" title="Read <?php the_title(); ?>"> <?php the_title(); ?> </a></h3>

    </div>

    <div class="w-100 f3 lh-copy measure excerpt-content ">

      <?php the_excerpt(); ?>

    </div>

</section> <!-- end of index-excerpt -->
