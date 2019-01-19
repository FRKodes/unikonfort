<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Unikonfort
 * @since 1.0.0
 */
?>
<div class="site-branding">

	<div class="site-logo"><?php echo get_stylesheet_directory_uri() . '/assets/images/logo-unikonfort-blanco.svg'; ?></div>
	

	<?php $blog_info = get_bloginfo( 'name' ); ?>
	
	<?php if ( has_nav_menu( 'top-menu' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="Top Menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					'menu_class'     => 'main-menu navbar navbar-expand-md navbar-dark fixed-top bg-dark',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" tabindex="0">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	
	<?php if ( has_nav_menu( 'social-menu' ) ) : ?>
		<nav class="social-navigation" aria-label="Social Links Menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
</div><!-- .site-branding -->
