<?php
/**
 * Template part for displaying contact page content in page.php
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
					<span class="thin">¡Gracias por comunicarte</span> <br>
					con nosotros!
				</h3>
			</div>
		</div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-6">
				<form action="">
					<div class="form-group"><input name="nombre" placeholder="Nombre" type="text" class="form-control"></div>
					<div class="form-group"><input name="correo" placeholder="Correo electrónico" type="text" class="form-control"></div>
					<div class="form-group"><input name="telefono" placeholder="Teléfono" type="text" class="form-control"></div>
					<div class="form-group"><input name="ciudad" placeholder="Ciudad" type="text" class="form-control"></div>
					<div class="form-group">
						<select name="aplicacion" id="" class="form-control">
							<option value="">Selecciona una opción</option>
							<option value="Hogar">Hogar</option>
							<option value="Hotelería">Hotelería</option>
						</select>
					</div>
					<div class="form-group"><textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea></div>
					
					<div class="form-group">
						<input type="text" value="Enviar" class="btn btn-primary cien">
					</div>

				</form>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 contact-info-block">
				
				<?php the_content(); ?>

				<p class="contact-line"><span class="azul-01 icon-phone"></span> (33) 3606-4362 / (33) 3606-5283</p>
				<p class="contact-line"><span class="azul-01 icon-mail"></span> <a href="mailto:contacto@unikonfort.mx">contacto@unikonfort.mx</a></p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<p class="contact-line"><span class="azul-01 icon-watch"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

			</div>


		</div>

		<div class="inner-map"></div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->