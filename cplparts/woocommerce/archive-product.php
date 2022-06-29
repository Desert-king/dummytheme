<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */



defined( 'ABSPATH' ) || exit;
//require_once (dirname(__FILE__) . '../../template-parts/sidebar/shop-page-sidebar.php');
//include '../template-parts/sidebar/shop-page-sidebar.php';

get_header( 'shop' );


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked  - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );


?>

<!-- <header class="woocommerce-products-header"> -->
	<?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<!-- <h1 class="woocommerce-products-header__title page-title"> -->
		<?php //woocommerce_page_title(); ?>
	</h1>
	<?php //endif; ?>

	<?//php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	//do_action( 'woocommerce_archive_description' );
	?>
<!-- </header> -->
 <div class="block-split block-split--has-sidebar">
    <div class="container">
        <div class="block-split__row row no-gutters">
		    <?php get_template_part( 'template-parts/sidebar/shop-page-sidebar', 'sidebar' ); ?>
			<div class="block-split__item block-split__item-content col-auto">
                <div class="block">
                    <div class="products-view">
					   <!-- tab view setion -->
					   <div class="products-view__options view-options view-options--offcanvas--mobile">
							<div class="view-options__body">
								<button type="button" class="view-options__filters-button filters-button">
									<span class="filters-button__icon">
										<svg width="16" height="16">
											<path
												d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z"
											/>
										</svg>
									</span>
									<span class="filters-button__title">Filters</span> <span class="filters-button__counter">3</span>
								</button>
								<div class="view-options__layout layout-switcher">
									<div class="layout-switcher__list">
										<button type="button" class="layout-switcher__button layout-switcher__button--active" data-layout="grid" data-with-features="false">
											<svg width="16" height="16">
												<path
													d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z"
												/>
											</svg>
										</button>
										<button type="button" class="layout-switcher__button" data-layout="grid" data-with-features="true">
											<svg width="16" height="16">
												<path
													d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
v14.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z"
												/>
											</svg>
										</button>
										<button type="button" class="layout-switcher__button" data-layout="list" data-with-features="false">
											<svg width="16" height="16">
												<path
													d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
H0.8C0.4,7,0,6.6,0,6.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z"
												/>
											</svg>
										</button>
										<button type="button" class="layout-switcher__button" data-layout="table" data-with-features="false">
											<svg width="16" height="16">
												<path
													d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2v-2.4C0,12.4,0.4,12,0.8,12h14.4c0.4,0,0.8,0.4,0.8,0.8v2.4C16,15.6,15.6,16,15.2,16z
M15.2,10H0.8C0.4,10,0,9.6,0,9.2V6.8C0,6.4,0.4,6,0.8,6h14.4C15.6,6,16,6.4,16,6.8v2.4C16,9.6,15.6,10,15.2,10z M15.2,4H0.8
C0.4,4,0,3.6,0,3.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v2.4C16,3.6,15.6,4,15.2,4z"
												/>
											</svg>
										</button>
									</div>
								</div>
								<div class="view-options__legend shop_product_count"><?php woocommerce_result_count(); ?></div>
								<div class="view-options__spring"></div>
								
							</div>
							<div class="view-options__body view-options__body--filters">
								<div class="view-options__label">Active Filters</div>
								<div class="applied-filters">
									<ul class="applied-filters__list">
										<!-- <li class="applied-filters__item">
										   <?php if(isset($_GET['category'])){
												?>
												<a href="#" class="applied-filters__button applied-filters__button--filter">
											    Category: <?php 
                                                echo $_GET['category'];?> 
											</a>
											<?php
                                            } ?>
										</li> -->
										<?php 
										$Query = array_filter($_GET);
										foreach ($Query as $key => $tag){ ?>
											<li class="applied-filters__item">
											<?php if(isset($_GET[$key])){
												 ?>
												 <a href="#" class="applied-filters__button applied-filters__button--filter">
												 <?php 
												 echo "$key: $tag" ;?> 
											 </a>
											 <?php
											 } ?>
										 </li>
										 <?php
										}
										?>

										
										<!-- <li class="applied-filters__item">
										   <?php if(isset($_GET['country'])){
												?>
												<a href="#" class="applied-filters__button applied-filters__button--filter">
											    Country: <?php 
                                                echo $_GET['country'];?> 
											</a>
											<?php
                                            } ?>
										</li>
										 <li class="applied-filters__item">
										   <?php if(isset($_GET['brand'])){
												?>
												<a href="#" class="applied-filters__button applied-filters__button--filter">
											    Brand: <?php 
                                                echo $_GET['brand'];?> 
											</a>
											<?php
                                            } ?>
										</li>
										<li class="applied-filters__item">
										   <?php if(isset($_GET['vehicle'])){
												?>
												<a href="#" class="applied-filters__button applied-filters__button--filter">
											    Vehicle: <?php 
                                                echo $_GET['vehicle'];?> 
											</a>
											<?php
                                            } ?>
										</li>
										<li class="applied-filters__item">
										   <?php if(isset($_GET['color'])){
												?>
												<a href="#" class="applied-filters__button applied-filters__button--filter">
											    Color: <?php 
                                                echo $_GET['color'];?> 
											</a>
											<?php
                                            } ?>
										</li>
										<li class="applied-filters__item">
										   <?php if(isset($_GET['material'])){
												?>
												<a href="#" class="applied-filters__button applied-filters__button--filter">
											    Material: <?php 
                                                echo $_GET['material'];?> 
											</a>
											<?php
                                            } ?>
										</li> -->
									</ul>
								</div>
							</div>
						</div>
					   <!-- tab view section ends -->
					   
					   <!-- product loop -->
					   <div class="products-view__list products-list products-list--grid--4" data-layout="grid" data-with-features="false">
						<div class="products-list__head">
							<div class="products-list__column products-list__column--image">Image</div>
							<div class="products-list__column products-list__column--meta">SKU</div>
							<div class="products-list__column products-list__column--product">Product</div>
							<div class="products-list__column products-list__column--rating">Rating</div>
							<div class="products-list__column products-list__column--price">Price</div>
						</div>
						<div class="products-list__content">
						     <!-- search from home page -->
							 <?php  
							    //$term_main = $attribute->attribute_name;
								$tax_query = array( 
									'relation' => 'OR',
								);
								
								
								foreach ($Query as $key => $item ){
									$tax_query[] =  array(
												'taxonomy' => 'pa_'.$key,
											    'field' => 'slug',
												'terms'           =>  array($item),
												'operator'        => 'IN',
											);
								}
								// if(isset($_GET['category']) && !empty($_GET['category'])){
								// 	$tax_query[] =  array(
								// 		'taxonomy' => 'product_cat',
								// 	    'field' => 'slug',
								// 		'terms'           =>  array($_GET['category']),
								// 		'operator'        => 'IN',
								// 	);
								// }
								// if(isset($_GET['color']) && !empty($_GET['color'])){
								// 	$tax_query[] =  array(
								// 		'taxonomy'        => 'pa_color',
								// 		'field'           => 'slug',
								// 		'terms'           =>  array($_GET['color']),
								// 		'operator'        => 'IN',
								// 	);
								// }
								// // if(isset($_GET[$term_main]) && !empty($_GET[$term_main])){
								// // 	$tax_query[] =  array(
								// // 		'taxonomy'        => $current_taxonomy,
								// // 		'field'           => 'slug',
								// // 		'terms'           =>  array($_GET[$term_main]),
								// // 		'operator'        => 'IN',
								// // 	);
								// // }
								// if(isset($_GET['cpl']) && !empty($_GET['cpl'])){
								// 	$tax_query[] =  array(
								// 		'taxonomy'        => 'pa_cpl',
								// 		'field'           => 'slug',
								// 		'terms'           =>  array($_GET['cpl']),
								// 		'operator'        => 'IN',
								// 	);
								// }
								// if(isset($_GET['brand']) && !empty($_GET['brand'])){
								// 	$tax_query[] =  array(
								// 		'taxonomy'        => 'pa_brand',
								// 		'field'           => 'slug',
								// 		'terms'           =>  array($_GET['brand']),
								// 		'operator'        => 'IN',
								// 	);
								// }
								// if(isset($_GET['material']) && !empty($_GET['material'])){
								// 	$tax_query[] =  array(
								// 		'taxonomy'        => 'pa_material',
								// 		'field'           => 'slug',
								// 		'terms'           =>  array($_GET['material']),
								// 		'operator'        => 'IN',
								// 	);
								// }
								// if(isset($_GET['vehicle']) && !empty($_GET['vehicle'])){
								// 	$tax_query[] =  array(
								// 		'taxonomy'        => 'pa_vehicle',
								// 		'field'           => 'slug',
								// 		'terms'           =>  array($_GET['vehicle']),
								// 		'operator'        => 'IN',
								// 	);
								// }
								// if(isset($_GET['country']) && !empty($_GET['country'])){
								// 		$tax_query[] =  array(
								// 			'taxonomy'        => 'pa_country',
								// 			'field'           => 'slug',
								// 			'terms'           =>  array($_GET['country']),
								// 			'operator'        => 'IN',
								// 		);
								// }
								
										
							// $products = new WP_Query( array(
							// 	'post_type'      => array('product'),
							// 	'post_status'    => 'publish',
							// 	'posts_per_page' => -1,
							// 	'tax_query'      => $tax_query)
							// 	);


									// $paged = (get_query_var( 'paged' ))  ? get_query_var( 'paged' ) : 1;
									// if ( get_query_var( 'paged' ) ) {
									// 	$paged = get_query_var( 'paged' );
									// } elseif ( get_query_var( 'page' ) ) {
									// 	$paged = get_query_var( 'page' );
									// }
									// else {
									// 	$paged = 1;
									// }
									// var_dump(get_query_var( 'paged' ));
									$paged = 1;
									if(isset($_GET['page'])&& $_GET['page']>0){
										$paged = $_GET['page'];
									}
									// echo "<pre>";
                                    //  print_r($tax_query);
									//  echo "</pre>";
									$args = [
										'post_type'      => 'product',
										'posts_per_page' => 3,
										'paged'          => $paged,
										'order'          => 'DESC',
										'post_status'    => 'publish',
										'tax_query'      => $tax_query
									];
									
									$the_query = new WP_Query( $args );

							// The Loop
							// if ( $products->have_posts() ): while ( $products->have_posts() ):
							// 	$products->the_post();
							// 	$product_ids[] = $products->post->ID;

								if ( $the_query->have_posts() ): while ( $the_query->have_posts() ):
									$the_query->the_post();
									$product_ids[] = $the_query->post->ID;
									
								
								?>
								<div class="products-list__item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
											<svg width="16" height="16">
												<path
													d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"
												/>
											</svg>
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
										<?php if ( is_plugin_active( 'aco-wishlist-for-woocommerce/start.php' ) ) {
											 echo do_shortcode('[awwlm_add_to_wishlist]'); }else{?> 
											 <p>Please active Wishlist for WooCommerce plugin</p>
											 <?php 
											 }
											 ?>
										</button>
										<button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
											<svg width="16" height="16">
												<path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
												<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
												<path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
											</svg>
										</button>
									</div>
									<div class="product-card__image">
										<div class="image image--type--product">
											<a class="image__body">
											<?php //do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
											<?php echo woocommerce_template_loop_product_thumbnail(); ?>
											</a>
										</div>
										<div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													<svg width="13" height="13"><path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg>
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B</div>
										<div class="product-card__name">
											<div>
												<!-- <div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
													<div class="tag-badge tag-badge--new">new</div>
													<div class="tag-badge tag-badge--hot">hot</div>
												</div> -->
												<a href="<?php echo get_permalink($the_query->post->ID) ?>"><?php woocommerce_template_loop_product_title(); ?></a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 3 reviews</div>
										</div>
										<div class="product-card__features">
											<ul>
												<li>Speed: 750 RPM</li>
												<li>Power Source: Cordless-Electric</li>
												<li>Battery Cell Type: Lithium</li>
												<li>Voltage: 20 Volts</li>
												<li>Battery Capacity: 2 Ah</li>
											</ul>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php woocommerce_template_loop_price(); ?></div></div>
										<?php woocommerce_template_loop_add_to_cart(); ?>
										<!-- <button class="cpl-cart product-card__addtocart-icon" type="button" aria-label="Add to cart"> -->
										    <?php 
											// add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
											// function woocommerce_custom_product_add_to_cart_text() {
											// 	echo 'buy';  
												
											// }
											?>
											<?php //do_action('woocommerce_after_shop_loop_item','add_to_cart_replace');	 ?>
											<?php //woocommerce_template_loop_add_to_cart(do_action('woocommerce_after_shop_loop_item','add_to_cart_replace')); ?>
											
											<?php //woocommerce_template_loop_add_to_cart(do_action('woocommerce_after_add_to_cart_button', 'add_content_after_addtocart_button_func')); ?>
											<?php //do_action('woocommerce_after_add_to_cart_button'); ?>
										<!-- </button> -->
										<button class="product-card__addtocart-full" type="button"><?php woocommerce_template_loop_add_to_cart(); ?></button>
										<button class="product-card__wishlist" type="button">
											<svg width="16" height="16">
												<path
													d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"
												/>
											</svg>
											<span>Add to wishlist</span>
										</button>
										<button class="product-card__compare" type="button">
											<svg width="16" height="16">
												<path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
												<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
												<path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
											</svg>
											<span>Add to compare</span>
										</button>
									</div>
								</div>
							</div>
								<?php
							endwhile;
							    
								?>
							
                                	<div class="products-view__pagination">
							<nav aria-label="Page navigation example">
								<ul class="pagination shop-pagination">
								<?php
								//pagination git
								$total_pages = $the_query->max_num_pages;
								$page_data = array(
									'total_pages'  => $total_pages,
									'current_page' =>  max( 1, $paged ),
								);
								get_template_part( 'template-parts/pagination/pagination', null, $page_data);
								?>
									
								</ul>
							</nav> 
							<div class="products-view__pagination-legend shop_product_count"><?php woocommerce_result_count(); ?></div>
						</div>
							   
								<?php
								
								
							else:
								?>
								<div class="products-list__item">
								<?php
						      echo ("No matching data is available to display!");
							  ?>
							  </div>
							  <?php
							endif;
							?>
							
						</div>
					</div>
					
					 
					<!-- <div class="products-view__pagination">
							<nav aria-label="Page navigation example">
								<ul class="pagination shop-pagination">
								<?php
								// pagination git
								// $total_pages = $the_query->max_num_pages;
								// $page_data = array(
								// 	'total_pages'  => $total_pages,
								// 	'current_page' =>  max( 1, $paged ),
								// );
								// get_template_part( 'template-parts/pagination/pagination', null, $page_data);
								?>
									
								</ul>
							</nav> -->
							<div class="products-view__pagination-legend shop_product_count"><?php woocommerce_result_count(); ?></div>
						<!-- </div> -->
		<!-- pagination -->
<?//php


// do_action( 'woocommerce_after_shop_loop' ); 

// if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	//do_action( 'woocommerce_before_shop_loop' );

	// woocommerce_product_loop_start();

	// if ( wc_get_loop_prop( 'total' ) ) {
	// 	while ( have_posts() ) {
	// 		the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			//do_action( 'woocommerce_shop_loop' );

	// 		wc_get_template_part( 'content', 'product' );
	// 	}
	// }

	// woocommerce_product_loop_end();
   
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
// 	do_action( 'woocommerce_after_shop_loop' );
// } else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
// 	do_action( 'woocommerce_no_products_found' );
// }

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
 //do_action( 'woocommerce_sidebar' );
 
 ?>
 <?php //if(get_sidebar( 'primary-new' )){
	//echo get_sidebar( 'primary-new' );
//  }
//  else{
// 	 echo "no sidebar";
//  } 
 ?>
 <?php //get_sidebar( 'primary-new' ); ?>
 <?php //get_template_part( 'template-parts/sidebar/sidebar-primary-new'); ?>
 
                       

                     </div>
                </div>
             </div>
         </div>
    </div>
	<div class="block-space block-space--layout--before-footer"></div>
</div>
<?Php 
get_footer( 'shop' );
