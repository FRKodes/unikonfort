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
				<form method="post" action="/sendmail" id="contactForm">
					<div class="form-group"><input name="nombre" placeholder="Nombre" type="text" class="form-control" data-validate="required"></div>
					<div class="form-group"><input name="correo" placeholder="Correo electrónico" type="text" class="form-control" data-validate="required|email"></div>
					<div class="form-group"><input name="telefono" placeholder="Teléfono" type="text" class="form-control" data-validate="required"></div>
					<div class="form-group"><input name="ciudad" placeholder="Ciudad" type="text" class="form-control" data-validate="required"></div>
					<div class="form-group">
						<select name="aplicacion" id="aplicacion" class="form-control">
							<option value="">Selecciona una opción</option>
							<option value="Hogar">Hogar</option>
							<option value="Hotelería">Hotelería</option>
						</select>
					</div>
					<div class="form-group"><textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" data-validate="required"></textarea></div>
					<div class="form-group"><input type="submit" value="Enviar" class="btn btn-primary cien"></div>
					<div class="sent_mail_alert">¡Gracias!<br>Tu mensaje se envió exitosamente, en breve nos pondremos en contacto contigo.</div>
				</form>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 contact-info-block">
				
				<?php the_content(); ?>

				<p class="contact-line"><span class="azul-01 icon-phone"></span> (33) 3606-4362 / (33) 3606-5283</p>
				<p class="contact-line"><span class="azul-01 icon-mail"></span> <a href="mailto:contacto@unikonfort.mx">contacto@unikonfort.mx</a></p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Fábrica Guadalajara Av. Camino a Santa Cruz del Valle #113-A Col. Valle de la Misericordia Tlaquepaque Jalisco. <br>Horario Lunes a Viernes 8:00 a 18:00 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Bodega Puerto Vallarta: Av. González Gallo 165 Fracc. Vida Vallarta. C.P. 48318. Tel. (322) 2247540 <br>Horario Lunes a Viernes 10:00 a 14:00 y 16:00 a 19:00 Hrs. / Sábado 10:00 a 14:00 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Show Room Federalismo Guadalajara: Federalismo norte 397 Col. Artesanos. C.P. 44200. Tel. (33) 38261420. <br>Horario Lunes a Viernes 10:30 a 14:30 y 16:00 a 18:30 Hrs. / Sábado 10:30 a 14:30 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Show Room Niños Héroes Guadalajara: Av Niños Héroes 1615 Col. Moderna C.P. 44190 Guadalajara, Jal. Tel. (33) 3810 7974. <br>Horario Lunes a Viernes 10:00 a 14:00 y 15:00 a 18:00 Hrs. / Sábado 10:00 a 14:00 Hrs.</p>			
			</div>

		</div>

		<div class="inner-map" id="inner-map"></div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->