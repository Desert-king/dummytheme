<?php
Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-pro-brand-new',   
           'type'  => 'text',
           
) );

Redux::setSection( $opt_name,  array(
        'id'    => 'cpl-pro-brand-new',   
        'type'  => 'text',
        'title' => 'Cpl Product Brand Settings',
        'fields' => array(
            array(
                'id'             => 'cpl-pro-brand-section-fields-new',
                'type'           => 'repeater',
                'title'          => esc_html__( 'Product Brand Section', 'your-textdomain-here' ),
                'subtitle'       => esc_html__( 'Enter some question and answer here', 'your-textdomain-here' ),
                'desc'           => esc_html__( '', 'your-textdomain-here' ),
                'bind_title'     => 'false',
                'fields'         => array(
                    
                    array(
                        'id'          => 'cpl-pro-brand-title-new',
                        'type'        => 'text',
                        'title'       => esc_html__('Brand Title', 'your-textdomain-here'), 
                        'placeholder' => esc_html__( 'Add your brand title here', 'your-textdomain-here' ),
                    ),
                    array(
                        'id' => 'cpl-pro-brand-image-new',
                        'type' => 'media', 
                        'url'      => true,
                        'title'    => esc_html__('Brand Logo', 'your-textdomain-here'),
                        'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                        'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                        'default'  => array(
                        'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                        ),
                    ),
                )
            ),
        )
    ) 
);

?>