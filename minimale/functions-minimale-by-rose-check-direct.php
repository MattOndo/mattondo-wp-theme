<?php

/**
 * functions-check-direct.php
 *
 **/

 check_direct();

/**
 * Checks if a file is being accessed directly.
 */
function check_direct()
{

  // Exit if accessed directly
  if (! defined( 'ABSPATH' ) ) {
    exit;
  }

}

?>
