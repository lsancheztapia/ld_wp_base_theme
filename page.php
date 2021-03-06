<?php get_header(); ?>

<?php if (  is_front_page() ) : ?>
  <div class="hero">

    <?php echo do_shortcode('[metaslider id="49"]'); ?>
  </div>
<?php endif ?>

<section>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

    $topContent = get_post_meta($post->ID, 'top_content', '');
    if ( $topContent ) {
      echo '<div class="top_content"><div class="container">';
      echo apply_filters('the_content', $topContent[0] );
      echo '</div></div>';
    }

    echo '<div class="container">';
    get_template_part( 'templates/content', get_post_format() );
    echo '</div';

  endwhile; endif; ?>

</section>

<?php if ( is_front_page() ) : ?>
  <div class="home_bottom_map">
    <a href="https://goo.gl/maps/3an5wa3vEcV9iuo16" target="_blank"><img src='/wp-content/themes/moore/images/google_map.jpg' /></a>
  </div>
<?php endif; ?>

<?php get_footer(); ?>

