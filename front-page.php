<?php
/**
 * The template for displaying Unikonfort fron page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main container">

		<div class="conainter">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="main-title text-center mb-40">DISEÑO Y FABRICACIÓN DE COLCHONES</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-6 linea-block">
					<div class="imagen-linea"><figure><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-hotelera.jpg'; ?>" alt=""></figure></div>
					<div class="info">
						<h2 class="title azul-01">LÍNEA <br><b>HOTELERA</b></h2>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatum ducimus libero ipsam provident iusto. Modi ipsa, nihil nisi mollitia sequi, aperiam illo, iure inventore fugiat nesciunt accusamus esse quia.</p>
						<p class="text-right"><a href="#" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 linea-block">
					<div class="imagen-linea"><figure><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-residencial.jpg'; ?>" alt=""></figure></div>
					<div class="info">
						<h2 class="title verde-01">LÍNEA <br><b>RESIDENCIAL</b></h2>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos explicabo, iusto inventore esse corrupti a veritatis, ducimus sed nihil dolores sit saepe. Corporis temporibus expedita laudantium molestias amet, eum nostrum.</p>
						<p class="text-right"><a href="#" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
