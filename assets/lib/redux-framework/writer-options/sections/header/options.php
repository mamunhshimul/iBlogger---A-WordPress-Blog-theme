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
        'title'      => esc_html__( 'Header Options', 'your-textdomain-here' ),
        'id'         => 'header-option-00',
         'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'header-fluid-top',
                'type'     => 'select',
                'title'    => esc_html__( 'Header Width', 'your-textdomain-here' ),

                // Must provide key => value pairs for select options.
                'options'  => array(
                    '1' => 'Full Width',
                    '2' => 'Contained',
                ),
                'default'  => '2',
            ),
            array(
                'id'       => 'writer-header-logo-light',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Upload Your Logo' ),
             ),
            array(
                'id'       => 'writer-main-menu',
                'type'     => 'select',
                'data'     => 'menus',
                'title'    => esc_html__( 'Menus', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Select Your Header Menu', 'your-textdomain-here' ),
                'args'  => array(
                    'taxonomy'      => 'nav_menu',
                )
            ),
            array(
                'id'          => 'ddesdzbnujknadd',
                'type'        => 'typography',
                'title'       => __('Design Your Menu items', 'redux-framework-demo'),
                'google'      => false,
                'font-backup' => false,
                'text-align' => false,
                'font-family' => false,
                'font-style' => false,
                'font-weight' => false,
                'line-height' => false,
                'color'       => true,
                'output'      => array('.writerPro__toprnav ul li a'),
                'units'       =>'px',
                'subtitle'    => __('Typography, color, font', 'redux-framework-demo'),
                'default'     => array(
                    'font-size'   => '17px',
                    'color'       => '#333',
                ),
            ),
            array(
                'id'       => 'writer_header_op',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Header Asserts', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'No validation can be done on this field type', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'your-textdomain-here' ),

                // Must provide key => value pairs for multi checkbox options.
                'options'  => array(
                    '1' => 'Search',
                    '2' => 'User Profile',
                    '3' => 'Social Profile',
                ),
                'default'  => array(
                    '1' => '1',
                    '2' => '0',
                    '3' => '0',
                ),
            ),
            array(
                'id'          => 'ddadd',
                'type'        => 'typography',
                'title'       => __('Design Your assets', 'redux-framework-demo'),
                'google'      => false,
                'font-backup' => false,
                'text-align' => false,
                'font-family' => false,
                'font-style' => false,
                'font-weight' => false,
                'line-height' => false,
                'color'       => true,
                'output'      => array('.header-assets span'),
                'units'       =>'px',
                'subtitle'    => __('Typography, color, font', 'redux-framework-demo'),
                'default'     => array(
                    'font-size'   => '17px',
                    'color'       => '#333',
                ),
            ),
//            array(
//                'id'       => 'header-social-profile-id',
//                'type'     => 'select',
//                'multi'    => true,
//                'title'    => esc_html__( 'social-profile', 'your-textdomain-here' ),
//                'required' => array( 'writer-header-elements', '=', 'header-social-profile' ),
//                'options'  => array(
//                    '1' => 'facebook',
//                    '2' => 'instagram',
//                    '3' => 'linkedin',
//                ),
//            ),
        ),
    )
);

//global $writerop;
//
//if( $writerop['writer-header-elements'] == ['1'] ){
//
//echo '<script type="text/javascript">';
//echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
//echo '</script>';
//}




//echo '<script type="text/javascript">';
//echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
//echo '</script>';
