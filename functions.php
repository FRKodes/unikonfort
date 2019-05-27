<?php
wp_enqueue_style( 'unikonfort-styles', get_stylesheet_directory_uri() . '/unikonfort-styles.css' , array(), '1.5' );
wp_enqueue_script( 'unikonfort-scripts', get_stylesheet_directory_uri() . '/all.js', array(), '1.2', true );

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


function product_custom_post_type() {

    $labels = array(
        'name'                => _x( 'Productos', 'Post Type General Name' ),
        'singular_name'       => _x( 'Producto', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Productos' ),
        'parent_item_colon'   => __( 'Producto padre' ),
        'all_items'           => __( 'Todos los productos' ),
        'view_item'           => __( 'Ver producto' ),
        'add_new_item'        => __( 'Agregar un producto' ),
        'add_new'             => __( 'Agregar nuevo producto' ),
        'edit_item'           => __( 'Editar producto' ),
        'update_item'         => __( 'Actualizar producto' ),
        'search_items'        => __( 'Buscar producto' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
    $args = array(
        'label'               => __( 'Productos' ),
        'description'         => __( 'Productos Unikonfort' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array( 'category' ),
    );
     
    register_post_type( 'producto', $args );
}
add_action( 'init', 'product_custom_post_type' );



function banner_custom_post_type() {

    $labels = array(
        'name'                => _x( 'Banners', 'Post Type General Name' ),
        'singular_name'       => _x( 'Banner', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Banners' ),
        'parent_item_colon'   => __( 'Banner padre' ),
        'all_items'           => __( 'Todos los Banners' ),
        'view_item'           => __( 'Ver Banner' ),
        'add_new_item'        => __( 'Agregar un Banner' ),
        'add_new'             => __( 'Agregar nuevo Banner' ),
        'edit_item'           => __( 'Editar Banner' ),
        'update_item'         => __( 'Actualizar Banner' ),
        'search_items'        => __( 'Buscar Banner' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
    $args = array(
        'label'               => __( 'Banners' ),
        'description'         => __( 'Banners Unikonfort' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    register_post_type( 'banner', $args );
}
add_action( 'init', 'banner_custom_post_type' );