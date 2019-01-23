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
		<main id="main" class="site-main container">
			<div class="row">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					
					$pageToLoad = 'page-' . str_replace('/', '', $_SERVER["REQUEST_URI"]);

					get_template_part( 'template-parts/content/content', $pageToLoad );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
