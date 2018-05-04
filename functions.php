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

/**
 * return posts
 * attrinbute numberposts
 * use : [get-last-blog-posts numberposts=5]
 */
function get_last_blog_posts( $atts ){
  $numberposts = 3 ;
  if ( isset( $atts['numberposts']) && $atts['numberposts'] > 0 ) {
    $numberposts = $atts['numberposts'];
  }

  $posts = get_posts(
    array(
      'numberposts'   => $numberposts
    )
  );

  if ( empty( $posts ) ) { return ''; }


  $out = '<ul>';
  foreach( $posts as $post ) {
//print_r( wp_trim_words( $post->post_content, 40, '...' ) );

    $title = sprintf( 
      '<a href="%s" title="%s">%s</a>',
      get_permalink( $post ),
      esc_attr( $post->post_title ),
      esc_html( $post->post_title )
    ); 
    $out .= '<li><h2>' . $title . '</h2><div class="summary"><p>' . wp_trim_words( $post->post_content, 40, ' ...' ) . '</p></div></li>';
  }
  $out .= '</ul>';
  return $out;
}
add_shortcode( 'get-last-blog-posts', 'get_last_blog_posts' );
