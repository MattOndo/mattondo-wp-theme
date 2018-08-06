<?php

/**
 * searchform.php
 *
 **/

 check_direct();

?>

<h2 class="f3 f2-ns lh-title measure">Search</h2>

<form role="search" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <input type="search" class="bg-light-gray bw0 br2 bn ph2 pv1 mb1 f3" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />

  <input type="submit" class="bg-blue white bw0 br2 ph2 pv1 mb1 f3" value="Go" />

</form>
