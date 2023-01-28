<?php
/**
 * Redux Framework select config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Select', 'your-textdomain-here' ),
        'id'         => 'writer-blog-23152',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'writer_blog_style',
                'type'     => 'select',
                'title'    => esc_html__( 'Select Option', 'your-textdomain-here' ),
                // Must provide key => value pairs for select options.
                'options'  => array(
                    '1' => 'Grid Style 1',
                    '2' => 'List Style 1',
                ),
                'default'  => '1',
            ),
            array(
                'id'       => 'writer_blog_option',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Enable/disable post option', 'your-textdomain-here' ),

                // Must provide key => value pairs for multi checkbox options.
                'options'  => array(
                    '1' => 'Featured Images',
                    '2' => 'Title',
                    '3' => 'Content',
                    '4' => 'Author',
                    '5' => 'Comment',
                    '6' => 'Date',
                    '7' => 'Post View',
                ),
                'default'  => array(
                    '1' => '1',
                    '2' => '1',
                    '3' => '1',
                    '4' => '1',
                    '5' => '1',
                    '6' => '0',
                ),
            ),
            array(
                'id'       => 'writer_blog_sidebar_switcher',
                'type'     => 'switch',
                'title'    => esc_html__( 'Enable/disable sidebar for blog page' ),
                 'default'  => false,
                'on'       => 'Enabled',
                'off'      => 'Disabled',
            ),
            array(
                'id'       => 'writer_blog_sidebar_align',
                'type'     => 'switch',
                'required' => array( 'writer_blog_sidebar_switcher', '=', true ),
                'title'    => esc_html__( 'Default left', 'your-textdomain-here' ),
                  'default'  => false,
                'on'       => 'right',
                'off'      => 'left',
            ),
        ),
    )
);


