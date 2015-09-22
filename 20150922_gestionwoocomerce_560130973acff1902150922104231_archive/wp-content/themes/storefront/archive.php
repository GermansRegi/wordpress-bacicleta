	<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 *
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<?php

	/* $paged=(get_query_var('paged'))?get_query_var('paged'):1;
	$args=array('paged'=>$paged,'post_type'=>'ruta','orderby'=>'meta_value_num','order'=>'ASC','posts_per_page'=>-1);
	query_posts($args); */?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php if(is_category()){
echo "sss";
						}else{ the_archive_title();
							echo "ppsp";
						} ?>
				</h1>

				<?php the_archive_description(); ?>
				pp
			</header><!-- .page-header -->

			<?php get_template_part( 'loop' ); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php do_action( 'storefront_sidebar' ); ?>
<?php get_footer(); ?>
