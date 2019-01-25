<?php
/**
 * Template part for displaying hotelería page content in page.php
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
					<span class="thin">TUS HUÉSPEDES</span> <br>
					TE lo agradecerán
				</h3>
			</div>
		</div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-6">
				
				<?php the_content(); ?>
				<p class="text-right mb-0"><a href="/nosotros" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 hoteleria-images">
				<figure><img class="cien mt--70" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-hotelera.jpg'; ?>" alt="fábrica de colchones hoteleros en Guadalajara, línea hotelera."></figure>
			</div>

		</div>

		
		<div class="inner-banner-home"></div>


		<div class="row">
			
			<div class="col-xs-12 col-md-12">
				
				<h2 class="mayus azul-01 text-center mb-40 mt-20">
					<span class="thin">Algunos de</span> <br>nuestros clientes
				</h2>

			</div>

		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="clients-container">
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_decameron.jpg'; ?>" alt="hotel decameron"></div>
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_hyatt_ziva.jpg'; ?>" alt="hotel hyatt ziva"></div>
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_panama_jack.jpg'; ?>" alt="hotel panama jack"></div>
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_park_royal.jpg'; ?>" alt="hotel park royal"></div>
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_royal_resorts.jpg'; ?>" alt="hotel royal resorts"></div>
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_temptation.jpg'; ?>" alt="hotel temptation"></div>
					<div class="client-item"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hotel_velas_resorts.jpg'; ?>" alt="hotel velas resorts"></div>
				</div>
			</div>
		</div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->