<?php

Redux::set_section( 
	$opt_name,
       array(
           'id'    => 'cpl-redux',   
           'type'  => 'text',
           'title' => 'Cpl Redux Settings',
) );



Redux::set_field( $opt_name, 'fields',  array(
    array(
        'id'            => 'cpl-redux-import-export',
        'type'          => 'import_export',
        'title'         => 'Redux Setting Import Export',
        'subtitle'      => 'Save and restore your Redux options',
        'full_width'    => false,
    )
),
);





?>