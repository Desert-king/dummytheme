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

global $product;

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
						    <!-- static html -->
							<div class="product__body">
                                        <div class="product__card product__card--one"></div>
                                        <div class="product__card product__card--two"></div>
                                        <div class="product-gallery product-gallery--layout--product-sidebar product__gallery" data-layout="product-sidebar">
                                            <!-- loop -->
											<?php while ( have_posts() ) : ?>
												<?php the_post(); ?>

												<?php wc_get_template_part( 'content', 'single-product' ); ?>
											<div class="product-gallery__featured">
											
                                               
                                            </div>
                                           
                                            <?php //woocommerce_show_product_sale_flash(); ?>
											

											
                                        </div>
                                        <!-- gallery static part -->
                                        
                                        <div class="product__header">
                                            <h1 class="product__title"><?php woocommerce_template_single_title() ?></h1>
                                            <div class="product__subtitle">
                                                <div class="product__rating">
                                                    <div class="product__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product__rating-label"><a href="#">3.5 on 7 reviews</a></div>
                                                </div>
                                                <div class="status-badge status-badge--style--success product__fit status-badge--has-icon status-badge--has-text">
                                                    <div class="status-badge__body">
                                                        <div class="status-badge__icon">
                                                            <svg width="13" height="13"><path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg>
                                                        </div>
                                                        <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                        <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										 <!-- loop -->
										 <?php endwhile; // end of the loop. ?>
                                        <div class="product__info">
                                            <div class="product__info-card">
                                                <div class="product__info-body">
                                                    <!-- <div class="product__badge tag-badge tag-badge--sale">Sale</div> -->
                                                    <div class="product__prices-stock">
                                                        <div class="product__prices"><div class="product__price product__price--current"><?php woocommerce_template_single_price(); ?></div></div>
                                                        <div class="status-badge status-badge--style--success product__stock status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__text"><?php 
                                                                 global $product;
                                                                if ( ! $product->managing_stock() && ! $product->is_in_stock() ){
                                                                    echo 'out of stock';
                                                                }
                                                                else{
                                                                    echo 'In stock';
                                                                }
                                                                ?>
                                                                </div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="In&#x20;Stock"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product__meta">
                                                        <table>
                                                            <?php 
                                                            foreach( wc_get_attribute_taxonomies() as $attribute ) {
                                                                    $term_main = $attribute->attribute_name;
                                                                    //print_r($term_main);
                                                                    $taxonomy = 'pa_' . $attribute->attribute_name;
                                                                    $terms    = wp_get_post_terms( get_the_ID(), $taxonomy ); // Get the terms
                                                                    if ( ! empty( $terms ) ) {
                                                                        $output   = []; // Initializing
        
                                                                        // Loop through the terms set in the product
                                                                        foreach( $terms as $term ) {
                                                                            // $output[] = '<a href="'.get_term_link( $term, $taxonomy ).'">'.$term->name.'</a>';
                                                                            $output[] = $term->name;
                                                                        }
                                                                        echo ("<tr>");
                                                                        echo ("<th>");
                                                                        echo $term_main;
                                                                        echo ("</th>");
                                                                        echo ("<td>".implode( ', ', $output ) ."</td>");
                                                                        echo ("</tr>");
                                                                    }
                                                                    // else{
                                                                    //     echo "not found"; 
                                                                    // }
                                                                }
                                                                    ?>
                                                           
                                                            <tr>
                                                           
                                                            <?php //echo do_shortcode('[product_attributes_news]'); ?>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <?php 
                                                    global $product;
                                                    $sku = $product->get_sku();
                                                    if (!empty($sku) && isset($sku)) {

                                                    ?>
                                                        <div class="product-form product__form">
                                                                <div class="product-form__body">
                                                                    <div class="product-form__row">
                                                                    <div class="product-form__title">SKU</div>
                                                                        <div class="product-form__control">
                                                                            <div class="input-radio-label">
                                                                                <div class="input-radio-label__list">
                                                                                    <label class="input-radio-label__item">
                                                                                        <input type="radio" name="material" class="input-radio-label__input" /> 
                                                                                            <span class="input-radio-label__title"> 
                                                                                                  <?php 
                                                                                                echo $sku;
                                                                                            ?></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                        <?php
                                                    }
                                                ?>
                                                

                                                    
                                                <div class="product__actions">
                                                   
                                                    <div class="product__actions-item product__actions-item--addtocart">
                                                      <button class="btn btn-primary btn-lg btn-block">
                                                          <?php woocommerce_template_loop_add_to_cart(); ?>
                                                      </button>
                                                    </div>
                                                    <div class="product__actions-divider"></div>
                                                    <button class="product__actions-item product__actions-item--wishlist" type="button">
                                                        <?php echo do_shortcode('[awwlm_add_to_wishlist]'); ?>
                                                       
                                                    </button>
                                                    
                                                </div>
                                                <div class="product__tags-and-share-links">
                                                    <div class="product__tags tags tags--sm">
                                                    
                                                        <?php 
                                                            
                                                            $terms = wp_get_post_terms( $post->ID, 'product_tag', array( 'fields' => 'all' ) );
                                                            // print_r( $terms);
                                                            ?>
                                                            <?php 
                                                            //  $terms = get_term_by('term_id', 'name', 'Term Name');
                                                            ?>
                                                            <div class="tags__list">
                                                            <?php foreach ( $terms as $term ) { ?>
                                                                <a href="<?php echo get_term_link( $term->term_id, 'product_tag' ); ?> " rel="tag"><?php echo $term->name; ?></a>
                                                            <?php 
                                                            }
                                                            // } 
                                                            ?>
                                                            </div>
                                                    </div>
                                                    <div class="product__share-links share-links">
                                                        <ul class="share-links__list">
                                                            <li class="share-links__item share-links__item--type--like"><a href="#">Like</a></li>
                                                            <li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a></li>
                                                            <li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a></li>
                                                            <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a></li>
                                                        </ul>
                                                   </div>
                                                </div>
                                            </div>
									    </div>	
											<!-- feature list end -->
                                        <!-- after photo deatail  -->
										<?php //do_action ('woocommerce_after_single_product_summary'); ?>
										<div class="product__tabs product-tabs product-tabs--layout--sidebar">
                                            <ul class="product-tabs__list">
                                                <li class="product-tabs__item product-tabs__item--active"><a href="#product-tab-description">Description</a></li>
                                                <li class="product-tabs__item"><a href="#product-tab-specification">Specification</a></li>
                                                <li class="product-tabs__item">
                                                    <a href="#product-tab-reviews">Reviews <span class="product-tabs__item-counter"><?php echo($product->get_review_count()); ?></span></a>
                                                </li>
                                                <!-- <li class="product-tabs__item"><a href="#product-tab-analogs">Analogs</a></li> -->
                                            </ul>
                                            
                                            
                                            <div class="product-tabs__content">
                                                <div class="product-tabs__pane product-tabs__pane--active" id="product-tab-description">
                                                    <div class="typography">
                                                         <?php echo($product->get_description()); ?>                                                        
                                                    </div>
                                                </div>
                                                <div class="product-tabs__pane" id="product-tab-specification">
                                                    <div class="spec">
                                                        <div class="spec__section">
                                                            <h4 class="spec__section-title">General</h4>
                                                            
                                                            <?php 
                                                                global $redux_demo;
                                                                global $product;

                                                                $id = $product->get_id();

                                                                $meta_value = redux_post_meta( $opt_name, $id );
                                                                if(isset($meta_value["cpl-general-title"])){
                                                                    $general_title = $meta_value["cpl-general-title"];
                                                                }else{
                                                                    $general_title = [];
                                                                }
                                                                if(isset($meta_value["cpl-general-value"])){
                                                                    $general_value = $meta_value["cpl-general-value"];
                                                                }else{
                                                                    $general_value = [];
                                                                }
                                                                
                                                               
                                                            $spe_first_count = count($general_title);
                                                            
                                                                $x = 0;
                                                                while($x < $spe_first_count) {
                                                              
                                                            ?>
                                                           
                                                            <div class="spec__row">
                                                                <div class="spec__name">
                                                                    <?php if(isset(($general_title)[$x])){
                                                                                echo($general_title)[$x];
                                                                            } ?>
                                                                </div>
                                                                <div class="spec__value">
                                                                    <?php if(isset(($general_value)[$x])){
                                                                                echo($general_value)[$x];
                                                                            } ?>

                                                                </div>
                                                            </div>
                                                                        
                                                                    
                                                            <?php
                                                              
                                                                $x++;
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="spec__section">
                                                            <h4 class="spec__section-title">Dimensions</h4>
                                                            <!-- 11111111111111111 -->
                                                            <?php 
                                                                global $redux_demo;
                                                                global $product;

                                                                $id = $product->get_id();

                                                                $meta_value = redux_post_meta( $opt_name, $id );
                                                                if(isset($meta_value["cpl-dimension-title"])){
                                                                    $dimension_title = $meta_value["cpl-dimension-title"];
                                                                }else{
                                                                    $dimension_title = [];
                                                                }
                                                                if(isset($meta_value["cpl-dimension-value"])){
                                                                    $dimension_value = $meta_value["cpl-dimension-value"];
                                                                }else{
                                                                    $dimension_value = [];
                                                                }
                                                                    // $dimension_title = $meta_value["cpl-dimension-title"];
                                                                    // $dimension_value = $meta_value["cpl-dimension-value"];
                                                               

                                                                // $dimension_title = $meta_value["cpl-dimension-title"];
                                                                // $dimension_value = $meta_value["cpl-dimension-value"];
                                                                
                                                           
                                                            $spe_first_count = count($dimension_title);
                                                            
                                                                $x = 0;
                                                                while($x < $spe_first_count) {
                                                              
                                                            ?>
                                                           
                                                            <div class="spec__row">
                                                                <div class="spec__name">
                                                                    <?php if(isset(($dimension_title)[$x])){
                                                                                echo($dimension_title)[$x];
                                                                            } 
                                                                              
                                                                             ?>
                                                                </div>
                                                                <div class="spec__value">
                                                                    <?php 
                                                                    if(isset(($dimension_value)[$x])){
                                                                        echo($dimension_value)[$x];
                                                                    } 
                                                                                
                                                                             
                                                                            ?>
                                                                </div>
                                                            </div>
                                                                        
                                                                    
                                                            <?php
                                                                //  } 
                                                                $x++;
                                                                }
                                                            ?>
                                                            <!-- 11111111111111111111 -->
                                                        </div>
                                                        <div class="spec__disclaimer">
                                                            Information on technical characteristics, the delivery set, the country of manufacture and the appearance of the goods is for reference only and is based on the latest information
                                                            available at the time of publication.
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="product-tabs__pane" id="product-tab-reviews">
                                                    <div class="reviews-view">
                                                    <?php 
                                          
                                                       // If comments are open or we have at least one comment, load up the comment template.
                                                        if ( comments_open() || get_comments_number() ) :
                                                            comments_template();
                                                        endif;


                                                        
                                                        ?>
                                                        
                                                        <!-- <div class="reviews-view__list">
                                                            <div class="reviews-list">
                                                                <ol class="reviews-list__content">
                                                                    <li class="reviews-list__item">
                                                                        <div class="review">
                                                                            <div class="review__body">
                                                                                <div class="review__avatar"><img src="images/avatars/avatar-1-42x42.jpg" alt="" /></div>
                                                                                <div class="review__meta">
                                                                                    <div class="review__author">Samantha Smith</div>
                                                                                    <div class="review__date">27 May, 2018</div>
                                                                                </div>
                                                                                <div class="review__rating">
                                                                                    <div class="rating">
                                                                                        <div class="rating__body">
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="review__content typography">
                                                                                    Phasellus id mattis nulla. Mauris velit nisi, imperdiet vitae sodales in, maximus ut lectus. Vivamus commodo scelerisque lacus, at porttitor dui iaculis id.
                                                                                    Curabitur imperdiet ultrices fermentum.
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="reviews-list__item">
                                                                        <div class="review">
                                                                            <div class="review__body">
                                                                                <div class="review__avatar"><img src="images/avatars/avatar-2-42x42.jpg" alt="" /></div>
                                                                                <div class="review__meta">
                                                                                    <div class="review__author">Adam Taylor</div>
                                                                                    <div class="review__date">12 April, 2018</div>
                                                                                </div>
                                                                                <div class="review__rating">
                                                                                    <div class="rating">
                                                                                        <div class="rating__body">
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star"></div>
                                                                                            <div class="rating__star"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="review__content typography">
                                                                                    Aenean non lorem nisl. Duis tempor sollicitudin orci, eget tincidunt ex semper sit amet. Nullam neque justo, sodales congue feugiat ac, facilisis a augue.
                                                                                    Donec tempor sapien et fringilla facilisis. Nam maximus consectetur diam. Nulla ut ex mollis, volutpat tellus vitae, accumsan ligula.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="reviews-list__item">
                                                                        <div class="review">
                                                                            <div class="review__body">
                                                                                <div class="review__avatar"><img src="images/avatars/avatar-3-42x42.jpg" alt="" /></div>
                                                                                <div class="review__meta">
                                                                                    <div class="review__author">Helena Garcia</div>
                                                                                    <div class="review__date">2 January, 2018</div>
                                                                                </div>
                                                                                <div class="review__rating">
                                                                                    <div class="rating">
                                                                                        <div class="rating__body">
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                            <div class="rating__star rating__star--active"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="review__content typography">Duis ac lectus scelerisque quam blandit egestas. Pellentesque hendrerit eros laoreet suscipit ultrices.</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                                <div class="reviews-list__pagination">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form class="reviews-view__form">
                                                            <h3 class="reviews-view__header">Write A Review</h3>
                                                            <div class="row">
                                                                <div class="col-xxl-12 col-xl-10 col-12">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-4">
                                                                            <label for="review-stars">Review Stars</label>
                                                                            <select id="review-stars" class="form-control">
                                                                                <option>5 Stars Rating</option>
                                                                                <option>4 Stars Rating</option>
                                                                                <option>3 Stars Rating</option>
                                                                                <option>2 Stars Rating</option>
                                                                                <option>1 Stars Rating</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label for="review-author">Your Name</label> <input type="text" class="form-control" id="review-author" placeholder="Your Name" />
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label for="review-email">Email Address</label> <input type="text" class="form-control" id="review-email" placeholder="Email Address" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group"><label for="review-text">Your Review</label> <textarea class="form-control" id="review-text" rows="6"></textarea></div>
                                                                    <div class="form-group mb-0 mt-4"><button type="submit" class="btn btn-primary">Post Your Review</button></div>
                                                                </div>
                                                            </div>
                                                        </form> -->
                                                    </div>
                                                </div>
                                                <!-- <div class="product-tabs__pane" id="product-tab-analogs">
                                                    <table class="analogs-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="analogs-table__column analogs-table__column--name">Name</th>
                                                                <th class="analogs-table__column analogs-table__column--rating">Rating</th>
                                                                <th class="analogs-table__column analogs-table__column--vendor">Vendor</th>
                                                                <th class="analogs-table__column analogs-table__column--price">Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="analogs-table__column analogs-table__column--name">
                                                                    <a href="#" class="analogs-table__product-name">Sunset Brake Kit</a><br />
                                                                    <div class="analogs-table__sku" data-title="SKU">SSX-780B390-S</div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--rating">
                                                                    <div class="analogs-table__rating">
                                                                        <div class="analogs-table__rating-stars">
                                                                            <div class="rating">
                                                                                <div class="rating__body">
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="analogs-table__rating-label">10 Reviews</div>
                                                                    </div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--vendor" data-title="Vendor">
                                                                    Sunset
                                                                    <div class="analogs-table__country">(Germany)</div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--price">$1259.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="analogs-table__column analogs-table__column--name">
                                                                    <a href="#" class="analogs-table__product-name">Specter Brake Kit</a><br />
                                                                    <div class="analogs-table__sku" data-title="SKU">SCT-123A380-S</div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--rating">
                                                                    <div class="analogs-table__rating">
                                                                        <div class="analogs-table__rating-stars">
                                                                            <div class="rating">
                                                                                <div class="rating__body">
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="analogs-table__rating-label">34 Reviews</div>
                                                                    </div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--vendor" data-title="Vendor">
                                                                    Specter
                                                                    <div class="analogs-table__country">(China)</div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--price">$799.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="analogs-table__column analogs-table__column--name">
                                                                    <a href="#" class="analogs-table__product-name">Brake Kit</a><br />
                                                                    <div class="analogs-table__sku" data-title="SKU">NNO-120K643-S</div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--rating">
                                                                    <div class="analogs-table__rating">
                                                                        <div class="analogs-table__rating-stars">
                                                                            <div class="rating">
                                                                                <div class="rating__body">
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star rating__star--active"></div>
                                                                                    <div class="rating__star"></div>
                                                                                    <div class="rating__star"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="analogs-table__rating-label">7 Reviews</div>
                                                                    </div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--vendor" data-title="Vendor">
                                                                    No Name
                                                                    <div class="analogs-table__country">(China)</div>
                                                                </td>
                                                                <td class="analogs-table__column analogs-table__column--price">$569.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> -->
												
                                                 </div>
                                            </div>
                                        </div>
										<!-- after photo deatail ends here -->
										<?php //do_action ('woocommerce_after_single_product_summary'); ?>
										<?php //woocommerce_output_product_data_tabs(); ?>
										<?php //woocommerce_upsell_display(); ?>
										<?php woocommerce_output_related_products(); ?>
									
											
									</div>   
								</div> 
							<!-- static html -->
							<?php //while ( have_posts() ) : ?>
								<?php //the_post(); ?>

								<?php //wc_get_template_part( 'content', 'single-product' ); ?>

							
						    <!-- <div class="product__body">
								<div class="product__card product__card--one"></div>
                                <div class="product__card product__card--two"></div>
				                
							
							</div> -->
								
							<?php //endwhile; // end of the loop. ?>
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

<!-- </div> -->
</div>
</div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
</div>


<?php

get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
