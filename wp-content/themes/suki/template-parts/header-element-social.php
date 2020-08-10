<?php
/**
 * Social links template.
 *
 * Passed variables:
 *
 * @type string $slug Header element slug.
 *
 * @package Suki
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$items = suki_get_theme_mod( 'header_social_links', array() );

if ( ! empty( $items ) ) {
	$target = '_' . suki_get_theme_mod( 'header_social_links_target' );
	$attrs = array();

	foreach ( $items as $item ) {
		$url = suki_get_theme_mod( 'social_' . $item );
		$attrs[] = array(
			'type'   => $item,
			'url'    => ! empty( $url ) ? $url : '#',
			'target' => $target,
		);
	}
	?>
	<ul class="<?php echo esc_attr( 'suki-header-' . $slug ); ?> menu">
		<?php suki_social_links( $attrs, array(
			'before_link' => '<li class="menu-item">',
			'after_link'  => '</li>',
			'link_class'  => 'suki-menu-icon',
		) ); ?>
	</ul>
	<?php
}