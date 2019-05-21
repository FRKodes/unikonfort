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
							
							<div class="col-xs-12 col-md-12 mb-40"><?php echo get_the_content(); ?> </div>

							<?php
							
							$args = array( 'post_type' => 'producto', 'posts_per_page' => 24, 'post_status' => 'publish',
								'tax_query'=> array(
									array(
										'taxonomy'=>'category',
										'field'=>'slug',
										'terms' => 'bel-air'
									) ));
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();?>
								<div class="col-xs-12 col-md-6 catalog-item">
									<div class="inner-container">
										<div class="image"><figure><?php the_post_thumbnail(); ?></figure></div>
										<div class="info">
											<div class="title-block">
												<h2 class="title mayus"><a class="azul-01" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2><?php 
												$categories = get_the_terms( $post->ID, 'category' );
												foreach( $categories as $category ) { ?>
													<h3 class="subtitle azul-01 thin mayus"><?php echo $category->name; ?></h3>
													<?php break; ?>
												<?php } ?>
											</div>
											<div class="texts">
												&nbsp;
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

					<footer class="entry-footer"></footer><!-- .entry-footer -->

				</article><!-- #post-<?php the_ID(); ?> -->

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
