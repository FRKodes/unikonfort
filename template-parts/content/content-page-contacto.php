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
				<h3 class="mayus azul-01 text-center">
					<span class="thin">¡Gracias por comunicarte</span> <br>
					con nosotros!
				</h3>
			</div>
		</div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-lg-7">
				<!-- <form method="post" action="/sendmail" id="contactForm">
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
				</form> -->

				<div class="tabs">
					<div class="tab-button-outer">
						<ul id="tab-button">
							<li><a href="#tab01">QUIERO COTIZAR EL MEJOR CONFORT PARA MI HOTEL</a></li>
							<li><a href="#tab02">QUIERO EL MEJOR CONFORT PARA MI HOGAR</a></li>
						</ul>
					</div>

					<div class="tab-select-outer">
						<select id="tab-select">
							<option value="">SELECCIONA UNA OPCIÓN</option>
							<option value="#tab01">SOY HOTELERO, QUIERO COTIZAR EL MEJOR CONFORT</option>
							<option value="#tab02">QUIERO EL MEJOR CONFORT PARA MI HOGAR</option>
						</select>
					</div>

					<div id="tab01" class="tab-contents">
						<div class="row">
							<div class="col-xs-12 col-md-11 ml-auto mr-auto mb-60">
								<form action="/sendmail-hotel" method="post" id="contactHotel">
									<div class="form-group">
										<select class="form-control" name="tipo_proyecto" id="tipo_proyecto">
											<option value="">¿TIPO DE PROYECTO?</option>
											<option value="Hotel">Hotel</option>
											<option value="Motel ">Motel</option>
											<option value="Hostal ">Hostal</option>
											<option value="Airbnb ">Airbnb</option>
											<option value="Otro">Otro</option>
										</select>
									</div>

									<div class="form-group">
										<input type="text" name="ubicacion" class="form-control" placeholder="*Ubicación" data-validate="required">
									</div>

									<div class="form-group"><p>¿MEDIDA?</p></div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="individual" value="Individual">
										<label for="individual">Individual</label>
									</div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="matrimonial" value="Matrimonial">
										<label for="matrimonial">Matrimonial</label>
									</div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="queen_size" value="Queen size">
										<label for="queen_size">Queen size</label>
									</div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="king_size" value="King size">
										<label for="king_size">King size</label>
									</div>

									<div class="form-group">
										<textarea name="detalles_proyecto" class="form-control" id="detalles_proyecto" placeholder="Cuéntanos un poco más de tu proyecto para poder ofrecerte las opciones adecuadas" cols="30" rows="10"></textarea>
									</div>

									<div class="form-group">
										<input type="text" name="nombre" class="form-control" placeholder="*Nombre" data-validate="required">
									</div>
									<div class="form-group">
										<input type="text" name="ciudad" class="form-control" placeholder="*Ciudad" data-validate="required">
									</div>
									<div class="form-group">
										<input type="text" name="telefono" class="form-control" placeholder="*Teléfono" data-validate="required">
									</div>
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="*Email" data-validate="required">
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="ENVIAR" class="btn btn-primary cien">
									</div>
									<div class="sent_mail_alert">¡Gracias!<br>Tu mensaje se envió exitosamente, en breve nos pondremos en contacto contigo.</div>
								</form>
							</div>
						</div>
					</div>

					<div id="tab02" class="tab-contents">
						<div class="row">
							<div class="col-xs-12 col-md-116 ml-auto mr-auto">
								<form action="/sendmail-hogar" method="post" id="contactHogar">
									<div class="form-group">
										<select class="form-control" name="firmeza" id="firmeza">
											<option value="">¿QUE NIVEL DE FIRMEZA PREFIERES?</option>
											<option value="Suave">Suave</option>
											<option value="Intermedio">Intermedio</option>
											<option value="Firme">Firme</option>
										</select>
									</div>

									<div class="form-group">
										<select class="form-control" name="peso" id="peso">
											<option value="">¿CUÁL ES TU RANGO DE PESO?</option>
											<option value="Menor a 50 KG">Menor a 50 KG</option>
											<option value="Entre 50 y 80 KG">Entre 50 y 80 KG</option>
											<option value="Entre 80 y 100 KG">Entre 80 y 100 KG</option>
											<option value="Entre 100 y 120 KG">Entre 100 y 120 KG</option>
											<option value="+ 120 KG">+ 120 KG</option>
										</select>
									</div>

									<div class="form-group">
										<select class="form-control" name="solo_acompanado" id="solo_acompanado">
											<option value="">¿DUERMES SÓLO O ACOMPAÑADO?</option>
											<option value="Solo">Solo</option>	
											<option value="Acompañado">Acompañado</option>	
										</select>
									</div>

									<div class="form-group">
										<select class="form-control" name="peso_pareja" id="peso_pareja">
											<option value="">¿CUÁL ES EL RANGO DE PESO DE TU PAREJA?</option>
											<option value="Menor a 50 KG">Menor a 50 KG</option>
											<option value="Entre 50 y 80 KG">Entre 50 y 80 KG</option>
											<option value="Entre 80 y 100 KG">Entre 80 y 100 KG</option>
											<option value="Entre 100 y 120 KG">Entre 100 y 120 KG</option>
											<option value="+ 120 KG">+ 120 KG</option>
										</select>
									</div>

									<div class="form-group">
										<select class="form-control" name="preferencia_colchon" id="preferencia_colchon">
											<option value="">¿CÓMO PREFIERES TU COLCHÓN?</option>
											<option value="Con colchoneta">Con colchoneta</option>
											<option value="Sin colchoneta">Sin colchoneta</option>
											<option value="Me da igual">Me da igual</option>
										</select>
									</div>

									<div class="form-group"><p>¿MEDIDA?</p></div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="individual" value="Individual">
										<label for="individual">Individual</label>
									</div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="matrimonial" value="Matrimonial">
										<label for="matrimonial">Matrimonial</label>
									</div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="queen_size" value="Queen size">
										<label for="queen_size">Queen size</label>
									</div>

									<div class="form-group checkbox-line">
										<input type="checkbox" name="king_size" value="King size">
										<label for="king_size">King size</label>
									</div>

									<div class="form-group">
										<input type="text" name="nombre" class="form-control" placeholder="*Nombre" data-validate="required">
									</div>
									<div class="form-group">
										<input type="text" name="ciudad" class="form-control" placeholder="*Ciudad" data-validate="required">
									</div>
									<div class="form-group">
										<input type="text" name="telefono" class="form-control" placeholder="*Teléfono" data-validate="required">
									</div>
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="*Email" data-validate="required|email">
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="ENVIAR" class="btn btn-primary cien">
									</div>
									<div class="sent_mail_alert">¡Gracias!<br>Tu mensaje se envió exitosamente, en breve nos pondremos en contacto contigo.</div>
								</form>
							</div>
						</div>
					</div>  
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-lg-5 contact-info-block">
				
				<?php the_content(); ?>

				<p class="contact-line"><span class="azul-01 icon-phone"></span> (33) 3606-4362 / (33) 3606-5283</p>
				<p class="contact-line"><span class="azul-01 icon-mail"></span> <a href="mailto:contacto@unikonfort.mx">contacto@unikonfort.mx</a></p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Fábrica Guadalajara Av. Camino a Santa Cruz del Valle #113-A Col. Valle de la Misericordia Tlaquepaque Jalisco. <br>Horario Lunes a Viernes 8:00 a 18:00 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Bodega Puerto Vallarta: Av. González Gallo 165 Fracc. Vida Vallarta. C.P. 48318. Tel. (322) 2247540 <br>Horario Lunes a Viernes 10:00 a 14:00 y 16:00 a 19:00 Hrs. / Sábado 10:00 a 14:00 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Showroom Federalismo Guadalajara: Federalismo norte 397 Col. Artesanos. C.P. 44200. Tel. (33) 38261420. <br>Horario Lunes a Viernes 10:30 a 14:30 y 16:00 a 18:30 Hrs. / Sábado 10:30 a 14:30 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Showroom Niños Héroes Guadalajara: Av Niños Héroes 1615 Col. Moderna C.P. 44190 Guadalajara, Jal. Tel. (33) 3810 7974. <br>Horario Lunes a Viernes 10:00 a 14:00 y 15:00 a 18:00 Hrs. / Sábado 10:00 a 14:00 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Showroom Tlaquepaque: Ramón López Velarde (la 74) #575 entre Artes y Europa. Col. San Antonio, Guadalajara. Tel. 333 814 83 24 <br>Horario Lunes a Viernes de 10:00 a 19:00 Hrs. Sábado y Domingo de 10:00 a 15:00 Hrs.</p>
				<p class="contact-line"><span class="azul-01 icon-pin"></span> Showroom Tepatitlán: Porfirio Díaz 160 Col. Centro. Tepatitlán, Jalisco. Tel. 3339037361<br>Horario Lunes a Sábado de 10:00 a 14:00 Hrs. y de 16:00 a 20:00 Hrs. Domingo de 10:00 a 12:00 Hrs. DESCANSAMOS LOS JUEVES.</p>
			</div>

		</div>

		<div class="inner-map" id="inner-map"></div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->