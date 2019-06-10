<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area container">
		<main id="main" class="site-main row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<h1 class="title azul-01 text-center mt-20 mb-40">BLOG</h1>
					</div>
				</div>
			</div>
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}
			?>
			
			<div class="posts-navigation">
				<div class="nav-previous alignleft">
					<?php previous_posts_link( 'Entradas más nuevas' ); ?>
				</div>
				<div class="nav-next alignright">
					<?php next_posts_link( 'Entradas anteriores' ); ?> 
				</div>
			</div><?php

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
