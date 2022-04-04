<?php
Redux::setSection( $opt_name,  array(
    'title' => esc_html__('About Page Professional Team Test', 'your-textdomain-here' ),
    'icon' => 'el-icon-thumbs-up',
    'fields' => array(
        array(
            'id'             => 'repeater-field-id-one',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Title', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( '', 'your-textdomain-here' ),
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
                        'id'       => 'title_field-one',
                        'type'     => 'media', 
                        'url'      => true,
                        'title'    => esc_html__('Media w/ URL', 'your-textdomain-here'),
                        'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                        'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                        'default'  => array(
                            'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                        ),
                    ),
                array(
                    'id'          => 'employee_name-one',
                    'type'        => 'text',
                    'placeholder' => esc_html__( 'Name', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'select_field-one',
                    'type'        => 'text',
                    'placeholder' => esc_html__( 'Designation', 'your-textdomain-here' ),
                ),
               
            )
        )
    )
) );

?>