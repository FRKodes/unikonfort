<?php
/**
 * The template for displaying all posts
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

				?>
				<p>ok</p>
				
				<?php

				// get_template_part( 'template-parts/content/content', 'mini-post' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
