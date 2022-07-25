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
    'title'    => esc_html__('Upload your home page banner', 'your-textdomain-here'),
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
    'placeholder' => esc_html__( 'Add your Home page banner title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'               => 'bannar-subtitle',
    'type'             => 'editor',
    'title'            => esc_html__('Add your Home page banner subtitle here', 'your-textdomain-here'), 
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
            'id'             => 'cpl-home-attention-section',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Product Attention Section', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( 'Enter products of attention or offer here', 'your-textdomain-here' ),
            'desc'           => esc_html__( '', 'your-textdomain-here' ),
            'bind_title'     => 'false',
            'fields'         => array(
               
                        
                        array(
                            'id'          => 'attention-section-title',
                            'type'        => 'text',
                            'title'       => esc_html__('Product Attention Section Title', 'your-textdomain-here'), 
                            'placeholder' => esc_html__( 'Add your products of attention or offer title here', 'your-textdomain-here' ),
                        ),
                        array(
                            'id' => 'attention-section-discount',
                            'type'        => 'text',
                            'title'       => esc_html__('Product Attention Section Discount Percentage', 'your-textdomain-here'), 
                            'placeholder' => esc_html__( 'Add your products of attention or offer section discount percentage here', 'your-textdomain-here' ),
                        ),
                        array(
                            'id' => 'attention-section-subtitle',
                            'type'        => 'text',
                            'title'       => esc_html__('Product Attention Section Subtitle', 'your-textdomain-here'), 
                            'placeholder' => esc_html__( 'Add your products of attention or offer subtitle here', 'your-textdomain-here' ),
                        ),
                        array(
                            'id' => 'attention-section-product-category',
                            'type'        => 'text',
                            'title'       => esc_html__('Product Attention Section Product Category', 'your-textdomain-here'), 
                            'placeholder' => esc_html__( 'Add your products category of attention or offer here', 'your-textdomain-here' ),
                        ),
            )
        )
    )
),);

Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand-new',   
    'type'  => 'text',
    'title' => 'Home Page Product Settings',
    'fields' => array(
        array(
            'id'             => 'home-product-fields',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Product Viewing Section', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( 'Add your product into here', 'your-textdomain-here' ),
            'desc'           => esc_html__( '', 'your-textdomain-here' ),
            'bind_title'     => 'false',
            'fields'         => array(
                array(
                    'id'       => 'home-product-banner-image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => esc_html__('Upload your product banner image here', 'your-textdomain-here'),
                    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                    ),
                // array(
                //     'id'          => 'home-service-title',
                //     'type'        => 'text',
                //     'title'          => esc_html__( 'Enter a title', 'your-textdomain-here' ),
                //     'placeholder' => esc_html__( 'Enter a service title here', 'your-textdomain-here' ),
                // ),
                array( 
                    'id' => 'shop-link',
                    'title' => 'Shop Page Link',
                    'type' => 'text','placeholder' => esc_html__( 'Add your shop page link here', 'Add your second section title here' ),
                ),
                array(
                    'id'          => 'home-product-category-one',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Enter first product category ', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Enter first product category here', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'home-product-category-two',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Enter second product category ', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Enter second product category here', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'home-product-category-three',
                    'type'        => 'text',
                    'title'          => esc_html__( 'Enter third product category ', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'Enter third product category here', 'your-textdomain-here' ),
                ),
                
               
                )
           
        )
    )
),);


Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'       => 'home-page-short-bannar-left',
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Upload your home page short banner of left side', 'your-textdomain-here'),
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
    'placeholder' => esc_html__( 'Add your Home page banner of left side title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'               => 'bannar-left-subtitle',
    'type'             => 'editor',
    'title'            => esc_html__('Add your Home page banner of left side title here', 'your-textdomain-here'), 
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
    'title'    => esc_html__('Upload your home page short banner of right side', 'your-textdomain-here'),
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
    'placeholder' => esc_html__( 'Add your Home page banner of right side title here', 'your-textdomain-here' ),
) );

Redux::set_field( $opt_name, 'cpl-pro-brand-new', array(
    'id'               => 'bannar-right-subtitle',
    'type'             => 'editor',
    'title'            => esc_html__('Add your Home page banner of right side title here', 'your-textdomain-here'), 
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
), );




Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand-new',   
    'type'  => 'text',
    'title' => 'Cpl Home Page Settings',
    'fields' => array(
       
        array(
            'id'          => 'cpl-home-tag-one',
            'type'        => 'text',
            'title'       => esc_html__('First tag name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your first tag name here', 'your-textdomain-here' ),
        ),
        array(
            'id'          => 'cpl-home-tag-two',
            'type'        => 'text',
            'title'       => esc_html__('Second Tag name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your second tag name here', 'your-textdomain-here' ),
        ),
        array(
            'id'          => 'cpl-home-tag-three',
            'type'        => 'text',
            'title'       => esc_html__('Third Tag name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your third tag name here', 'your-textdomain-here' ),
        ),
            
    )
),);

Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand-new',   
    'type'  => 'text',
    'title' => 'Cpl Home Page Settings',
    'fields' => array(
        array(
            'id'          => 'cpl-home-post-type-one',
            'type'        => 'text',
            'title'       => esc_html__('Add a custom post type name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add a custom post type name here', 'your-textdomain-here' ),
        ),
       
        array(
            'id'          => 'cpl-home-post-type-tag-one',
            'type'        => 'text',
            'title'       => esc_html__('First tag of selected custom post type name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your first tag of selected custom post type name', 'your-textdomain-here' ),
        ),
        array(
            'id'          => 'cpl-home-post-type-tag-two',
            'type'        => 'text',
            'title'       => esc_html__('Second tag of selected custom post type name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your second tag of selected custom post type name', 'your-textdomain-here' ),
        ),
        array(
            'id'          => 'cpl-home-post-type-tag-three',
            'type'        => 'text',
            'title'       => esc_html__('Third tag of selected custom post type name', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your third tag of selected custom post type name', 'your-textdomain-here' ),
        ),
            
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




Redux::setSection( $opt_name,  array(
    'id'    => 'cpl-pro-brand-new',   
    'type'  => 'text',
    'title' => 'Cpl Home Page Settings',
    'fields' => array(
        
        array(
            'id'          => 'last-section-product-category-one',
            'type'        => 'text',
            'title'       => esc_html__('First Product Category of Last Section', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your first product category of last section here', 'your-textdomain-here' ),
        ),
        array(
            'id' => 'last-section-product-category-two',
            'type'        => 'text',
            'title'       => esc_html__('Second Product Category of Last Section', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your second product category of last section here', 'your-textdomain-here' ),
        ),
        array(
            'id' => 'last-section-product-category-three',
            'type'        => 'text',
            'title'       => esc_html__('Third Product Category of Last Section', 'your-textdomain-here'), 
            'placeholder' => esc_html__( 'Add your third product category of last section here', 'your-textdomain-here' ),
        ),
       
    )
),);



?>