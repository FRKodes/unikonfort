<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Unikonfort
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>

				<div class="row">
					<div class="col-xs-12 col-sm-12">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-md-6 detail-image-container">
										<figure><img src="<?php the_field('imagen_detalle'); ?>" alt="<?php the_title() ?>"></figure>
									</div>
									<div class="col-xs-12 col-md-6">
										<header class="entry-header product-detail">
											<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
										</header>

										<div class="entry-content">
											<?php the_content(); ?>
										</div><!-- .entry-content -->

										<footer class="entry-footer">
										</footer><!-- .entry-footer -->
									</div>
								</div>
							</div>
						</article><!-- #post-${ID} -->
						
					</div>
				</div><?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();