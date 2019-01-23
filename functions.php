<?php
wp_enqueue_style( 'unikonfort-styles', get_stylesheet_directory_uri() . '/unikonfort-styles.css' , array(), '1.0' );
wp_enqueue_script( 'unikonfort-scripts', get_stylesheet_directory_uri() . '/all.js', array(), '1.0', true );

add_theme_support( 'post-thumbnails' ); 

function register_unikonfort_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_unikonfort_menus' );