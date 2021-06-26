<article <?php post_class(); ?>>

  <?php
    $the_post = get_post();
  ?>

  <?php get_template_part('templates/entry-meta'); ?>

  <div>
    <?php
      setup_postdata( $the_post );
      the_content();
    ?>
  </div>


</article>
