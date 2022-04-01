<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-terms',   
           'type'  => 'text',
           'title' => 'Cpl Terms & Conditions Settings',
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-page-title',
    'type' => 'text',
    'title' => 'Page Title',
    'placeholder' => esc_html__( 'Add your Terms & Conditions page title here', 'Add your Terms & Conditions page title here' ),
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-page-subtitle',
    'type' => 'text',
    'title' => 'Page Subtitle',
    'placeholder' => esc_html__( 'Add your Terms & Conditions page subtitle here', 'Add your Terms & Conditions page subtitle here' ),
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-description',
    'type' => 'editor',
    'title' => 'Description',
    'subtitle'         => esc_html__('Add your page description here', 'your-textdomain-here'),
    'placeholder' => esc_html__( 'Add your page description here', 'Add your page description here' ),
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-section-one-title',
    'type' => 'text',
    'title' => 'First Section Title',
    'placeholder' => esc_html__( 'Add your first section title here', 'Add your first section content here' ),
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-section-one-content',
    'type' => 'editor',
    'title' => 'First Section Content',
    'subtitle'         => esc_html__('Add your first section content here', 'your-textdomain-here'),
    'placeholder' => esc_html__( 'Add your first section content here', 'Add your first section content here' ),
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-section-two-title',
    'type' => 'text',
    'title' => 'Second Section Title',
    'placeholder' => esc_html__( 'Add your second section title here', 'Add your second section title here' ),
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-section-two-content',
    'type'             => 'editor',
    'title' => 'Second Section Content',
    'subtitle'         => esc_html__('Add your second section content here', 'your-textdomain-here'),
    'placeholder' => esc_html__( 'Add your second section content here', 'Add your second section content here' ),
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
) );

Redux::set_field( $opt_name, 'cpl-terms', array( 
    'id' => 'terms-author-signature',
    'type'     => 'media', 
    'url'      => true,
    'title' => 'Signature',
    'placeholder' => esc_html__( 'Add your signature here', 'Add your first section content here' ),
    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
    'default'  => array(
        'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    ),
) );


// Redux::set_field( $opt_name, 'cpl-terms', array( 
//     'id' => 'terms-contact-link',
//     'title' => 'Contact Page Link',
//     'type' => 'text','placeholder' => esc_html__( 'Add your contact page link here', 'Add your second section title here' ),
// ) );



?>