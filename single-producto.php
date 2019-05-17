<?php
/**
 * The template for displaying all single posts
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
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>

				<div class="row">
					<div class="col-xs-12 col-sm-12">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="container">

								<div class="row">

									<header class="entry-header product-detail">
										<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
									</header>
								</div>


								<div class="row">
									<div class="col-xs-12 col-md-6 detail-image-container">
										<figure class="zoom" onMouseMove="zoom(event)" style="background-image: url(<?php the_field('imagen_detalle'); ?>);">
											<img src="<?php the_field('imagen_detalle'); ?>" alt="<?php the_title() ?>">
										</figure>

										<div class="icons-container">
											<?php
											$features = get_field('features');
											$feature_container = "";
											foreach( $features as $feature ) { ?>
												<div class="feature-container">
													<span class="feature-icon icon-<?php echo strtolower($feature); ?>"></span>
													<?php switch ($feature) {
														case 'anti-acaros':
															$feature_description = 'Anti ácaros';
															break;
														case 'bloque-60k':
															$feature_description = 'Bloque 60K';
															break;
														case 'bonell-ortopedico':
															$feature_description = 'Núcleo Bonell ortopédico';
															break;
														case 'bordes-reforzados':
															$feature_description = 'Border reforzados';
															break;
														case 'cero-movimiento':
															$feature_description = 'Cero movimiento';
															break;
														case 'colchon-personalizable':
															$feature_description = 'sistema personalizable';
															break;
														case 'extra-soporte-lumbar':
															$feature_description = 'Extra soporte lumbar';
															break;
														case 'memory-foam':
															$feature_description = 'Memory foam';
															break;
														case 'nano-tratamiento':
															$feature_description = 'Nano Tratamiento repelente de manchas y líquidos';
															break;
														case 'pocket-spring':
															$feature_description = 'Pocket Spring';
															break;
														case 'retardante-fuego':
															$feature_description = 'Tratamiento ignifuego';
															break;
														case 'sistema-encapsulado':
															$feature_description = 'Sistema encapsulado';
															break;
														case 'sistema-sin-resortes':
															$feature_description = 'Sistema sin resortes';
															break;
														default:
															$feature_description = '';
															break;
													} ?>
													<p class="feature-description"><?php echo $feature_description; ?></p>
												</div>
											<?php } ?>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<header class="entry-header product-detail">
											<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
										</header>

										<div class="entry-content">
											<?php the_content(); ?>
										</div><!-- .entry-content -->

										<footer class="entry-footer">
										</footer><!-- .entry-footer -->
									</div>
								</div>
							</div>
						</article><!-- #post-${ID} -->
						
					</div>
				</div><?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();