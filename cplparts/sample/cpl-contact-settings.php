<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-contact',   
           'type'  => 'text',
           'title' => 'Cpl Contact Settings',
) );



Redux::set_field( $opt_name, 'cpl-contact', array( 
    'id' => 'cpl-contact-map',
    'type' => 'text',
    'data' => array(
        'box1'
    )
) );
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title'            => esc_html__( 'Basic Fields', 'your-textdomain-here' ),
// 		'id'               => 'basic',
// 		'desc'             => esc_html__( 'These are really basic fields!', 'your-textdomain-here' ),
// 		'customizer_width' => '400px',
// 		'icon'             => 'el el-home',
// 	)
// );

?>