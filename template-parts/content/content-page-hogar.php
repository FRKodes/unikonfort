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
		
		<div class="row">
			<div class="col-xs-12 col-md-10 col-lg-6 ml-auto mr-auto">
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
							<option value="30-50">30-50 KG</option>	
							<option value="50-70">50-70 KG</option>	
							<option value="70-90">70-90 KG</option>	
							<option value="90-120">90-120 KG</option>	
							<option value="+120">+120 KG</option>	
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
							<option value="30-50">30-50 KG</option>	
							<option value="50-70">50-70 KG</option>	
							<option value="70-90">70-90 KG</option>	
							<option value="90-120">90-120 KG</option>	
							<option value="+120">+120 KG</option>	
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
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->