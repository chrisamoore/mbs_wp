<?php
function remove_menu_items() {
  global $menu;
  $restricted = array( __('Comments'), __('Tools'), __('Users'), __('Dashboard'), __('Appearance'));
  end ($menu);
  while (prev($menu)){
    $value = explode(' ',$menu[key($menu)][0]);
    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
      unset($menu[key($menu)]);}
    }
  }
  /*
  SET ADMIN PANEL TO REMOVE STUFF
  */
  //add_action('admin_menu', 'remove_menu_items');

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="navigation">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
// Add options to theme


?>
