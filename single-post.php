<?php
/*
 * Template Name: Single post
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>
<section id="primary" class="content-area container">
		<main id="main" class="site-main row">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					?>
						<div class="col-xs-12 col-sm-12">
							<?php  
							// Previous/next post navigation.
							the_post_navigation(
								array(
									'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post' ) . '</span> ' . '<span class="screen-reader-text">' . __( ':' ) . '</span> ' . '<span class="post-title">%title</span>',
									
									'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post' ) . '</span> ' .
										'<span class="screen-reader-text">' . __( ':' ) . '</span> ' .
										'<span class="post-title">%title</span>',
								)
							);
							?>
						</div>
					<?php
				}

				?>
				<div class="col-xs-12 col-sm-12">
					<?php  
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
				</div>
				<?php

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
