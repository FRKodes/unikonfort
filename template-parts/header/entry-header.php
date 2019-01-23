<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Unikonfort
 * @since 1.0.0
 */

the_title( '<h1 class="entry-title mb-40 mt-20">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<span class="comment-count">
	</span>
	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">Editar</span>'
		);
	?>
</div><!-- .meta-info -->
<?php endif; ?>
