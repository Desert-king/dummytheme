<?php
Redux::setSection( $opt_name,  array(
    'title' => esc_html__('About Page Counter', 'your-textdomain-here' ),
    'icon' => 'el-icon-thumbs-up',
    'fields' => array(
        array(
            'id'             => 'counter-fields',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Title', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( '', 'your-textdomain-here' ),
            'desc'           => esc_html__( '', 'your-textdomain-here' ),
            //'group_values' => true, // Group all fields below within the repeater ID
            //'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
            //'bind_title'   => '', // Bind the repeater block title to this field ID
            //'static'       => 2, // Set the number of repeater blocks to be output
            //'limit'        => 2, // Limit the number of repeater blocks a user can create
            //'sortable'     => false, // Allow the users to sort the repeater blocks or not
            'fields'         => array(
                array(
                    'id'          => 'counter-number',
                    'type'        => 'text',
                    'placeholder' => esc_html__( 'Enter a umber', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'counter-title',
                    'type'        => 'text',
                    'placeholder' => esc_html__( 'Add your title here', 'your-textdomain-here' ),
                ),
               
            )
        )
    )
) );

?>