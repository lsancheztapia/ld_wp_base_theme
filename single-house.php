<?php get_header(); ?>


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

<?php echo do_shortcode('[caldera_form id="CF60d6032fe5296"]'); ?>


<?php get_footer(); ?>

