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
								<div class="view-options__legend">Showing 6 of 98 products</div>
								<div class="view-options__spring"></div>
								<div class="view-options__select">
									<label for="view-option-sort">Sort:</label>
									<select id="view-option-sort" class="form-control form-control-sm" name="">
										<option value="">Price</option>
									</select>
								</div>
								<div class="view-options__select">
									<label for="view-option-limit">Show:</label>
									<select id="view-option-limit" class="form-control form-control-sm" name="">
										<option value=""><?php woocommerce_result_count(); ?></option>
									</select>
								</div>
							</div>
							<div class="view-options__body view-options__body--filters">
								<div class="view-options__label">Active Filters</div>
								<div class="applied-filters">
									<ul class="applied-filters__list">
										<li class="applied-filters__item">
											<a href="#" class="applied-filters__button applied-filters__button--filter">
												Sales: Top Sellers <svg width="9" height="9"><path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z" /></svg>
											</a>
										</li>
										<li class="applied-filters__item">
											<a href="#" class="applied-filters__button applied-filters__button--filter">
												Color: True Red <svg width="9" height="9"><path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z" /></svg>
											</a>
										</li>
										<li class="applied-filters__item"><button type="button" class="applied-filters__button applied-filters__button--clear">Clear All</button></li>
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
						     <?php 
							  
								if ( have_posts() ) {
									while ( have_posts() ) {
										the_post(); 
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
											<svg width="16" height="16">
												<path
													d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"
												/>
											</svg>
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
											<?php //do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
											<?php echo woocommerce_template_loop_product_thumbnail(); ?>
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
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
													<div class="tag-badge tag-badge--new">new</div>
													<div class="tag-badge tag-badge--hot">hot</div>
												</div>
												<a href="product-full.html"><?php woocommerce_template_loop_product_title(); ?></a>
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
										<button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
											<svg width="20" height="20">
												<circle cx="7" cy="17" r="2" />
												<circle cx="15" cy="17" r="2" />
												<path
													d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"
												/>
											</svg>
										</button>
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
							 } // end while
							} // end if
							?>
						</div>
					</div>
					   <!-- product loop -->
					   <!-- pagination -->
					<div class="products-view__pagination">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link--with-arrow" href="#" aria-label="Previous">
											<span class="page-link__arrow page-link__arrow--left" aria-hidden="true">
												<svg width="7" height="11">
													<path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
												</svg>
											</span>
										</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active" aria-current="page">
										<span class="page-link">2 <span class="sr-only">(current)</span></span>
									</li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item page-item--dots"><div class="pagination__dots"></div></li>
									<li class="page-item"><a class="page-link" href="#">9</a></li>
									<li class="page-item">
										<a class="page-link page-link--with-arrow" href="#" aria-label="Next">
											<span class="page-link__arrow page-link__arrow--right" aria-hidden="true">
												<svg width="7" height="11">
													<path
														d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
					C-0.1,9.8-0.1,10.4,0.3,10.7z"
													/>
												</svg>
											</span>
										</a>
									</li>
								</ul>
							</nav>
							<div class="products-view__pagination-legend">Showing 6 of 98 products</div>
						</div>
		<!-- pagination -->
<?//php

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
// do_action( 'woocommerce_sidebar' );
 ?>
                       

                     </div>
                </div>
             </div>
         </div>
    </div>
	<div class="block-space block-space--layout--before-footer"></div>
</div>
<?Php 
get_footer( 'shop' );
