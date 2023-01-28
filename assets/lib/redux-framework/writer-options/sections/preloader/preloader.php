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
        'id'         => 'writerddblog-ddddddddd',
        'subsection' => true,
        'fields'     => array(  
            array(
                'id'       => 'writer_preloader',
                'type'     => 'switch',
                'title'    => esc_html__( 'Disable Preloader' ),
                'default'  => true,
                'on'       => 'Enabled',
                'off'      => 'Disabled',
            ), 
            array(
                'id'       => 'writer_custom_preloader',
                'type'     => 'media',
                'required' => array( 'writer_preloader', '=', true ),
                'title'    => esc_html__( 'Logo', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Upload Your custom preloader' ),
             ),
        ),
    )
);


