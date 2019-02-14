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
							<header class="entry-header">
								<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
							</header>

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
							</footer><!-- .entry-footer -->

							<?php if ( ! is_singular( 'attachment' ) ) : ?>
							<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
							<?php endif; ?>

						</article><!-- #post-${ID} -->
						
					</div>
				</div><?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();