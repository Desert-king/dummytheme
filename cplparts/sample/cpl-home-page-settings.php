<?php
Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-pro-brand-new',   
           'type'  => 'text',
           
) );


Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'       => 'bannar-image',
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Upload your home page bannar', 'your-textdomain-here'),
    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
    // 'default'  => array(
    //     'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    // ),
));

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array( 
    'id' => 'bannar-title',
    'type' => 'text',
    'title' => 'Bannar Title',
    'placeholder' => esc_html__( 'Add your Home page bannar title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'               => 'bannar-subtitle',
    'type'             => 'editor',
    'title'            => esc_html__('Add your Home page bannar subtitle here', 'your-textdomain-here'), 
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
), );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'       => 'home-page-short-bannar-left',
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Upload your home page short bannar of left side', 'your-textdomain-here'),
    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
    // 'default'  => array(
    //     'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    // ),
));

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array( 
    'id' => 'bannar-left-title',
    'type' => 'text',
    'title' => 'Left Bannar Title',
    'placeholder' => esc_html__( 'Add your Home page bannar of left side title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'               => 'bannar-left-subtitle',
    'type'             => 'editor',
    'title'            => esc_html__('Add your Home page bannar of left side title here', 'your-textdomain-here'), 
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
), );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'       => 'home-page-short-bannar-right',
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Upload your home page short bannar of right side', 'your-textdomain-here'),
    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
    // 'default'  => array(
    //     'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    // ),
));

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array( 
    'id' => 'bannar-right-title',
    'type' => 'text',
    'title' => 'Right Bannar Title',
    'placeholder' => esc_html__( 'Add your Home page bannar of right side title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'               => 'bannar-right-subtitle',
    'type'             => 'editor',
    'title'            => esc_html__('Add your Home page bannar of right side title here', 'your-textdomain-here'), 
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
), );

Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand-new',   
    'type'  => 'text',
    'title' => 'Home Page Service Settings',
    'fields' => array(
        array(
            'id'             => 'home-counter-fields',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Service Counter Section', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( 'Add your counters here', 'your-textdomain-here' ),
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
                    'id'       => 'home-service-image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => esc_html__('Upload your service image here', 'your-textdomain-here'),
                    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                    // 'default'  => array(
                    //     'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                    // ),
                    ),
                array(
                    'id'          => 'home-service-title',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Enter a title', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Enter a service title here', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'home-service-detail',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Add your service detail', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Add your service detail here', 'your-textdomain-here' ),
                ),
               
            )
        )
    )
),);


Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand-new',   
    'type'  => 'text',
    'title' => 'Cpl Home Page Settings',
    'fields' => array(
        array(
            'id'             => 'cpl-home-brand-section-fields-new',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Product Brand Section', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( 'Enter some brand details here', 'your-textdomain-here' ),
            'desc'           => esc_html__( '', 'your-textdomain-here' ),
            'bind_title'     => 'false',
            'fields'         => array(
               
                        
                        array(
                            'id'          => 'cpl-home-brand-title-new',
                            'type'        => 'text',
                            'title'       => esc_html__('Brand Title', 'your-textdomain-here'), 
                            'placeholder' => esc_html__( 'Add your brand title here', 'your-textdomain-here' ),
                        ),
                        array(
                            'id' => 'cpl-home-brand-image-new',
                            'type' => 'media', 
                            'url'      => true,
                            'title'    => esc_html__('Brand Logo', 'your-textdomain-here'),
                            'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                            'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                            // 'default'  => array(
                            // 'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                            // ),
                        ),
            )
        )
    )
),);



?>