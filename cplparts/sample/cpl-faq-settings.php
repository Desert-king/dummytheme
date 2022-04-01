<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-faq',   
           'type'  => 'text',
           'title' => 'Cpl FAQ Settings',
) );

Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'faq-page-title',
    'type' => 'text',
    'title' => 'Page Title',
    'placeholder' => esc_html__( 'Add your FAQ page title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'faq-section-one-title',
    'type' => 'text',
    'title' => 'First Section Title',
    'placeholder' => esc_html__( 'Add your first section title here', 'Add your first section title here' ),
) );

Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'faq-section-two-title',
    'type' => 'text',
    'title' => 'Second Section Title',
    'placeholder' => esc_html__( 'Add your second section title here', 'Add your first section sub-title here' ),
) );

Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'faq-section-three-title',
    'type' => 'text',
    'title' => 'Third Section Title',
    'placeholder' => esc_html__( 'Add your third section title here', 'Add your second section title here' ),
) );



Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'contact-link',
    'title' => 'Contact Page Link',
    'type' => 'text','placeholder' => esc_html__( 'Add your contact page link here', 'Add your second section title here' ),
) );



?>