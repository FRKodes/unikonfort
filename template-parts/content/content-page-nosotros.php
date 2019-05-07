<?php
/**
 * Template part for displaying nosotros page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Unikonfort
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>

	<div class="entry-content container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<h3 class="mayus azul-01">
					<span class="thin">Los mejores colchones</span> <br>
					desde hace casi 40 años.
				</h3>
			</div>
		</div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-6">
				
				<?php the_content(); ?>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 hoteleria-images">
				<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/imagen-nosotros-fabrica-de-colchones-guadalajara.jpg'; ?>" alt="imagen nosotros fabrica de colchones guadalajara"></figure>
			</div>

		</div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->