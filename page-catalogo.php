<?php
/**
 * The template for displaying the catalog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Unikonfort
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row">
				
				<?php /* Start the Loop */ ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="entry-header">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</header>

					<div class="entry-content container">
						<div class="row">
							
							<div class="col-xs-12 col-md-12 mb-40"> <?php the_content(); ?> </div>

							<div class="col-xs-12 col-md-6 catalog-cat-item">
								<div class="inner-container bel-air">
									<div class="image">
										<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-unikonfort-bel-air.jpg'; ?>" alt="linea unikonfort bel-air"></figure>
									</div>
									<div class="info">
										<div class="title-block white">
											<h2 class="title azul-01 white mayus">BEL-AIR</h2>
											<p>HOTELEROS CLÁSICOS CON UN TOQUE DE CONFORT</p>
											<p>
												Los modelos Bel Air, al igual que Hotel Line, cuentan con un armado tradicional, más, sin embargo, su terminado se de ne especial ya que se agregan colchonetas tipo Europeas en las super cies, la cual ayudan en gran medida a obtener un mejor confort y experiencia del huésped. <br><br>
												Bel Air es una línea muy versátil, ya que cuenta con opciones para diferentes necesidades y presupuestos.
											</p>
											<p class="text-left mb-0"><a href="#" class="view-catalog white italic azul-01">VER MODELOS</a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-md-6 catalog-cat-item">
								<div class="inner-container hotel-line">
									<div class="image">
										<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-unikonfort-hotel-line.jpg'; ?>" alt="linea unikonfort hotel line"></figure>
									</div>
									<div class="info">
										<div class="title-block white">
											<h2 class="title azul-01 white mayus">HOTEL LINE</h2>
											<p>LA CLÁSICA DE ALTA DURACIÓN</p>
											<p>
												Hotel line es la más clásica línea hotelera de Unikonfort, el armado de esta línea se lleva acabo de manera tradicional y permite un terminado compacto que prolonga la vida del colchón. <br><br>
												Ideal para hoteles de alto trá co que quieren ofrecer un descanso reparador y ortopédico a sus huéspedes.
											</p>
											<p class="text-left mb-0"><a href="#" class="view-catalog white italic azul-01">VER MODELOS</a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-md-6 catalog-cat-item">
								<div class="inner-container confort-home">
									<div class="image">
										<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-unikonfort-confort-home.jpg'; ?>" alt="linea unikonfort confort home"></figure>
									</div>
									<div class="info">
										<div class="title-block white">
											<h2 class="title azul-01 white mayus">CONFORT HOME</h2>
											<p>HAZ DE LA NOCHE UNA EXPERIENCIA</p>
											<p>
												Confort Home está inspirada en aquellos hoteles de alto nivel que buscan ofrecer sensaciones y experiencias nuevas a sus huéspedes. <br><br>
												La línea confort Home, está diseñada utilizando solo los materiales que por su naturaleza ofrecen una calidad total, utilizando componentes que eviten la transmisión de movimiento y ofrezcan sensaciones especiales.
											</p>
											<p class="text-left mb-0"><a href="#" class="view-catalog white italic azul-01">VER MODELOS</a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-md-6 catalog-cat-item">
								<div class="inner-container top-hotel">
									<div class="image">
										<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linea-unikonfort-confort-home.jpg'; ?>" alt="linea unikonfort confort home"></figure>
									</div>
									<div class="info">
										<div class="title-block white">
											<h2 class="title azul-01 white mayus">TOP HOTEL</h2>
											<p>DESCANSO ORTOPÉDICO Y CONFORT DE ALTO NIVEL.</p>
											<p>
												Ofrece el soporte que el huésped necesita, fabricando una línea de modelos con núcleos reforzados para un mayor soporte lumbar en combinación con colchonetas suaves para lograr el balance entre un descanso ortopédico y de un alto nivel de confort. <br><br>
												La composición ofrece mayor refuerzo y sensación de firmeza en los bordes del colchón, evitando deformaciones.
											</p>
											<p class="text-left mb-0"><a href="#" class="view-catalog white italic azul-01">VER MODELOS</a></p>
										</div>
									</div>
								</div>
							</div>

							


							<?php
							/*
							 HAY QUE ACTIVAR ESTO CUANDO SE GENEREN LOS PRODUCTOS
							 */
							
							$args = array( 'post_type' => 'producto', 'posts_per_page' => 12, 'post_status' => 'publish' );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();?>
								<div class="col-xs-12 col-md-6 catalog-item" style="display: none">
									<div class="inner-container">
										<div class="image">
											<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/colchon_bel-airplus_doble_colchoneta.jpg'; ?>" alt="ook"></figure>
										</div>
										<div class="info">
											<div class="title-block">
												<h2 class="title azul-01 mayus"><?php the_title() ?></h2><?php 
												$categories = get_the_terms( $post->ID, 'category' );
												foreach( $categories as $category ) { ?>
													<h3 class="subtitle azul-01 thin mayus"><?php echo $category->name; ?></h3>
													<?php break; ?>
												<?php } ?>
											</div>
											<div class="texts">
												<?php the_content() ?>
											</div>
											<div class="icons">
												
												<?php
												$features = get_field('features');
												foreach( $features as $feature ) { ?>
													<span class="icon-<?php echo strtolower($feature); ?>"></span>
												<?php } ?>
											</div>
											<p class="text-left mb-0"><a href="<?php the_permalink() ?>" class="view-catalog italic azul-01">VER DETALLE</a></p>
										</div>
									</div>
								</div><?php 
							endwhile;
							wp_reset_query(); ?>

						</div>

					</div><!-- .entry-content -->

					<footer class="entry-footer">
						
					</footer><!-- .entry-footer -->

				</article><!-- #post-<?php the_ID(); ?> -->

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
