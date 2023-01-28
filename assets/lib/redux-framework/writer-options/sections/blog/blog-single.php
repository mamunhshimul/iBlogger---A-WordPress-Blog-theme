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
        'id'         => 'writer-blog-ddddddddd',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'writer_blog-single-layout',
                'type'     => 'sorter',
                'title'    => 'Layout Manager',
                'subtitle' => 'Enable or disable and you can change elements ordering by drag and drop',
                'desc'     => 'Organize how you want the layout to appear on the homepage',
                'compiler' => 'true',
                'options'  => array(
                    'disabled' => array(
                    ),
                    'enabled'  => array(
                        'Post_Title' => 'Post_Title',
                        'post_Meta'     => 'post_Meta',
                        'Featured_Images' => 'Featured_Images',
                        'Content'   => 'Content',
                        'Pagination'   => 'Pagination',
                        'Comment_Box'   => 'Comment_Box',
                    ),
                ),
            ),
            array(
                'id'       => 'writer_post_sidebar_switcher',
                'type'     => 'switch',
                'title'    => esc_html__( 'Enable/disable sidebar for blog page' ),
                'default'  => false,
                'on'       => 'Enabled',
                'off'      => 'Disabled',
            ),
            array(
                'id'       => 'writer_post_sidebar_align',
                'type'     => 'switch',
                'required' => array( 'writer_blog_sidebar_switcher', '=', true ),
                'title'    => esc_html__( 'Default left', 'your-textdomain-here' ),
                'default'  => false,
                'on'       => 'right',
                'off'      => 'left',
            ),
            array(
                'id'       => 'opt-dd-dddd',
                'type'     => 'color',
                'title'    => esc_html__( 'Primary color', 'writerPro' ),
                'subtitle' => esc_html__( 'Pick Your site primary color', 'writerPro' ),
                'default'  => '#0a0a0a0f',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => 'aside.widget_block',
                ),
            ),
        ),
    )
);


