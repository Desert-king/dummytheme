<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-about',   
           'type'  => 'text',
           'title' => 'Cpl About Settings',
) );

Redux::set_field( $opt_name, 'cpl-about', array(
    'id'       => 'abou-image',
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Media w/ URL', 'your-textdomain-here'),
    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
    'default'  => array(
        'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    ),
));


Redux::set_field( $opt_name, 'cpl-about', array( 
    'id' => 'about-title-one',
    'type' => 'text',
    'placeholder' => esc_html__( 'Add your first section title here', 'Add your first section title here' ),
) );

Redux::set_field( $opt_name, 'cpl-about', array( 
    'id' => 'about-sub-title-one',
    'type' => 'text',
    'placeholder' => esc_html__( 'Add your first section sub-title here', 'Add your first section sub-title here' ),
) );

Redux::set_field( $opt_name, 'cpl-about', array( 
    'id' => 'about-title-two',
    'type' => 'text',
    'placeholder' => esc_html__( 'Add your second section title here', 'Add your second section title here' ),
) );

Redux::set_field( $opt_name, 'cpl-about', array( 
    'id' => 'about-sub-title-two',
    'type' => 'text',
    'placeholder' => esc_html__( 'Add your second section sub-title here', 'Add your second section sub-title here' ),
) );

?>