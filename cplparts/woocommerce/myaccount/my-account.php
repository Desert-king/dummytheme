<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="site__body">
	<div class="block-space block-space--layout--after-header"></div>
	    <div class="block">
		     <div class="container container--max--lg cpl-my-account">
			 <div class="row">
	                <!-- <div class="u-column1 col-1"> -->
					<div class="col-md-3 d-flex">
<?php

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action( 'woocommerce_account_navigation' ); ?>

</div>
<div class="col-md-9 d-flex mt-4 mt-md-0">
<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
</div>
</div>
</div>
<div class ="block-space block-space--layout--before-footer"></div>
</div>

