<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-about',   
           'type'  => 'text',
           'title' => 'Cpl About Settings',
) );



Redux::set_field( $opt_name, 'cpl-about', array( 
    'id' => 'cpl-contact-map',
    'type' => 'text',
    'data' => array(
        'box1' => 'Add your map location here',
        // 'map-latitude' => 'Add your map latitude here',
        // 'map-longitude' => 'Add your map longitude here',
    )
) );

// Redux::set_field( $opt_name, 'cpl-contact', array(
//     'id'               => 'cpl-editor-text',
//     'type'             => 'editor',
//     'title'            => esc_html__('Editor Text', 'your-textdomain-here'), 
//     'subtitle'         => esc_html__('Subtitle text would go here.', 'your-textdomain-here'),
//     'default'          => '',
//     'args'   => array(
//         'teeny'            => true,
//         'textarea_rows'    => 10
//     )
// ) );




?>