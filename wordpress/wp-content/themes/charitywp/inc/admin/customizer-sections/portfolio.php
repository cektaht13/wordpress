<?php
/**
 * Panel Header
 *
 * @package Charity
 */

thim_customizer()->add_panel(
	array(
		'id'       => 'display_portfolio',
		'priority' => 9,
		'title'    => esc_html__( 'Portfolio', 'charitywp' ),
	)
);