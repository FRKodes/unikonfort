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
				<div class="col-xs-12 col-md-12">
					<h1 class="main-title azul-01 text-center mb-40">DISEÑO Y FABRICACIÓN DE COLCHONES</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-6 linea-block">
					<div class="imagen-linea"><figure><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-hotelera.jpg'; ?>" alt=""></figure></div>
					<div class="info">
						<h2 class="title azul-01"><span class="thin">LÍNEA</span> <br><b>HOTELERA</b></h2>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatum ducimus libero ipsam provident iusto. Modi ipsa, nihil nisi mollitia sequi, aperiam illo, iure inventore fugiat nesciunt accusamus esse quia.</p>
						<p class="text-right"><a href="#" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 linea-block">
					<div class="imagen-linea"><figure><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-residencial.jpg'; ?>" alt=""></figure></div>
					<div class="info">
						<h2 class="title verde-01"><span class="thin">LÍNEA</span> <br><b>RESIDENCIAL</b></h2>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos explicabo, iusto inventore esse corrupti a veritatis, ducimus sed nihil dolores sit saepe. Corporis temporibus expedita laudantium molestias amet, eum nostrum.</p>
						<p class="text-right"><a href="#" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
					</div>
				</div>
			</div>
		</div>

		
		<div class="inner-banner-home"></div>


		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<h2 class="title azul-01 text-center mb-40">SOLUCIONES A TU MEDIDA</h2>
				</div>

				<div class="col-xs-12 col-lg-6 soluciones-a-medida">
					<div class="image">
						<figure><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cochones-a-tu-medida-fabrica-de-colchones-en-mexico.jpg'; ?>" alt="cochones a tu medida, fábrica de colchones en méxico"></figure>
					</div>
				</div>

				<div class="col-xs-12 col-lg-6">
					<h2 class="title amarillo-01">
						<span class="thin">DISEÑO</span> <br>
						<b>Y FABRICACIÓN</b>
					</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iste ullam beatae molestias natus ipsum quo commodi magnam nulla, odit nobis quaerat praesentium optio officiis quasi consequuntur, sunt sapiente nostrum.
					</p>

					<h4>Otros productos y especialidades</h4>
					<ul>
						<li>Consectetur adipisicing elit.</li>
						<li>Explicabo perspiciatis est, vitae fugiat dolores consequatur quos illum.</li>
						<li>Saepe odio iusto et, itaque fugiat provident laboriosam.</li>
						<li>Lorem ipsum dolor sit amet.</li>
					</ul>
					<p class="text-right"><a href="#" class="view-catalog italic azul-01">VER CATÁLOGO</a></p>
				</div>
			</div>


			<div class="row">
				
				<div class="col-xs-12 col-md-12">
					<h2 class="title azul-01 text-center mt-40 mb-20">GARANTÍA HOTEL PROTECT</h2>
				</div>

				<div class="col-xs-12 col-md-12 blue-block white mb-40">
					<div class="row">
						<div class="col-xs-4 col-md-4 element text-center">
							<span class="first-line">10 AÑOS</span> <br>
							<i>CONTRA DEFECTOS DE FÁBRICA</i>
						</div>
						<div class="col-xs-4 col-md-4 element text-center">
							<span class="first-line">PROTECCIÓN</span> <br>
							<i>A HOTELES A NIVEL NACIONAL</i>
						</div>
						<div class="col-xs-4 col-md-4 element text-center">
							<span class="first-line">5 AÑOS</span> <br>
							<i>CON REEMPLAZO SIN COSTO</i>
						</div>
					</div>
				</div>
			</div>

			<div class="row garantia">
				
				<div class="col-xs-12 col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolorem quia, itaque facilis quisquam, impedit iste distinctio, accusamus deserunt quis quaerat. Vero, nobis reiciendis cupiditate. Dolor iste sit eos deserunt.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quisquam laborum eum amet id voluptatum iure. Tenetur ullam iste, nam, iusto vel repellat dolores, optio mollitia dolorum libero maiores ducimus.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae eum libero nam repellat magnam suscipit, accusamus at ab dolorum, totam aperiam atque delectus architecto aliquam, officiis rem veritatis, impedit! Ad!
					</p>
				</div>
				
				<div class="col-xs-12 col-md-6">
					<div class="image">
						<figure><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/garantia-unikonfort.jpg'; ?>" alt="garantia unikonfort, fábrica de colchones. Hacemos colchones a medida."></figure>
					</div>
				</div>

			</div>

			<div class="row mb-40">
				<div class="col-xs-12 col-md-12">
					<h2 class="title azul-01 text-center mt-40 mb-40">ÚLTIMAS NOTICIAS</h2>
				</div>

				<?php
				$counter = 0;
				$args_recent_posts = array(
					'numberposts' => 3,
					'offset' => 0,
					'category' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'include' => '',
					'exclude' => '',
					'meta_key' => '',
					'meta_value' =>'',
					'post_type' => 'post',
					'post_status' => 'publish',
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args_recent_posts );

				$recent_posts = wp_get_recent_posts();
					foreach( $recent_posts as $recent ){
						$counter ++;
						?>

						<div class="col-xs-12 col-md-6 col-lg-4 blog-item">
							<div class="inner-blog-container">
								<div class="image">
									<a href="<?php the_permalink($recent['ID']) ?>"><figure><img src="<?php echo get_the_post_thumbnail_url($recent['ID']); ?>" alt="<?php echo $recent['post_title']; ?>"></figure></div></a>
								<div class="info">
									<p class="title mayus"><a class="azul-01" href="<?php the_permalink($recent['ID']) ?>"><?php echo $recent["post_title"]; ?></a></p>
									<p class="italic excerpt-blog"><?php echo substr($recent["post_excerpt"], 0, 100); ?></p>
									<p class="text-right"><a href="<?php the_permalink($recent['ID']) ?>" class="view-catalog italic azul-01">VER MÁS</a></p>
								</div>
							</div>
						</div>

						<?php
						if ($counter == 3) {
							break;
						}
					}
					wp_reset_query();
				?>

			</div>
		</div>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
