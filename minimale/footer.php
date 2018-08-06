<?php

/**
 * footer.php
 *
 **/

 check_direct();

?>

<footer id="site-footer" class="w-100 ">

  <div id="footer-sidebar-2" class="w-100 ph3 pt2 ph6-ns pt3-ns cb">

    <?php get_sidebar('sidebar-2'); ?>

  </div> <!-- end footer-sidebar-2 -->

  <div id="footer-sidebar-3" class="w-100 ph3 pt2 ph6-ns pt3-ns cb">

    <?php get_sidebar('sidebar-3'); ?>

  </div> <!-- end footer-sidebar-3 -->


  <div id="footer-wp-footer" class="w-100 ph3 pt2 ph6-ns pt3-ns cb">

    <?php wp_footer(); ?>

  </div> <!-- end footer-wp-footer -->

</footer> <!-- end site-footer -->
</body> <!-- end site -->
</html>
