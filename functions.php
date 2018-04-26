<?php

function registering_navigations() {
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      'footer-menu' => 'Footer Menu'
     )
   );
 }
 add_action( 'init', 'registering_navigations' );

function registering_widgets_area() {
        register_sidebar( array(
                'name'          => __( 'Widget Area', 'custom_theme' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Add widgets here to appear in your sidebar.', 'custom_theme' ),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
        ) );
}
add_action( 'widgets_init', 'registering_widgets_area' );

