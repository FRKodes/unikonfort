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

<?php get_template_part( 'template-parts/content/content', 'btn-asesorate' );?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>

	<div class="entry-content container">
		<div class="row">
			<div class="col-xs-12 col-md-4 feature-col-item">
				<div class="imagen">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/soporte.svg" alt="SOPORTE">
				</div>
				<div class="info text-center">
					<div class="title azul-01">SOPORTE</div>
					<div class="descripcion">Todos nuestros productos están diseñados para ofrecer el correcto soporte lumbar del uso diario, esto para evitar lesiones y ayudar a mantener una correcta postura de la espalda.</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 feature-col-item">
				<div class="imagen">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/duracion.svg" alt="duración">
				</div>
				<div class="info text-center">
					<div class="title azul-01">DURACIÓN</div>
					<div class="descripcion">Nuestra línea está fabricada únicamente con los materiales de la mejor calidad lo cual nos permite ofrecer una excelente garantía en todos nuestros productos.</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 feature-col-item">
				<div class="imagen">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/versatilidad.svg" alt="versatilidad">
				</div>
				<div class="info text-center">
					<div class="title azul-01">VERSATILIDAD</div>
					<div class="descripcion">Nuestra línea es versátil y nuestros clientes pueden elegir entre opciones ortopédicas, con y sin resortes, suaves y firmes o incluso diseños personalizados.</div>
				</div>
			</div>
		</div>

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

	<footer class="entry-footer container" id="form-asesor">
		<div class="row">
			<div class="col-xs-12 col-sm-12 text-center">
				<h3 class="mayus azul-01">
					<span class="thin">Recibe asesoría de alguno de </span> <br>
					<span class="bigger">nuestros expertos</span>
				</h3>
			</div>
		</div>

		<?php get_template_part( 'template-parts/content/content', 'form-hogar' );?>		
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->