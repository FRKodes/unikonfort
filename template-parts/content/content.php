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

	<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-md-6 col-lg-4 blog-item">
		<div class="inner-blog-container">
			<header class="">
				<div class="image">
					<a href="<?php the_permalink() ?>">
						<figure>
							<img src="<?php echo get_the_post_thumbnail_url($recent['ID']); ?>" alt="<?php echo $recent['post_title']; ?>">
						</figure>
					</a>
				</div>
			</header><!-- .entry-header -->

			<div class="info">
				<h2 class="title mayus">
					<a class="azul-01" rel="bookmark" href="<?php the_permalink() ?>">
						<?php the_title( ); ?>
					</a>
				</h2>
				<p class="italic excerpt-blog"><?php echo substr(get_the_excerpt(), 0,200) . " ..."; ?></p>
				<p class="text-right"><a href="<?php the_permalink() ?>" class="view-catalog italic azul-01">VER MÁS</a></p>
			</div>
		</div>
	</article><!-- #post-${ID} -->
