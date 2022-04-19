<?php
Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-pro-brand',   
           'type'  => 'text',
        //    'title' => 'Cpl About Settings New',
           
) );

Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand',   
    'type'  => 'text',
    'title' => 'Cpl Brands Settings',
    'fields' => array(
        array(
            'id'             => 'cpl-pro-brand-section-fields',
            'type'           => 'repeater',
            'title'          => esc_html__( 'First FAQ section', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( 'Enter some question and answer here', 'your-textdomain-here' ),
            'desc'           => esc_html__( '', 'your-textdomain-here' ),
            'bind_title'     => 'false',
            //'group_values' => true, // Group all fields below within the repeater ID
            //'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
            //'bind_title'   => '', // Bind the repeater block title to this field ID
            //'static'       => 2, // Set the number of repeater blocks to be output
            //'limit'        => 2, // Limit the number of repeater blocks a user can create
            //'sortable'     => false, // Allow the users to sort the repeater blocks or not
            'fields'         => array(
                
                array(
                    'id'          => 'cpl-pro-brand-title',
                    'type'        => 'text',
                    'title'       => esc_html__('Asked Question', 'your-textdomain-here'), 
                    'placeholder' => esc_html__( 'Add your question here', 'your-textdomain-here' ),
                ),
                array(
                    'id' => 'cpl-pro-brand-image',
                    'type' => 'media', 
                    'url'      => true,
                    'title'    => esc_html__('User photo', 'your-textdomain-here'),
                    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                    'default'  => array(
                    'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                    ),
                ),
                
               
               
            )
            ),
           
                
    )
) );

?>