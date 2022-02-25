<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
    <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
    <div class="block-split block-split--has-sidebar">
		<div class="container">
			<div class="block-split__row row no-gutters">
			    <?php //do_action( 'woocommerce_sidebar' ); ?>
				<?php // dynamic_sidebar( 'new-sidebar' ); ?> 
                <?php //get_sidebar( 'primary' ); ?>
				<?php //do_action( 'woocommerce_sidebar' ); ?>
				<?php get_template_part( 'template-parts/sidebar/sidebar', 'sidebar' ); ?>
			       <div class="block-split__item block-split__item-content col-auto">
				        <div class="product product--layout--sidebar">
							<?php while ( have_posts() ) : ?>
								<?php the_post(); ?>

								<?php wc_get_template_part( 'content', 'single-product' ); ?>

							
						    <div class="product__body">
								<div class="product__card product__card--one"></div>
                                <div class="product__card product__card--two"></div>
				                <!-- <div class="product-gallery product-gallery--layout--product-sidebar product__gallery" data-layout="product-sidebar"> -->
                                    <div class="product-gallery__featured">
						               <?php //woocommerce_product_thumbnails(); ?>
									</div>
								<!-- </div> -->
							</div>
							<?php endwhile; // end of the loop. ?>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
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
<?php

get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
