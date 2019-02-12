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
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );?>

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<?php  
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation(
								array(
									/* translators: %s: parent post link */
									'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>' ), '%title' ),
								)
							);
						?>
					</div>
				</div>
				<?php

				
				} elseif ( is_singular( 'post' ) ) {
					?>
					<div class="row">
						<div class="col-xs-12 col-sm-12">

							<?php
							// Previous/next post navigation.
							the_post_navigation(
								array(
									'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post' ) . '</span> ' .
										'<span class="screen-reader-text">' . __( 'Next post:' ) . '</span> <br/>' .
										'<span class="post-title">%title</span>',
									'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post' ) . '</span> ' .
										'<span class="screen-reader-text">' . __( 'Previous post:' ) . '</span> <br/>' .
										'<span class="post-title">%title</span>',
								)
							);?>
						</div>
					</div><?php
				}?>
							
					
					<div class="row">
						<div class="col-xs-12 col-sm-12">

							<?php 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
							?>
							
						</div>
					</div>

				<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
