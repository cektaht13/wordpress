<?php
/**
 * Section Footer Setting
 *
 * @package Charity
 */

thim_customizer()->add_section( array(
	'id'       => 'styling_color',
	'panel'    => 'styling',
	'title'    => esc_html__( 'Background Color & Text Color', 'charitywp' ),
	'priority' => 1,
) );

thim_customizer()->add_field(
	array(
		'id'        => 'body_bg_color',
		'type'      => 'color',
		'label'     => esc_html__( 'Body Background Color', 'charitywp' ),
		'tooltip'   => esc_html__( 'Background color for footer', 'charitywp' ),
		'section'   => 'styling_color',
		'default'   => '#ffffff',
		'priority'  => 2,
		'choices'   => array( 'alpha' => true ),
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => 'body',
				'property' => 'background-color',
			)
		),
	)
);

thim_customizer()->add_field(
	array(
		'id'        => 'body_primary_color',
		'type'      => 'color',
		'label'     => esc_html__( 'Theme Primary Color', 'charitywp' ),
		'tooltip'   => esc_html__( 'Background color for footer', 'charitywp' ),
		'section'   => 'styling_color',
		'default'   => '#f8b864',
		'priority'  => 12,
		'choices'   => array( 'alpha' => true ),
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => '.thim-button.style3, #back-to-top, .thim-button.style3,
				.donate_counter_percent',
				'property' => 'background-color',
			)
		)
	)
);