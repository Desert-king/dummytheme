<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-404',   
           'type'  => 'text',
           'title' => 'Cpl 404 Settings',
) );

Redux::set_field( $opt_name, 'cpl-404', array( 
    'id' => 'cpl-404-warning',
    'type' => 'text',
    'title'=> esc_html__('Page Name', 'your-textdomain-here'),
    'placeholder' => esc_html__( 'Add page name or 404 warning here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-404', array(
    'id'          => 'cpl-404-title',
    'type'        => 'text',
    'title'       => esc_html__('Title', 'your-textdomain-here'), 
    'placeholder' => esc_html__( 'Add a title', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-404', array(
    'id'          => 'cpl-404-first-content',
    'type'        => 'textarea',
    'title'    => esc_html__( 'First Content', 'your-textdomain-here' ),
    'placeholder' => esc_html__( 'Add your first contents here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-404', array(
    'id'          => 'cpl-404-second-content',
    'type'        => 'textarea',
    'title'    => esc_html__( 'Second Content', 'your-textdomain-here' ),
    'placeholder' => esc_html__( 'Add your second contents here', 'your-textdomain-here' ),
) );


?>