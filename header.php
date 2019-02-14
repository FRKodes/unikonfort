<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700" rel="stylesheet">
	<link rel="icon" type="image/png" href="/favicon.png">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-19"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-84802922-19');
	</script>	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header">

			<?php if ( has_nav_menu( 'top-menu' ) ) : ?>
					<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-dark fixed-top" aria-label="Top Menu">
						<div class="inner-top-bar-container">

						<a class="navbar-brand" href="/"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-unikonfort-blanco.svg'; ?>" alt="<?php the_title() ?>"></a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'top-menu',
								'menu_class'     => 'main-menu navbar-nav mr-auto',
								'items_wrap'     => '<ul id="%1$s" class="%2$s" tabindex="0">%3$s</ul>',
							)
						);
						?>
						</div>
					</nav><!-- #site-navigation -->
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row">
				<?php if (is_front_page() || is_page('fabrica-de-colchones-para-hoteles')) { ?>
					<div class="main-banner-container">
						<?php

						$args = array(
						    'post_type' => 'banner',
						    'post_status' => 'publish',
						    'posts_per_page' => 6
						);

						$banners = new WP_Query( $args );



						$banners = new WP_Query( $args );
						while ( $banners->have_posts() ) : $banners->the_post();?>
							<div class="item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
							<?php 
						endwhile;
						wp_reset_query(); ?>

						

					</div>

				<?php } else { 
					if ( is_singular( 'page' ) || is_single() && !is_singular( 'producto' )) { ?>
					    <div class="inner-page-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div><?php
					}?>
				<?php } ?>
			</div>
		</div>
