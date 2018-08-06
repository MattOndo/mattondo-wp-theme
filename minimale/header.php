<?php

/**
 * header.php
 *
 **/

 check_direct();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body id="site" <?php body_class('w-100 pa0 ma0 bg-white near-black sans-serif'); ?>>

<header id="site-header" class="w-100 pl3 pt2 pl6-ns pt3-ns">
  <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
      echo '<div id="site-header-custom-logo" class="w-100">';
      echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo" class="br-100">';
      echo '</div>';
    }
  ?>
  <div id="site-header-title" class="w-100">
        <?php
          if ( is_front_page() ) {
        ?>
          <h1 class="f2 f1-ns lh-title measure"><?php echo get_bloginfo('name'); ?></h1>
          <p class="f3 f2-ns lh-copy measure"><?php echo get_bloginfo('description'); ?></p>
        <?php } else { ?>
          <h1 class="f7 f6-ns lh-title measure"><a href="<?php echo get_home_url(); ?>" title="Go to the Homepage" class="near-black"><?php echo get_bloginfo('name'); ?></a></h1>
        <?php } ?>
  </div> <!-- end site-header-title -->
</header> <!-- end site-header -->
