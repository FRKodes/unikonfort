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
				<div class="main-banner-container">
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
				</div>
			</div>
		</div>
