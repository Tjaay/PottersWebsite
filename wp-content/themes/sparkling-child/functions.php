<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function ala_hidetitle_class($classes) {

  if (  is_front_page() ) :
  
  $classes[] = 'hidetitle';
  
  return $classes;
  
  endif;
  
  return $classes;
  
  }
  
  add_filter('post_class', 'ala_hidetitle_class');

?>