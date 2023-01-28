<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer Button', 'writerPro' ),
 		'id'               => 'footer-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'footer_cope_right',
				'type'     => 'text',
				'title'    => esc_html__( 'Cope Right Text', 'writerPro' ),
				'default'  => '© 2019 - 2021 Devute. All Rights Reserved.',
			),
//			array(
//				'id'        => 'text-example-hint',
//				'type'      => 'text',
//				'title'     => esc_html__( 'Text Field w/ Hint', 'writerPro' ),
//				'subtitle'  => esc_html__( 'Subtitle', 'writerPro' ),
//				'desc'      => esc_html__( 'Field Description', 'writerPro' ),
//				'default'   => 'Default Text',
//				'text_hint' => array(
//					'title'   => 'Hint Title',
//					'content' => 'Hint content about this field!',
//				),
//			),
//			array(
//				'id'          => 'text-placeholder',
//				'type'        => 'text',
//				'title'       => esc_html__( 'Text Field w/ placeholder using custom data object.', 'writerPro' ),
//				'subtitle'    => esc_html__( 'Subtitle', 'writerPro' ),
//				'desc'        => esc_html__( 'Field Description', 'writerPro' ),
//				'placeholder' => 'Placeholder Text',
//				'data'        => array( 'box1', 'box2' ),
//			),
		),
	)
);
