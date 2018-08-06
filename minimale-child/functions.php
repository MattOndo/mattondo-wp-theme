<?php
/******************************************************************************************
 * Enqueue Styles
 ******************************************************************************************/

function child_theme_enqueue_styles() {
  $parent_style = 'minimale-style';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );


/******************************************************************************************
 * Remove "Cateogry/Tag" from Arhive Page Title
 ******************************************************************************************/
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});


/******************************************************************************************
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 ******************************************************************************************/
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"> ...read more</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/******************************************************************************************
 * Dequeue & Unhook Parent Styles
 ******************************************************************************************/
function unhook_parent_style() {
  wp_dequeue_style( 'tachyons-css' );
  wp_deregister_style( 'tachyons-css' );
  wp_dequeue_style( 'main-style' );
  wp_deregister_style( 'main-style' );
}
add_action( 'wp_enqueue_scripts', 'unhook_parent_style', 20 );


/******************************************************************************************
 * Menus
 ******************************************************************************************/
function register_main_menu() {
register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );


function register_category_menu() {
    register_nav_menu('category-menu',__( 'Category Menu' ));
    }
    add_action( 'init', 'register_category_menu' );

// Main Nav Menu
function main_menu() {
    $menu_name = 'main-menu'; // specify custom menu slug
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav class="w-100">' ."\n";
        $menu_list .= "\t\t\t\t". '<ul class="w-100 dark-gray list pa0">' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "\t\t\t\t\t". '<li class="mb4"><a href="'. $url .'" class="dark-gray grow dib f4 link">'. $title .'</a></li>' ."\n";
        }
        $menu_list .= "\t\t\t\t". '</ul>' ."\n";
        $menu_list .= "\t\t\t". '</nav>' ."\n";
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}


// Catgory Nav Menu
function category_menu() {
    $menu_name = 'category-menu'; // specify custom menu slug
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav class="w-100 pb2 nowrap overflow-x-auto tr">' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "\t\t\t\t". '<a href="'. $url .'" class="link grow dib gray hover-gray f5 f4-ns mr3 ">'. $title .'</a>' ."\n";
        }
        $menu_list .= "\t\t\t". '</nav>' ."\n";
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}



/******************************************************************************************
 * Remove query string from static files
 ******************************************************************************************/
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );