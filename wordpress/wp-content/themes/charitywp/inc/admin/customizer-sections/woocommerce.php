<?php
/**
 * Panel Product
 *
 * @package Charity
 */

thim_customizer()->add_panel(
	array(
		'id'       => 'woocommerce',
		'priority' => 10,
		'title'    => esc_html__( 'Products', 'charitywp' ),
	)
);