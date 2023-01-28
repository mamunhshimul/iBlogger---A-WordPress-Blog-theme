<?php

/**
 * Redux Framework select config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__('Select', 'your-textdomain-here'),
        'id'         => 'writerdds',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'writer_modal_1',
                'type'     => 'switch',
                'title'    => esc_html__('Enable Popup'),
                'default'  => false,
                'on'       => 'Enabled',
                'off'      => 'Disabled',
            ), 
            array(
                'id'               => 'writer_modal_content_1',
                'type'             => 'editor',
                'required' => array( 'writer_modal_1', '=', true ),
                'title'            => esc_html__('Editor Text', 'your-textdomain-here'),
                'subtitle'         => esc_html__('Subtitle text would go here.', 'your-textdomain-here'),
                'default'          => 'Powered by Redux.',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            )
        ),
    )
);




 


