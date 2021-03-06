<?php

/**
 *  Menu
 */
function registering_navigations() {
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      'top-menu' => 'Top Menu',
      'footer-menu' => 'Footer Menu'
     )
   );
 }
 add_action( 'init', 'registering_navigations' );

/**
 * Widgets
 */
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

/**
 * Custom post types
 */
function create_event_register_posttype() { // for event registration

  // not public 
  register_post_type( 'house',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Houses' ),
              'singular_name' => __( 'House' )
          ),
          'public' => true,
          'has_archive' => true,
          'exclude_from_search' => true,
          'rewrite' => array('slug' => 'house'),

      )
  );
};
add_action( 'init', 'create_event_register_posttype' );


/**
* run something in custom url
**/
add_action('parse_request', 'my_custom_url_handler');
function my_custom_url_handler() {
   if($_SERVER["REQUEST_URI"] == '/custom_url') {
      echo "<h1>TEST</h1>";
      exit();
   }
}

// breadcrumb
function the_breadcrumb() {
  $thePost = get_post();
  $html = $thePost->post_title;
  $ancestors = get_post_ancestors( $thePost );
  if ( $ancestors && is_array($ancestors) && count($ancestors) > 0 ) {
    foreach ( $ancestors as $ancestorId ) {
      $ancestor = get_post( $ancestorId );
      $html = '<a href="' . get_permalink($ancestorId) . '">' . $ancestor->post_title . '</a> <span class="divition">/<span> ' . $html;
    }
  }
  print '<div id="ld_wp_breadcrum">' . $html . '</div>';
}
