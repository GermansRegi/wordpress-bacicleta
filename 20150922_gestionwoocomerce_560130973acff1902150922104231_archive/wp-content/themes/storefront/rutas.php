<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 * Template Name: Rutas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $paged=(get_query_var('paged'))?get_query_var('paged'):1;
			$args=array('orderby'=>'id','order'=>'desc');
			$categories=get_categories($args);
			wp_reset_query();
			foreach($categories as $cat)
			{
				?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title" itemprop="name">
								<?php echo $cat->name?>
							</h1>
						</header><!-- .entry-header -->
						<div class="entry-content" itemprop="mainContentOfPage">
							<?php echo $cat->description; ?>
							<?php if($cat->count!=0){
								$args=array('paged'=>$paged,'post_type'=>'ruta','orderby'=>'meta_value_num','order'=>'ASC','posts_per_page'=>-1,'cat'=>$cat->cat_ID);
								query_posts($args);
	  							if (have_posts()):while(have_posts()):the_post();
									?>
									<div class="page-links">
										<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
									</div>
								<?php
								endwhile;
								wp_reset_query();
								endif;
								?>
								<div class="page-links">
									<a href="<?php echo esc_url(get_category_link($cat->cat_ID)); ?>">Rutes</a>
								</div>
							<?php } ?>
					</div><!-- .entry-content -->
				<?php
				/**
				 * @hooked storefront_page_header - 10
				 * @hooked storefront_page_content - 20
				 */
		//		do_action( 'storefront_page' );
				?>
			</article><!-- #post-## -->


			<?php }/*while ( have_posts() ) : the_post(); ?>

				<?php
				do_action( 'storefront_page_before' );
				?>

				<?php get_template_part( 'content', 'page' ); ?>

		1		<?php
				/**
				 * @hooked storefront_display_comments - 10

				do_action( 'storefront_page_after' );
				?>

			<?php endwhile; // end of the loop. */ ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action( 'storefront_sidebar' ); ?>

<?php get_footer(); ?>
