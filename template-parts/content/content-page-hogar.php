<?php
/**
 * Template part for displaying hogar page content in page.php
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
					<span class="thin">El confort de los mejores</span> <br>
					Hoteles en tu hogar
				</h3>
			</div>
		</div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-6">
				
				<?php the_content(); ?>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 hoteleria-images">
				<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/unikonfort-linea-hogar.jpg'; ?>" alt="unikonfort colchones linea para el hogar"></figure>
			</div>

		</div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->