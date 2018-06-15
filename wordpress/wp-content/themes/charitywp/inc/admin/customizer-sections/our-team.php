<?php
/**
 * Panel Our Team
 *
 * @package Charity
 */

thim_customizer()->add_panel(
	array(
		'id'       => 'our_team',
		'priority' => 8,
		'title'    => esc_html__( 'Our Team', 'charitywp' ),
	)
);