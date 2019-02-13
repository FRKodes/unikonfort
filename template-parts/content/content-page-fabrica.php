<?php
/**
 * Template part for displaying fabrica page content in page.php
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
			
			<div class="col-xs-12 col-md-6">
				<h3 class="mayus azul-01">
					<span class="thin">Innovación y</span> <br>
					diseño
				</h3>
				<?php the_content(); ?>
			</div>

			<div class="col-xs-12 col-md-6 factory-images">
				<div class="factory-images-container">
					<div class="item">
						<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/fabrica01_de_colchones_en_guadalajara.jpg'; ?>" alt="fabrica 01 de colchones en guadalajara"></figure>
					</div>
					<div class="item">
						<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/fabrica02_de_colchones_en_guadalajara.jpg'; ?>" alt="fabrica 02 de colchones en guadalajara"></figure>
					</div>
					<div class="item">
						<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/fabrica03_de_colchones_en_guadalajara.jpg'; ?>" alt="fabrica 03 de colchones en guadalajara"></figure>
					</div>
				</div>
			</div>

		</div>

		<div class="row bottom-blue-line">
			<div class="col-xs-12 col-md-12">
				<h2 class="title mayus text-center azul-01 mb-40 mt-40">Tecnología Unikonfort</h2>
			</div>

			
			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-sistema-encapsulado azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">Sistema </span> <br>Encapsulado</h3>
					<p>Barras perimetrales HD que refuerzan los bordes y dan estabilidad al colchón.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-sistema-sin-resortes azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">SISTEMA</span> <br>SIN RESORTES</h3>
					<p>Colchón que cuenta con un núcleo de poliuretano que sustituye los resortes.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-bonell-ortopedico azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">BONELL</span> <br>ORTOPÉDICO</h3>
					<p>Unidad de resortes firme. Núcleo de firmeza alta que da un alto nivel de soporte a la espalda.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-extra-soporte-lumbar azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">EXTRA SOPORTE</span> <br>LUMBAR</h3>
					<p>Diseño que combina un núcleo de resortes y acojinamientos firmes que dan firmeza en las zonas lumbares.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-memory-foam azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">MEMORY</span> <br>FOAM</h3>
					<p>Laminado de poliuretano extra suave con textura mullida.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-nano-tratamiento azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">NANO </span> <br>TRATAMIENTO</h3>
					<p>Tratamiento aplicado a la tela que ayuda a que los tejidos no absorban tan fácilmente los líquidos y ni la humedad.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-cero-movimiento azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">CERO</span> <br>MOVIMIENTO</h3>
					<p>Este colchón cuenta con un núcleo que no transmite movimientos.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-colchon-personalizable azul-01"></span>
				</div>
				<div class="info">
					<h3 class="azul-01 mayus"><span class="thin">COLCHÓN</span> <br>PERSONALIZABLE</h3>
					<p>Todos nuestros modelos se pueden ajustar a medidas, alturas o composición que nuestros clientes prefieran.</p>
				</div>
			</div>

		</div>
		
		<div class="row">

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-pocket-spring amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">POCKET</span> <br>SPRING</h3>
					<p>Unidad de resortes embolsados de manera independiente que no transmiten movimiento. Unidad de resortes suave.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-retardante-fuego amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">RETARDANTE AL</span> <br>FUEGO</h3>
					<p>Contamos con 2 diferentes tra- tamientos ignífugos de distinta intensidad.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-bloque-60k amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">BLOQUE</span> <br>60K</h3>
					<p>Bloque indeformable de poliuretano prensado. Núcleo extra firme que ofrece un alto nivel de soporte a la espalda y no transmite movimientos.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-bordes-reforzados amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">BORDES</span> <br>REFORZADOS</h3>
					<p>Barras laterales que refuerzan los bordes del colchón.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-novolteable amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">SISTEMA</span> <br>NO VUELTA</h3>
					<p>Sistema con materiales de alta resistencia concentrados en un solo lado.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-volteable amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">SISTEMA</span> <br>VOLTEABLE</h3>
					<p>Sistema que permite girar y rotar para un desgaste más uniforme.</p>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 fabrica-item">
				<div class="imagen">
					<span class="icon-anti-acaros amarillo-01"></span>
				</div>
				<div class="info">
					<h3 class="amarillo-01 mayus"><span class="thin">ANTI</span> <br>ÁCAROS</h3>
					<p>Todos nuestros textiles están fabricados en fibras sintéticas de alta calidad, lo cual ayuda a que no se generen sobrepoblaciones de ácaros ya que ellos proliferan en las fibras naturales por su más alto nivel de humedad.</p>
				</div>
			</div>

		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
