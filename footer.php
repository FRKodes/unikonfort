<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<h3 class="title text-center mt-20 mb-20">PONTE EN CONTACTO</h3>
						<p class="footer-line"><span class="icon-phone"></span> (33) 3606 4362 - (33) 3606 5283</p>
						<p class="footer-line"><span class="icon-mail"></span> <a class="white" href="mailto:contacto@unikonfort.mx">contacto@unikonfort.mx</a></p>
						<p class="footer-line"><span class="icon-pin"></span> Av. Camino a Santa Cruz del Valle #113-A Col. Valle de la misericordia, Tlaquepaque Jalisco, México.</p>
						<p class="footer-line"><span class="icon-watch"></span> Lunes a Viernes 8:00 a 18:00 Hrs.</p>
						<ul class="social-stuff">
							<li><a target="_blank" href="https://www.facebook.com/colchonesunikonfort/" class="icon-fb"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-4 text-center">

						<img class="logo-footer mb-20" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-color-unikonfort.svg'; ?>" alt="logo color unikonfort, fábrica de colchones.">
						
						<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
							<nav class="footer-navigation">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer-menu',
										'menu_class'     => 'footer-menu',
										'depth'          => 1,
									)
								);
								?>
							</nav><!-- .footer-navigation -->
						<?php endif; ?>
					</div>
				<div class="col-xs-12 col-md-4">
					<h3 class="title text-center mt-20 mb-20">SUSCRÍBETA A NUESTRO NEWSLETTER</h3>
					<p>Deja tu correo para recibir ofertas especiales y promociones.</p>
					<form action="">
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Enviar">
						</div>
					</form>
				</div>
					
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12 mt-40">
					<p class="credits text-center">Desarrollado por <a class="azul-01" target="_blank" href="https://blueterrier.mx">Blue Terrier Studio</a></p>
				</div>
			</div>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&language=es&callback=initialize"></script>
</body>
</html>
