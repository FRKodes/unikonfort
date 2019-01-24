<?php
/**
 * Template part for displaying catalog page content in page.php
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
			
			<div class="col-xs-12 col-md-12 mb-40"> <?php the_content(); ?> </div>

			<?php for ($i=0; $i < 4; $i++) { 
				?>
					<div class="col-xs-12 col-md-6 catalog-item">
						<div class="inner-container">
							<div class="image">
								<figure><img class="cien" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/colchon_bel-airplus_doble_colchoneta.jpg'; ?>" alt="ook"></figure>
							</div>
							<div class="info">
								<div class="title-block">
									<h2 class="title azul-01 mayus">SUNSET PLUS</h2>
									<h3 class="subtitle azul-01 thin mayus">Hotel line</h3>
								</div>
								<div class="texts">
									<p class="line"><b class="mayus">firmeza: </b>Semi firme</p>
									<p class="line"><b class="mayus">altura: </b>25 cms.</p>
									<p class="line"><b class="mayus">Versión: </b>Dos lados de uso</p>
									<p class="line"><b class="mayus">Tela: </b>Dos lados de uso</p>
								</div>
								<div class="icons">
									<span class="icon-retardante-fuego"></span>
									<span class="icon-sistema-encapsulado"></span>
									<span class="icon-sistema-sin-resortes"></span>
								</div>
								<p class="text-left mb-0"><a href="#" class="view-catalog italic azul-01">VER DETALLE</a></p>
							</div>
						</div>
					</div>
				<?php 
			} ?>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
