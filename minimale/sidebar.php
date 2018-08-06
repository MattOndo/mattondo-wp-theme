<?php
/**
 * sidebar.php
 *
 */

 check_direct();

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-3' ); ?>
<?php endif; ?>
