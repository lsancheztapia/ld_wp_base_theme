<?php get_header(); ?>

<section>
	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php get_template_part( 'templates/content', get_post_format() ); ?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

</section>

<?php get_footer(); ?>
