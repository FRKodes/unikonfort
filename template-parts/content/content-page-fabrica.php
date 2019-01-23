<?php
/**
 * Template part for displaying fabrica page content in page.php
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
			
			<div class="col-xs-12 col-md-6">
				<h3 class="mayus azul-01">
					<span class="thin">Innovación y</span> <br>
					diseño
				</h3>
				<?php the_content(); ?>
			</div>

			<div class="col-xs-12 col-md-6 factory-images">
				<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-unikonfort-blanco.svg'; ?>" alt=""></figure>
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<h2 class="title mayus text-center azul-01 mb-40 mt-40">Tecnología Unikonfort</h2>
			</div>

			<?php for ($i=0; $i < 4; $i++) { ?>
			
			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen"><figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-unikonfort-blanco.svg'; ?>" alt=""></figure></div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">Sistema </span> <br>Encapsulado</h3>
					<p>Barras perimetrales HD que refuerzan los bordes y dan estabilidad al colchón.</p>
				</div>
			</div>

			<?php } ?>


			<?php for ($i=0; $i < 4; $i++) { ?>
			
			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen"><figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-unikonfort-blanco.svg'; ?>" alt=""></figure></div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">Sistema </span> <br>Encapsulado</h3>
					<p>Barras perimetrales HD que refuerzan los bordes y dan estabilidad al colchón.</p>
				</div>
			</div>

			<?php } ?>
			

		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
