<?php
/**
 * Redux Framework image select config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Layout', 'your-textdomain-here' ),
        'id'         => 'header-layout-option',
        'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/core-fields/image-select.html" target="_blank">https://devs.redux.io/core-fields/image-select.html</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'header-layout-option-1',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Header Layout Option', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'No validation can be done on this field type', 'your-textdomain-here' ),

                // Must provide key => value(array:title|img) pairs for radio options.
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => Redux_Core::$url . 'assets/img/1col.png',
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => Redux_Core::$url . 'assets/img/2cl.png',
                    ),
//                    '3' => array(
//                        'alt' => '2 Column Right',
//                        'img' => Redux_Core::$url . 'assets/img/2cr.png',
//                    ),
//                    '4' => array(
//                        'alt' => '3 Column Middle',
//                        'img' => Redux_Core::$url . 'assets/img/3cm.png',
//                    ),
//                    '5' => array(
//                        'alt' => '3 Column Left',
//                        'img' => Redux_Core::$url . 'assets/img/3cl.png',
//                    ),
//                    '6' => array(
//                        'alt' => '3 Column Right',
//                        'img' => Redux_Core::$url . 'assets/img/3cr.png',
//                    ),
                ),
                'default'  => '2',
            ),
        ),
    )
);
