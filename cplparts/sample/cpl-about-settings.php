<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-about',   
           'type'  => 'text',
        //    'title' => 'Cpl About Settings New',
           
) );

Redux::set_field( $opt_name, 'cpl-about', array(
    'id'       => 'about-image',
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
    'id' => 'about-article-title',
    'type' => 'text',
    'placeholder' => esc_html__( 'Add your about article title here', 'your-textdomain-here' ),
) );
Redux::set_field( $opt_name, 'cpl-about', array(
    'id'               => 'about-article-content',
    'type'             => 'editor',
    'title'            => esc_html__('Editor Text', 'your-textdomain-here'), 
    'subtitle'         => esc_html__('Subtitle text would go here.', 'your-textdomain-here'),
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
) );
Redux::set_field( $opt_name, 'cpl-about', array( 
    'id' => 'about-content-author',
    'type' => 'text',
    'placeholder' => esc_html__( 'Add your about article author name here', 'Add your first section sub-title here' ),
) );
Redux::set_field( $opt_name, 'cpl-about', array(
    'id'       => 'about-content-author-sign',
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Media w/ URL', 'your-textdomain-here'),
    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
    // 'default'  => array(
    //     'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    // ),
));
Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-about',   
    'type'  => 'text',
    'title' => 'Cpl About Settings',
    'fields' => array(
        array(
            'id'             => 'new-counter-fields',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Counter Section', 'your-textdomain-here' ),
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
                    'id'          => 'new-counter-number',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Enter a number', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Enter a number', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'new-counter-title',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Add your title here', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Add your title here', 'your-textdomain-here' ),
                ),
               
            )
            ),
            array(
                'id'             => 'new-repeater-field-id',
                'type'           => 'repeater',
                'title'          => esc_html__( 'Team Section', 'your-textdomain-here' ),
                'subtitle'       => esc_html__( 'Insert your team members info here', 'your-textdomain-here' ),
                'desc'           => esc_html__( '', 'your-textdomain-here' ),
                'bind_title'     => 'false',
                // 'group_values' => true, // Group all fields below within the repeater ID
                //'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
                //'bind_title'   => '', // Bind the repeater block title to this field ID
                //'static'       => 2, // Set the number of repeater blocks to be output
                //'limit'        => 2, // Limit the number of repeater blocks a user can create
                // 'sortable'     => false, // Allow the users to sort the repeater blocks or not
                'fields'         => array(
                    
                    array(
                            'id'       => 'new-image_field',
                            'type'     => 'media', 
                            'url'      => true,
                            'title'    => esc_html__('Photo of Team Member', 'your-textdomain-here'),
                            'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                            'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                            'default'  => array(
                                'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                            ),
                        ),
                    array(
                        'id'          => 'new-user_name',
                        'type'        => 'text',
                        'title'    => esc_html__('Name of Team Member', 'your-textdomain-here'),
                        'placeholder' => esc_html__( 'Name', 'your-textdomain-here' ),
                    ),
                    array(
                        'id'          => 'new-designation',
                        'type'        => 'text',
                        'title'    => esc_html__('Desination of Team Member', 'your-textdomain-here'),
                        'placeholder' => esc_html__( 'Designation', 'your-textdomain-here' ),
                    ),
                   
                )
                ),
                array(
                    'id'             => 'new-testimonial-fields',
                    'type'           => 'repeater',
                    'title'          => esc_html__( 'Testimonial section', 'your-textdomain-here' ),
                    'subtitle'       => esc_html__( 'Add info of testimonial here', 'your-textdomain-here' ),
                    'desc'           => esc_html__( '', 'your-textdomain-here' ),
                    'bind_title'     => 'false',
                    'fields'         => array(
                        
                        array(
                                'id'       => 'new-user-image',
                                'type'     => 'media', 
                                'url'      => true,
                                'title'    => esc_html__('User photo', 'your-textdomain-here'),
                                'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                                'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                                'default'  => array(
                                    'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
                                ),
                            ),
                        array(
                            'id'          => 'new-user-feedback',
                            'type'        => 'textarea',
                            'title'    => esc_html__( 'User Feedback', 'your-textdomain-here' ),
                            'placeholder' => esc_html__( 'Feedback', 'your-textdomain-here' ),
                        ),
                        array(
                            'id'          => 'new-user-name',
                            'type'        => 'text',
                            'title'    => esc_html__( 'User Name', 'your-textdomain-here' ),
                            'placeholder' => esc_html__( 'Name', 'your-textdomain-here' ),
                        ),
                       
                    )
                )

    )
) );





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