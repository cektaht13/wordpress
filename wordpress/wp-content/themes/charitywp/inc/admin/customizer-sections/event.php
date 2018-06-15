<?php
/**
 * Panel Event
 *
 * @package Charity
 */
thim_customizer()->add_panel(
	array(
		'id'       => 'event',
		'priority' => 7,
		'title'    => esc_html__( 'Event', 'charitywp' ),
	)
);