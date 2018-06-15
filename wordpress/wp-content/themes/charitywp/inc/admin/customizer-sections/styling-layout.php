<?php
/**
 * Section Footer Setting
 *
 * @package Charity
 */

thim_customizer()->add_section( array(
	'id'       => 'styling_layout',
	'panel'    => 'styling',
	'title'    => esc_html__( 'Layout', 'charitywp' ),
	'priority' => 2,
) );

thim_customizer()->add_field(
	array(
		'type'     => 'select',
		'id'       => 'box_layout',
		'label'    => esc_html__( 'Select a layout', 'charitywp' ),
		'tooltip'  => esc_html__( 'Choose the column type for event archive page.', 'charitywp' ),
		'default'  => 'wide',
		'priority' => 3,
		'multiple' => 0,
		'section'  => 'styling_layout',
		'choices'  => array(
			'boxed' => 'Boxed',
			'wide'  => 'Wide',
		),
	)
);
thim_customizer()->add_field(
	array(
		'id'       => 'rtl_support',
		'type'     => 'switch',
		'label'    => esc_html__( 'Turn On/Off RTL', 'charitywp' ),
		'tooltip'  => esc_html__( 'Turn On/Off comment', 'charitywp' ),
		'section'  => 'styling_layout',
		'default'  => false,
		'priority' => 4,
		'choices'  => array(
			true  => esc_html__( 'On', 'charitywp' ),
			false => esc_html__( 'Off', 'charitywp' ),
		),
	)
);
