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

<?php get_template_part( 'template-parts/content/content', 'btn-asesorate' );?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php //get_template_part( 'template-parts/header/entry', 'header' ); ?>
		<h1 class="hoteleria-title azul-01">+500 HOTELES<br><span class="thin">EN MÉXICO NOS RESPALDAN</span></h1>
	</header>

	<div class="entry-content container">
		
		<div class="row">
			<div class="col-xs-12 col-md-4 feature-col-item">
				<div class="imagen">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experiencia_huesped.svg" alt="experiencia huesped">
				</div>
				<div class="info text-center">
					<div class="title azul-01">EXPERIENCIA DEL HUÉSPED</div>
					<div class="descripcion">Las personas buscamos experiencias y las camas de tu hotel pueden ofrecer el valor agregado para tus huéspedes.</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 feature-col-item">
				<div class="imagen">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/roi.svg" alt="retorno de inversión">
				</div>
				<div class="info text-center">
					<div class="title azul-01">RETORNO DE INVERSIÓN</div>
					<div class="descripcion">Nuestras garantías, diseño de productos y el uso de las mejores materias primas asegura el retorno de tu inversión.</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 feature-col-item">
				<div class="imagen">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/soluciones_a_tu_medida.svg" alt="soluciones a tu medida">
				</div>
				<div class="info text-center">
					<div class="title azul-01">SOLUCIONES A TU MEDIDA</div>
					<div class="descripcion">Nuestra línea de productos se adapta a todos los presupuestos y necesidades, sin contar que al ser fabricantes podemos crear diseños especiales que se adapten a los objetivos y necesidades específicas de tu proyecto.</div>
				</div>
			</div>
		</div>

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
				<p class="text-right mb-0"><a href="/catalogo" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 hoteleria-images">
				<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/unikonfort-linea-hotelera.jpg'; ?>" alt="fábrica de colchones hoteleros en Guadalajara, línea hotelera."></figure>
			</div>

		</div>

		
		<div class="inner-banner-hoteles"></div>


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
		<?php get_template_part( 'template-parts/content/content', 'form-hoteleros' );?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->