<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Unikonfort
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		
		<div class="col-xs-12 col-lg-8">
			
			<header class="entry-header">
				<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
			</header>

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

		</div>

		<div class="col-xs-12 col-lg-3 ml-auto single-post-sidebar">
			<h2 class="text-center azul-01 mayus">Entradas relacionadas</h2>
			<?php
			$categories = get_the_category();
			$category_id = $categories[0]->cat_ID;

			$tag_objects = wp_get_post_tags($post->ID);
			$tags = array();
			foreach ($tag_objects as $tag_object) {
				$tags[] = $tag_object->term_id;
			}
			
			$args_related_posts = array(
				'numberposts' => 4,
				'offset' => 0,

				'category' => 0,
				'tax_query' => array(
				    array(
				        'taxonomy' => 'post_tag',
				        'field'    => 'term_id',
				        'terms'    => $tags,
				    ),
				),
				'orderby' => array( 'rand', 'name' ),
				'exclude'=> $post->ID,
				'post_type' => 'post',
				'post_status' => 'publish',
				'suppress_filters' => true
			);
			$recent_posts = wp_get_recent_posts( $args_related_posts );
				foreach( $recent_posts as $recent ){ ?>
					<div class="blog-item">
						<div class="inner-blog-container">
							<div class="image"><a href="<?php the_permalink($recent['ID']) ?>"><figure><img src="<?php echo get_the_post_thumbnail_url($recent['ID']); ?>" alt="<?php echo $recent['post_title']; ?>"></figure></a></div>
							<div class="info"><p class="title mayus"><a class="azul-01" href="<?php the_permalink($recent['ID']) ?>"><?php echo $recent["post_title"]; ?></a></p></div>
						</div>
					</div><?php
				}
				wp_reset_query(); ?>
		</div>

		<footer class="entry-footer">
		</footer><!-- .entry-footer -->

	</div>


	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
