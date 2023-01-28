<?php
/**
 * Redux Framework color config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Options', 'writerPro' ),
        'id'         => 'opt-ddcolor',
        'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'writerPro' ) . '<a href="https://devs.redux.io/core-fields/color.html" target="_blank">https://devs.redux.io/core-fields/color.html</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'writerPro-body-color',
                'type'     => 'background',
                'output'   => array(
                    'background-color' => 'body',
                    'important'        => true,
                ),
                'default'  => array(
                    'background-color' => '#fff',
                ),
                'title'    => __( 'Site Background', 'your-textdomain-here' ),
                'subtitle' => __( 'Body background with image, color, etc.', 'your-textdomain-here' ),
            ),
            array(
                'id'          => 'writer__body_typo',
                'type'        => 'typography',
                'title'       => __('Body', 'redux-framework-demo'),
                'google'      => true,
                'font-backup' => true,
                 'text-align' => false,
                 'font-style' => true,
                 'font-weight' => true,
                'output'      => array('h2.site-description'),
                'units'       =>'px',
                'subtitle'    => __('Typography, color, font', 'redux-framework-demo'),
                'default'     => array(
                    'font-weight'  => '400',
                    'font-family' => 'Inter',
                    'google'      => true,
                    'font-size'   => '15px',
                    'line-height' => '22px',
                    'color'       => '#333',
                ),
            ),
            array(
                'id'       => 'opt-dd-dddd',
                'type'     => 'color',
                'title'    => esc_html__( 'Primary color', 'writerPro' ),
                'subtitle' => esc_html__( 'Pick Your site primary color', 'writerPro' ),
                'default'  => '#0a0a0a',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.pri-link ',
                ),
            ),
            array(
                'id'       => 'opt-dd-ddsazd',
                'type'     => 'color',
                'title'    => esc_html__( 'Heading color', 'writerPro' ),
                'subtitle' => esc_html__( 'Pick a background color for the footer (default: #dd9933).', 'writerPro' ),
                'default'  => '#0a0a0a',
                'validate' => 'color',
                'output'   => array(
                    'color' => 'h1,h2,h3,h4,h5,h6 ',
                ),
            ),
            array(
                'id'       => 'opt-dd-fooddter',
                'type'     => 'color',
                'title'    => esc_html__( 'Paragraph', 'writerPro' ),
                'subtitle' => esc_html__( 'Pick a background color for the footer (default: #dd9933).', 'writerPro' ),
                'default'  => '#0a0a0a',
                'validate' => 'color',
                'output'   => array(
                    'color' => 'p, ',
                ),
            ),

            array(
                'id'       => 'opt-lddink-color',
                'type'     => 'link_color',
                'title'    => esc_html__( 'Links Color', 'writerPro' ),
                'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'writerPro' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'writerPro' ),
                'default'  => array(
                    'regular' => '#aaa',
                    'hover'   => '#bbb',
                    'active'  => '#ccc',
                ),
                'output'   => array(
                    'a',
                    'important' => true,
                ),

                // phpcs:ignore Squiz.PHP.CommentedOutCode
                // 'regular'   => false, // Disable Regular Color.
                // 'hover'     => false, // Disable Hover Color.
                // 'active'    => false, // Disable Active Color.
                // 'visited'   => true,  // Enable Visited Color.
            ),

        ),
    )
);
