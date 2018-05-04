<article <?php post_class(); ?>>

  <?php
    $the_post = get_post();
  ?>

  <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

  <?php get_template_part('templates/entry-meta'); ?>

  <div>
    <?php
      setup_postdata( $the_post );
      the_content();
    ?>
  </div>
<!--
  <div class="entry-summary">
    <?php the_excerpt(); ?> 
  </div>
-->

</article>
