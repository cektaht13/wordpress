<?php
/**
 * Panel Donate
 *
 * @package Charity
 */
thim_customizer()->add_panel(
	array(
		'id'       => 'donate',
		'priority' => 6,
		'title'    => esc_html__( 'Donate', 'charitywp' ),
	)
);

