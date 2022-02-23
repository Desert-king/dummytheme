use  Carbon_Fields \ Container ;
use  Carbon_Fields \ Field ;

Container::make ( 'post_meta' ,  'Custom Data' )
    ->show_on_post_type ( array ( 'page' ,  'my_custom_post_type' ,  'post' ) ) 
	->add_fields ( array ( 
		Field::make ( 'text' ,  'my_text_1', 'Text 1') ,
		Field::make ( 'textarea' ,  'my_text_2', 'Text 2')
	) );