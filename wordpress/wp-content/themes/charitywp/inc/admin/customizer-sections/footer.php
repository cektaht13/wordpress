<?php
/**
 * Panel Footer
 *
 * @package Charity
 */
thim_customizer()->add_panel(
	array(
		'id'       => 'display_footer',
		'priority' => 11,
		'title'    => esc_html__( 'Footer', 'charitywp' ),
	)
);