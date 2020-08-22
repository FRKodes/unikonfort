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
	<meta name="viewport" content="width=device-width, initial-scale=1" /><?php 
	$page_description = "";
	$page = is_page();
	switch ($page) {
		case is_page('home'):
			$page_description = "En Unikonfort fabricamos los mejores colchones desde hace 40 años. Tenemos la más amplia gama de colchones para hotel y hogar.";
			break;
		
		case is_page('catalogo'):
			$page_description = "Fábrica de colchones. Fabricamos cualquier tipo de colchón, desde colchones convencionales, hasta colchones a prueba de fuego.";
			break;
		
		case is_page('fabrica'):
			$page_description = "La línea de colchones más completa, contamos con colchones ortopédicos, colchones de memory foam, colchones con resortes, colchones sin resortes.";
			break;
		
		case is_page('colchones-para-hoteles'):
			$page_description = "Nuestra línea de colchones esta diseñada para hotelería, contamos con una amplia gama de colchones para todo tipo de proyecto y necesidad. ";
			break;
		
		case is_page('hogar'):
			$page_description = "La línea de colchones más completa, contamos con colchones ortopédicos y colchones de memory foam. Contactanos para asesoría personalizada";
			break;
		
		case is_page('nosotros'):
			$page_description = "Conocer nuestra línea de colchones. Colchones para hotel y hogar. Envíos a todo el país. Unikonfort fábrica de colchones.";
			break;
		
		case is_page('blog'):
			$page_description = "Conoce aspectos que te pueden ayudar a mejorar la calidad de tu descanso con nuestro blog. Contáctanos si requieres asesoría personalizada.";
			break;
		
		case is_page('contacto'):
			$page_description = "Conocer nuestra línea de colchones. Colchones para hotel y hogar. Envíos a todo el país. Unikonfort fábrica de colchones.";
			break;
		
		default:
			$page_description = "En Unikonfort fabricamos los mejores colchones desde hace 40 años. Tenemos la más amplia gama de colchones para hotel y hogar.";
			break;
	}

	?>
	<meta name="description" content="<?php echo $page_description; ?>" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700" rel="stylesheet">
	<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{
			clear:left; 
			color: #fff;
			background: none;
		}
		#mc_embed_signup input[type="email"]{
			background-color: #fff;
			width: 100%;
			padding: 10px;
			border: none;
		}
		#mc_embed_signup input[type="submit"]{
			background-color: #007bff;
			border-color: #007bff;
		}


	</style>
	<link rel="icon" type="image/png" href="/favicon.png">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-19"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  // gtag('config', 'UA-84802922-19');
	  gtag('config', 'AW-785473532');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '710545476014710');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=710545476014710&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<script src="https://www.google.com/recaptcha/api.js?render=6Lc3qrUZAAAAAFJYeR7jjv1hTkvUQX99ydXjPGqt"></script>
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
