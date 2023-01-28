<?php
/**
 * Redux Framework checkbox config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__( 'Footer Widget', 'your-textdomain-here' ),
        'id'               => 'basifcd-checkbox',
        'subsection'       => true,
        'customizer_width' => '450px',
         'fields'           => array(
             array(
                 'id'       => 'footer_widget_1',
                 'type'     => 'select',
                 'data'     => 'tags',
                 'title'    => esc_html__( 'Footer Widget 1', 'your-textdomain-here' ),
              ),
            array(
                'id' => 'footer-layout-sorter',
                'type' => 'sorter',
                'title' => 'Footer Layout',
                'subtitle' => 'beta > this option currently not available',
                'compiler' => 'true',
                'options' => array(
                    'FooterWidget1' => array(
                        'FooterWidget1' => 'Footer Widget 1',
                        'FooterWidget2' => 'Footer Widget 2',
                        'FooterWidget3' => 'Footer Widget 3',
                        'FooterWidget4' => 'Footer Widget 4',
                    ),
                    'FooterWidget2' => array(),
                    'FooterWidget3' => array(),
                    'FooterWidget4' => array(),
                ),
                'limits' => array(
                     'FooterWidget1' => 4,
                     'FooterWidget2' => 1,
                     'FooterWidget3' => 1,
                     'FooterWidget4' => 1,
                ),
            ),
        ),
    )
);







