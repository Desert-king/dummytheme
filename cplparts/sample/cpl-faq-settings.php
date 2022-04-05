<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-faq',   
           'type'  => 'text',
        //    'title' => 'Cpl FAQ Settings',
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
    'title' => 'First FAQ Section Title',
    'placeholder' => esc_html__( 'Add your first section title here', 'Add your first section title here' ),
) );

Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'faq-section-two-title',
    'type' => 'text',
    'title' => 'Second FAQ Section Title',
    'placeholder' => esc_html__( 'Add your second section title here', 'Add your first section sub-title here' ),
) );

Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'faq-section-three-title',
    'type' => 'text',
    'title' => 'Third FAQ Section Title',
    'placeholder' => esc_html__( 'Add your third section title here', 'Add your second section title here' ),
) );

Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-faq',   
    'type'  => 'text',
    'title' => 'Cpl FAQ Settings',
    'fields' => array(
        array(
            'id'             => 'new-faq-first-section-fields',
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
                    'id'          => 'new-faq-first-section-title',
                    'type'        => 'text',
                    'title'       => esc_html__('Asked Question', 'your-textdomain-here'), 
                    'placeholder' => esc_html__( 'Title', 'your-textdomain-here' ),
                ),
                array(
                    'id'               => 'new-faq-first-section-content',
                    'type'             => 'editor',
                    'title'            => esc_html__('Required Answer', 'your-textdomain-here'), 
                    'default'          => '',
                    'args'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 10
                    )
                ),
                
               
               
            )
            ),
            array(
                'id'             => 'new-faq-second-section-fields',
                'type'           => 'repeater',
                'title'          => esc_html__( 'Second FAQ section', 'your-textdomain-here' ),
                'subtitle'       => esc_html__( 'Enter some question and answer here', 'your-textdomain-here' ),
                'desc'           => esc_html__( '', 'your-textdomain-here' ),
                'bind_title'     => 'false',
                'fields'         => array(
                    
                    array(
                        'id'          => 'new-faq-second-section-title',
                        'type'        => 'text',
                        'title'       => esc_html__('Asked Question', 'your-textdomain-here'), 
                        'placeholder' => esc_html__( 'Title', 'your-textdomain-here' ),
                    ),
                    array(
                        'id'               => 'new-faq-second-section-content',
                        'type'             => 'editor',
                        'title'            => esc_html__('Required Answer', 'your-textdomain-here'), 
                        'default'          => '',
                        'args'   => array(
                            'teeny'            => true,
                            'textarea_rows'    => 10
                        )
                    ),
                    
                   
                   
                )
                ),
                array(
                    'id'             => 'new-faq-third-section-fields',
                    'type'           => 'repeater',
                    'title'          => esc_html__( 'Third FAQ section', 'your-textdomain-here' ),
                    'subtitle'       => esc_html__( 'Enter some question and answer here', 'your-textdomain-here' ),
                    'desc'           => esc_html__( '', 'your-textdomain-here' ),
                    'bind_title'     => 'false',
                    'fields'         => array(
                        
                        array(
                            'id'          => 'new-faq-third-section-title',
                            'type'        => 'text',
                            'title'       => esc_html__('Asked Question', 'your-textdomain-here'), 
                            'placeholder' => esc_html__( 'Title', 'your-textdomain-here' ),
                        ),
                        array(
                            'id'               => 'new-faq-third-section-content',
                            'type'             => 'editor',
                            'title'            => esc_html__('Required Answer', 'your-textdomain-here'), 
                            'default'          => '',
                            'args'   => array(
                                'teeny'            => true,
                                'textarea_rows'    => 10
                            )
                        ),
                        
                       
                       
                    )
                )
    )
) );


 
Redux::set_field( $opt_name, 'cpl-faq', array( 
    'id' => 'contact-link',
    'title' => 'Contact Page Link',
    'type' => 'text','placeholder' => esc_html__( 'Add your contact page link here', 'Add your second section title here' ),
) );




?>