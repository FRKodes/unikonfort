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
	
	<div class="whatsapp-contact">
		<a href="https://api.whatsapp.com/send?phone=523316951395" target="_blank" title="Mándamos un WhatsApp">
			<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/whatsapp-icon.png'; ?>" alt="Ícono whatsapp">
		</a>
	</div>

	<footer id="colophon" class="site-footer">
			<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<h3 class="title text-center mt-20 mb-20">PONTE EN CONTACTO</h3>
						<p class="footer-line"><span class="icon-phone"></span> (33) 3606 4362 - (33) 3606 5283</p>
						<p class="footer-line"><span class="icon-mail"></span> <a class="white" href="mailto:contacto@unikonfort.mx">contacto@unikonfort.mx</a></p>
						<p class="footer-line"><span class="icon-pin"></span> Av. Camino a Santa Cruz del Valle #113-A Col. Valle de la misericordia, Tlaquepaque Jalisco, México.</p>
						<p class="footer-line"><span class="icon-watch"></span>HORARIO FÁBRICA Lunes a Viernes 8:00 a 18:00 Hrs.</p>
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

					<div id="mc_embed_signup">
					<form action="https://unikonfort.us20.list-manage.com/subscribe/post?u=57ec48b943e500e34853602ad&amp;id=2dc1b6eb35" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    
					    <div id="mc_embed_signup_scroll">
					    	<div class="form-group"><input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Correo Electrónico" required></div>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" class="form-group" aria-hidden="true"><input type="text" name="b_57ec48b943e500e34853602ad_2dc1b6eb35" tabindex="-1" value=""></div>
							<div class="form-group"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></div>
					    </div>
					</form>
					</div>


					<!-- <form action="">
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Enviar">
						</div>
					</form> -->
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

<?php if (is_page('contacto')) { ?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9PjEWet-S_QwvALr2EDGqqqEjRrOvNI4&libraries=places&language=es"></script>
	<script>
		    var map;
		    var infowindow;
		    var latlng = new google.maps.LatLng(23.650067, -100.648541);

		    function initialize() {
		        var mapOptions = {
		            mapTypedId: google.maps.MapTypeId.ROADMAP,
		            zoom: 6,
		            center: latlng,
		            panControl: true,
		        };

		        infowindow = new google.maps.InfoWindow();

		        map = new google.maps.Map(document.getElementById('inner-map'), mapOptions);
		        
		        AgregaMarkers(20.5798778, -103.362714, "Matríz", "Av. Camino a Santa Cruz del Valle #113-A Col. Valle de la Misericordia Tlaquepaque Jalisco.","(33) 3606 4362 - (33) 3606 5283");
		        AgregaMarkers(20.645664886207094, -105.21550078498697, "Bodega Puerto Vallarta", "Av. González Gallo 165 Fracc.Vida Vallarta. C.p. 48318 Puerto Vallarta, Jalisco.", "(322) 224 7540");
		        AgregaMarkers(20.68191048618725, -103.3564949849864, "Showroom Guadalajara", "Federalismo norte 397 Col.Artesanos. C.p. 44200 Guadalajara, Jalisco.", "(33) 3826 1420");
		        AgregaMarkers(20.666600, -103.361391, "Showroom Niños Héroes Guadalajara", "Av Niños Héroes 1615 Col. Moderna C.P. 44190 Guadalajara, Jal.", "(33) 3810 7974");
		        AgregaMarkers(20.817771, -102.758560, "Showroom Tlaquepaque", "Ramón López Velarde (la 74) #575 entre Artes y Europa. Col. San Antonio, Guadalajara.", "333 814 83 24");
		        AgregaMarkers(20.817771, -102.758560, "Showroom Tepatitlán", "Porfirio Díaz 160 Col. Centro. Tepatitlán, Jalisco.", "33 3903 7361");
		        AgregaMarkers(21.079582, -86.843694, "Showroom Cancún", "Showroom Cancún: Av. Bonfil km 11.5 local 7 Cancún, Quintana Roo.", "998 233 2632");
		        AgregaMarkers(25.708806, -100.502123, "Showroom Monterrey", "Del Textil # 108<br>Regio Parque Industrial Santa Catarina.<br>Santa Catarina, N.L.", "(81) 80593323, 24 y 25");
		        
		    }
		    
		    function AgregaMarkers(Latitud, Longitud, Titulo, Descripcion, Telefono) {
		                
		        var marker = new google.maps.Marker({
		        //icon    : "http://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
		            position: new google.maps.LatLng(Latitud, Longitud),
		                title: "",
		                map: map
		            });
		            //marker.setMap(map);
		           
		            //info show
		            google.maps.event.addListener(marker, 'click', function () {
		                infowindow.setContent("<div class='InfoMapa'><h2>" + Titulo + "</h2><p class='Direccion'>" + Descripcion + "</p><p class='Telefono'>" + Telefono + "</p></div>");
		                infowindow.open(map, this);
		            });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<?php } ?>
<script>
	function zoom(e){
		console.log('over-');
		var zoomer = e.currentTarget;
		e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
		e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;
		x = offsetX/zoomer.offsetWidth*100;
		y = offsetY/zoomer.offsetHeight*100;
		zoomer.style.backgroundPosition = x + '% ' + y + '%';
	}
</script>
</body>
</html>