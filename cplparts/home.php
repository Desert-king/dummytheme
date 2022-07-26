<?php
/*
Template Name: Home-page
*/
?>
<?php get_header(); ?>
<!-- site__header / end --><!-- site__body -->
<div class="site__body">
                <div class="block-finder block">
                    <div class="decor block-finder__decor decor--type--bottom">
                        <div class="decor__body">
                            <div class="decor__start"></div>
                            <div class="decor__end"></div>
                            <div class="decor__center"></div>
                        </div>
                    </div>
                    <!-- <div class="block-finder__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/finder-1903x500.jpg');"></div> -->
                    <div class="block-finder__image" style="background-image: url('<?php  
                            if(!empty($redux_demo['bannar-image']) && isset($redux_demo['bannar-image']['url'])){
                                echo $redux_demo['bannar-image']['url'];
                               }else{
                                   echo "Bannar is not found";
                               };?>');"></div>
                    <div class="block-finder__body container container--max--xl">
                        <div class="block-finder__title">
                            <?php
                              if(!empty($redux_demo['bannar-title']) && isset($redux_demo['bannar-title'])){
                                     echo $redux_demo['bannar-title'];
                                    }else{
                                        echo "Bannar Title is not found";
                                    }
                                ?>
                                </div>
                        <div class="block-finder__subtitle">
                        <?php
                              if(!empty($redux_demo['bannar-subtitle']) && isset($redux_demo['bannar-subtitle'])){
                                     echo $redux_demo['bannar-subtitle'];
                                    }else{
                                        echo "Bannar Subtitle is not found";
                                    }
                                ?>
                        </div>
                        <form method="get" class="block-finder__form" action="<?php echo esc_url( home_url( '/shop' ) ); ?>">
                        
                            <!-- dynamic select start -->
                           
                                <?php 
                                if (!class_exists('WooCommerce')) return; 
                                add_shortcode( 'dynamic_select', 'get_product_attributes_news' );
                                function get_product_attributes_news() {
                                    $i = 0;
                                   
                                    foreach( wc_get_attribute_taxonomies() as $attribute ) {
                                        if($i==4)
                                        break;
                                        $term_main = $attribute->attribute_name;
                                        $taxonomy = 'pa_' . $attribute->attribute_name;
                                        $term_names = get_terms( array( 'taxonomy' => $taxonomy, 'fields' => 'names' ) );
                                        if(taxonomy_exists( $taxonomy )){  ?>
                                            <div class="block-finder__form-control block-finder__form-control--select">
                                                <select name="<?php echo $attribute->attribute_name; ?>" aria-label="Vehicle Make" >
                                                    <option value="<?php if(isset($_GET[$term_main])){ echo $_GET[$term_main];}
                                           ?>" selected>Select <?php echo $term_main; ?></option>
                                                    <?php 
                                                    $term_names = get_terms( array( 'taxonomy' => $taxonomy, 'fields' => 'names' ) );
                                                    foreach ($term_names as $brand){
                                                        ?>
                                                            <option value="<?php if (isset($brand)){
                                                                echo $brand; } ?>"><?php if (isset($brand)){
                                                                echo $brand; } ?></option>
                                                        <?php
                                                            }
                                                        }else{
                                                            echo "data not found"; 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        <?php
                                        $i++;
                                    }
                                }
                                
                            
                            echo do_shortcode('[dynamic_select]'); ?>
                            
                            <button class="block-finder__form-control block-finder__form-control--button" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <!-- product filter -->
                <?php
                //     $tax_query = array( 
                //         'relation' => 'OR',
                //     );
                //     if(isset($_GET['color']) && !empty($_GET['color'])){
                //         $tax_query[] =  array(
                //             'taxonomy'        => 'pa_color',
                //             'field'           => 'slug',
                //             'terms'           =>  array($_GET['color']),
                //             'operator'        => 'IN',
                //         );
                //     }
                //     if(isset($_GET['brand']) && !empty($_GET['brand'])){
                //         $tax_query[] =  array(
                //             'taxonomy'        => 'pa_brand',
                //             'field'           => 'slug',
                //             'terms'           =>  array($_GET['brand']),
                //             'operator'        => 'IN',
                //         );
                //     }
                //     if(isset($_GET['material']) && !empty($_GET['material'])){
                //         $tax_query[] =  array(
                //             'taxonomy'        => 'pa_material',
                //             'field'           => 'slug',
                //             'terms'           =>  array($_GET['material']),
                //             'operator'        => 'IN',
                //         );
                //     }
                //     if(isset($_GET['vehicle']) && !empty($_GET['vehicle'])){
                //         $tax_query[] =  array(
                //             'taxonomy'        => 'pa_vehicle',
                //             'field'           => 'slug',
                //             'terms'           =>  array($_GET['vehicle']),
                //             'operator'        => 'IN',
                //         );
                //     }
                //  $products = new WP_Query( array(
                //     'post_type'      => array('product'),
                //     'post_status'    => 'publish',
                //     'posts_per_page' => -1,
                //     'tax_query'      => $tax_query)
                //     );
                 
                 // The Loop
                //  if ( $products->have_posts() ): while ( $products->have_posts() ):
                //      $products->the_post();
                //      $product_ids[] = $products->post->ID;
                     
                //  endwhile;
                //      wp_reset_postdata();
                //  endif;

                //  print_r($product_ids); 
                 //$product_titles[] = get_the_title( $product_ids );
                //  foreach( $product_ids as $product_id ) {
                //     $product_titles[] = get_the_title( $product_id );
                // }
                // print_r($product_titles);

                ?>
                <!-- product filter end -->
                <div class="block-features block block-features--layout--top-strip">
                    <div class="container">
                        <ul class="block-features__list">
                            
                            <?php 
                                if(!empty($redux_demo['home-service-image']) && isset($redux_demo['home-service-image']) && !empty($redux_demo['home-service-title']) && isset($redux_demo['home-service-title']) && !empty($redux_demo['home-service-detail']) && isset($redux_demo['home-service-detail'])){
                                    $image = $redux_demo['home-service-image'];
                                    $service_title = $redux_demo['home-service-title'];
                                    $service_detail = $redux_demo['home-service-detail'];
                                  
                                // $numbers= $redux_demo['new-counter-number'];
                                // $titles = $redux_demo['new-counter-title'];
                                // print_r($photoes[1]['url']);
                                // print_r($names[1]);
                                
                                   $counter_count = count($image);
                                //    var_export($photoes);
                                    $x = 0;
                                    while($x < $counter_count) {
                                    // foreach ($names as $name) {
                                        ?>
                                        <li class="block-features__item">
                                            <img style="width:48px; margin-right:10px;"src="<?php echo  $image[$x]['url'];?>" />
                                          <div class="block-features__item-info">
                                            <div class="block-features__item-title"><?php echo($service_title)[$x]; ?></div>
                                            <div class="block-features__item-subtitle"><?php echo($service_detail)[$x]; ?></div>
                                          </div>
                                        </li>
                                        <?php
                                        // }
                                    $x++;
                                    }
                                }
                                ?> 
                                        
                           
                        </ul>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-nl"></div>
                <!-- custom -->
                
                <!-- for real featured product -->
                <div class="block block-products-carousel" data-layout="grid-5">
                    <div class="container">
                        <div class="section-header">
                            <div class="section-header__body">
                                <h2 class="section-header__title">Featured Products</h2>
                                <div class="section-header__spring"></div>
                                <!-- <ul class="section-header__groups">
                                    <li class="section-header__groups-item"><button type="button" class="section-header__groups-button section-header__groups-button--active">All</button></li>
                                    <li class="section-header__groups-item"><button type="button" class="section-header__groups-button">Power Tools</button></li>
                                    <li class="section-header__groups-item"><button type="button" class="section-header__groups-button">Hand Tools</button></li>
                                    <li class="section-header__groups-item"><button type="button" class="section-header__groups-button">Plumbing</button></li>
                                </ul> -->
                                <div class="section-header__arrows">
                                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg>
                                        </button>
                                    </div>
                                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11">
                                                <path
                                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="section-header__divider"></div>
                            </div>
                        </div>
                        <div class="block-products-carousel__carousel">
                            <div class="block-products-carousel__carousel-loader"></div>
                            <div class="owl-carousel">
                <?php
                add_shortcode ('woo_featured_products', 'woo_featured_products' );
               
                function woo_featured_products() {
                ob_start();

                    $meta_query  = WC()->query->get_meta_query();
                    $tax_query   = WC()->query->get_tax_query();
                    
                    $tax_query[] = array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                        'operator' => 'IN',
                    );

                    $args = array(
                        'post_type'           => 'product',
                        'post_status'         => 'publish',
                        'ignore_sticky_posts' => 1,
                        'posts_per_page'      => -1,
                        'orderby'             => 'date',
                        'order'               => 'ASC',
                        'meta_query'          => $meta_query,
                        'tax_query'           => $tax_query,
                    );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    global $product;
                    ?>
                    
                    <!-- <div> 
                        <a href="<?php //echo get_permalink( $loop->post->ID ) ?>">
                            <?php //the_post_thumbnail('large'); ?>
                        </a>
                    </div> -->
                    <!-- custom code -->
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--layout--grid">
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
                                        <!-- <svg width="16" height="16">
                                            <path
                                                d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"
                                            />
                                        </svg> -->
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
                                        <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                            else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
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
                                    <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 473-75662-R</div>
                                    <div class="product-card__name">
                                        <div><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
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
                                        <div class="product-card__rating-label">4 on 16 reviews</div>
                                    </div>
                                </div>
                                <div class="product-card__footer">
                                    <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                    
                                    <!-- <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                        <?php //echo do_shortcode('[awwlm_add_to_wishlist]'); ?>
                                    </button> -->
                                    <?php woocommerce_template_loop_add_to_cart(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- custom code end -->

                    <?php 
                    endwhile; 

                    wp_reset_query();     

                return ob_get_clean();
                }
                echo do_shortcode('[woo_featured_products]')
                ?>
                </div>
                        </div>
                    </div>
                </div>
                <!-- custom        -->
                       
                <div class="block-space block-space--layout--divider-nl"></div>
                <?php if(!empty($redux_demo['attention-section-title']) && isset($redux_demo['attention-section-title']) && !empty($redux_demo['attention-section-discount']) 
                && isset($redux_demo['attention-section-discount']) && !empty($redux_demo['attention-section-subtitle']) && isset($redux_demo['attention-section-subtitle']) 
                && isset($redux_demo['cpl-home-attention-section'])){
                    $attention_title = implode(",", $redux_demo['attention-section-title']);
                    $attention_discount = implode(",", $redux_demo['attention-section-discount']);
                    $attention_subtitle = implode(",", $redux_demo['attention-section-subtitle']);
                    $offer_cat = implode(",", $redux_demo['attention-section-product-category']);
                    ?>
                <div class="block block-sale">
                    <div class="block-sale__content">
                        <div class="block-sale__header">
                            <div class="block-sale__title">
                                <?php 
                                //    if(!empty($redux_demo['attention-section-title']) && isset($redux_demo['attention-section-title'])){
                                //     $attention_title = implode(",", $redux_demo['attention-section-title']);
                                    echo $attention_title;
                                //    }else{
                                //        echo "Attention section title is not found";
                                //    }
                                ?>
                            </div>
                            <div class="block-sale__subtitle">
                            <?php 
                                //    if(!empty($redux_demo['attention-section-discount']) && isset($redux_demo['attention-section-discount'])){
                                //     $attention_discount = implode(",", $redux_demo['attention-section-discount']);
                                    echo $attention_discount;
                                //    }else{
                                //        echo "Attention section discount is not found";
                                //    }
                                ?>
                            </div>
                            <div class="block-sale__timer">
                                <div class="timer">
                                    <div class="timer__part">
                                        <div class="timer__part-value timer__part-value--days">02</div>
                                        <div class="timer__part-label">Days</div>
                                    </div>
                                    <div class="timer__dots"></div>
                                    <div class="timer__part">
                                        <div class="timer__part-value timer__part-value--hours">23</div>
                                        <div class="timer__part-label">Hrs</div>
                                    </div>
                                    <div class="timer__dots"></div>
                                    <div class="timer__part">
                                        <div class="timer__part-value timer__part-value--minutes">07</div>
                                        <div class="timer__part-label">Mins</div>
                                    </div>
                                    <div class="timer__dots"></div>
                                    <div class="timer__part">
                                        <div class="timer__part-value timer__part-value--seconds">54</div>
                                        <div class="timer__part-label">Secs</div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-sale__controls">
                                <div class="arrow block-sale__arrow block-sale__arrow--prev arrow--prev">
                                    <button class="arrow__button" type="button">
                                        <svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg>
                                    </button>
                                </div>
                                <div class="block-sale__link"><a href="#">
                                <?php 
                                //    if(!empty($redux_demo['attention-section-subtitle']) && isset($redux_demo['attention-section-subtitle'])){
                                //     $attention_subtitle = implode(",", $redux_demo['attention-section-subtitle']);
                                    echo $attention_subtitle;
                                //    }else{
                                //        echo "Attention section subtitle is not found";
                                //    }
                                ?>
                                </a></div>
                                <div class="arrow block-sale__arrow block-sale__arrow--next arrow--next">
                                    <button class="arrow__button" type="button">
                                        <svg width="7" height="11">
                                            <path
                                                d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                                <div class="decor block-sale__header-decor decor--type--center">
                                    <div class="decor__body">
                                        <div class="decor__start"></div>
                                        <div class="decor__end"></div>
                                        <div class="decor__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-sale__body">
                            <div class="decor block-sale__body-decor decor--type--bottom">
                                <div class="decor__body">
                                    <div class="decor__start"></div>
                                    <div class="decor__end"></div>
                                    <div class="decor__center"></div>
                                </div>
                            </div>
                            <div class="block-sale__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/sale-1903x640.jpg');"></div>
                            <div class="container">
                            <?php 
                                  
                                    // if(isset($redux_demo['cpl-home-attention-section'])){
                                        // $offer_cat = implode(",", $redux_demo['attention-section-product-category']);
                                    // }
                                   
                                    ?>
                                    <div class="block-sale__carousel">
                                    <div class="owl-carousel">
                                        <?php
                                            
                                            $args = array(
                                                'product_cat' => $offer_cat,
                                                'posts_per_page' => 4,
                                                'orderby' => 'rand'
                                            );
                                            $loop = new WP_Query($args);
                                            while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?>
                                        <div class="block-sale__item">
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
                                                    <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
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
                                                    <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                    <div class="product-card__name">
                                                        <div><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
                                                    </div>
                                                    <div class="product-card__rating">
                                                        <div class="rating product-card__rating-stars">
                                                            <div class="rating__body">
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star rating__star--active"></div>
                                                                <div class="rating__star"></div>
                                                                <div class="rating__star"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating-label">3 on 7 reviews</div>
                                                    </div>
                                                </div>
                                                <div class="product-card__footer">
                                                    <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                                    <?php woocommerce_template_loop_add_to_cart(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_query(); ?>
                                    </div>
                                </div>
                                <?php
                                //    else{
                                //        echo "Attention section subtitle is not found";
                                //    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                }else{
                    ?>
                    <div class="block block-products-carousel">
                    <div class="container">
                    <div class="section-header">
                    <div class="section-header__body">
                    <h2 class="section-header__title">
                    <?php
                    echo "Attention zone is not found";
                    ?>
                    </h2>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php
                }
                                   
                ?>
                <!-- dynamic filtering of product categorywise start-->
                <div class="block-space block-space--layout--divider-lg"></div>
                <?php 
                                    global $redux_demo;
                                    if(isset($redux_demo['home-product-fields'])){
                                        $product_section_id= $redux_demo['home-product-fields'];
                                    }else{
                                        $product_section_id = "";
                                    }

                                    if(isset($redux_demo['home-product-fields'])){
                                        $product_bannar= $redux_demo['home-product-banner-image'];
                                    }else{
                                        $product_bannar = "";
                                    }
                                   
                                    if(isset($redux_demo['home-product-fields'])){
                                        $link = $redux_demo['shop-link'];
                                    }else{
                                        $link = "";
                                    }

                                    if(isset($redux_demo['home-product-fields'])){
                                        $Cat_1 = $redux_demo['home-product-category-one'];
                                    }else{
                                        $Cat_1 = "";
                                    }

                                    if(isset($redux_demo['home-product-fields'])){
                                        $Cat_2 = $redux_demo['home-product-category-two'];
                                    }else{
                                        $Cat_2 = "";
                                    }

                                    if(isset($redux_demo['home-product-fields'])){
                                        $Cat_3 = $redux_demo['home-product-category-three'];
                                    }else{
                                        $Cat_3 = "";
                                    }
                                ?>
                                <?php
                                  if(isset($redux_demo['home-product-fields'])){
                                    $first_count = count($product_bannar);
                                    $x = 0;
                                    while($x < $first_count) {
                                ?>
                                <?php
                                if(!empty($redux_demo['home-product-fields'])){
                                    ?>
                <!-- <div class="block block-zone" id="CategoryTabTop"> -->
                <div class="block block-zone" id="product_section_<?php echo wp_unique_id(); ?>"> 
                    <div class="container">
                    <!-- <?php echo $product_section_id[$x] ?> -->
                             
                        <div class="block-zone__body">
                            <div class="block-zone__card category-card category-card--layout--overlay">
                                <div class="category-card__body">
                                <div class="category-card__overlay-image">
                                        <img
                                            srcset="<?php echo $product_bannar[$x]['url'] ?>"
                                            src="<?php echo $product_bannar[$x]['url'] ?>" 
                                            sizes="(max-width: 575px) 530px, 305px"
                                            alt=""
                                        />
                                    </div>
                                    
                                    <div class="category-card__overlay-image category-card__overlay-image--blur">
                                        <img
                                            srcset="<?php echo $product_bannar[$x]['url'] ?>"
                                            src="<?php echo $product_bannar[$x]['url'] ?>" 
                                            sizes="(max-width: 575px) 530px, 305px"
                                            alt=""
                                        />
                                    </div>
                                    <div class="category-card__content">
                                        <div class="category-card__info">
                                            <div class="category-card__name"><a href="category-4-columns-sidebar.html"> Categories</a></div>
                                            <!-- <ul class="category-card__children">
                                                <li><a href="category-4-columns-sidebar.html">Wheel Covers</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Sensors</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Tire Chains</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Wheel disks</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Tires</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Sensors</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Accessories</a></li>
                                            </ul> -->
                                            
                                            <!-- dynamic product menu start-->

                                        <!-- <ul class="filter-categories__list">   -->
                                        <ul class="category-card__children">   
                                        <?php

                                            $taxonomy     = 'product_cat';
                                            $orderby      = 'name';  
                                            $show_count   = 0;      // 1 for yes, 0 for no
                                            $pad_counts   = 0;      // 1 for yes, 0 for no
                                            $hierarchical = 1;      // 1 for yes, 0 for no  
                                            $title        = '';  
                                            $empty        = 0;

                                            $args = array(
                                                'taxonomy'     => $taxonomy,
                                                'orderby'      => $orderby,
                                                'show_count'   => $show_count,
                                                'pad_counts'   => $pad_counts,
                                                'hierarchical' => $hierarchical,
                                                'title_li'     => $title,
                                                'hide_empty'   => $empty
                                            );
                                            $all_categories = get_categories( $args );
                                            foreach ($all_categories as $cat) {
                                            if($cat->category_parent == 0) {
                                                $category_id = $cat->term_id;       
                                                ?>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                  <a href="#" onclick="selectCategory('category', '<?php echo $cat->name; ?>')"><?php echo $cat->name; ?></a>
                                                  <!-- <a href="javascript:void(0)" onclick="selectCategory('category', '<?php echo $cat->name; ?>')"><?php echo $cat->name; ?></a> -->
                                                </li>
                                                <?php

                                                $args2 = array(
                                                        'taxonomy'     => $taxonomy,
                                                        'child_of'     => 0,
                                                        'parent'       => $category_id,
                                                        'orderby'      => $orderby,
                                                        'show_count'   => $show_count,
                                                        'pad_counts'   => $pad_counts,
                                                        'hierarchical' => $hierarchical,
                                                        'title_li'     => $title,
                                                        'hide_empty'   => $empty
                                                );
                                                $sub_cats = get_categories( $args2 );
                                                foreach ($sub_cats as $sub_category) {
                                                if($sub_category->category_parent == $category_id) {
                                                $category_sub_sub_id = $sub_category->term_id; 
                                                    echo "<ul>" ;
                                                        ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="#" onclick="selectCategory('category', '<?php echo $sub_category->name; ?>')"><?php echo $sub_category->name; ?></a>
                                                            <!-- <a href="javascript:void(0)" onclick="selectCategory('category', '<?php echo $sub_category->name; ?>')"><?php echo $sub_category->name; ?></a> -->
                                                        </li>
                                                        <?php

                                                        $args3 = array(
                                                                'taxonomy'     => $taxonomy,
                                                                'child_of'     => 0,
                                                                'parent'       => $category_sub_sub_id,
                                                                'orderby'      => $orderby,
                                                                'show_count'   => $show_count,
                                                                'pad_counts'   => $pad_counts,
                                                                'hierarchical' => $hierarchical,
                                                                'title_li'     => $title,
                                                                'hide_empty'   => $empty
                                                        );
                                                        $sub_cats = get_categories( $args3 );
                                                        
                                                        if($sub_cats) {
                                                            echo "<ul>" ;
                                                            foreach($sub_cats as $sub_sub_category) {
                                                                ?>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#" onclick="selectCategory('category', '<?php echo $sub_sub_category->name; ?>')"><?php echo $sub_sub_category->name; ?></a>
                                                                    <!-- <a href="javascript:void(0)" onclick="selectCategory('category', '<?php echo $sub_sub_category->name; ?>')"><?php echo $sub_sub_category->name; ?></a> -->
                                                                </li>
                                                                <?php
                                                            }   
                                                            echo "</ul>" ;
                                                        }
                                                        ?>
                                                        <?php
                                                    }   
                                                    echo "</ul>" ;
                                                }
                                            }       
                                            }
                                            ?>
                                           </ul>
                                       
                                <!-- dynamic product menu end -->
                                            <div class="category-card__actions">
                                             <a href="<?php 
                                            echo($link)[$x];
                                        ?>" class="btn btn-primary btn-sm">Shop All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__widget">
                                <div class="block-zone__widget-header">
                                    <div class="block-zone__tabs">
                                        <button class="tabs-button block-zone__tabs-button--active" target="<?php echo $Cat_1[$x]; ?>" onclick="handleCategoryTabProduct(this)">
                                        <!-- <button class="tabs-button" target="<?php echo $Cat_1[$x]; ?>" onclick="handleCategoryTabTop(this)"> -->
                                        <?php 
                                                echo $Cat_1[$x];
                                            ?>
                                        </button>
                                        <button class="tabs-button" target="<?php echo $Cat_2[$x]; ?>" onclick="handleCategoryTabProduct(this)">
                                        <?php 
                                                echo $Cat_2[$x];
                                            ?>
                                        </button> 
                                        <button class="tabs-button" target="<?php echo $Cat_3[$x]; ?>" onclick="handleCategoryTabProduct(this)">
                                        <?php 
                                                // if(!empty($redux_demo['home-product-category-three']) && isset($redux_demo['home-product-category-three'])){
                                                //     echo  implode(" ",$redux_demo['home-product-category-three']);
                                                //     $Cat_3 = implode(" ",$redux_demo['home-product-category-three']);
                                                // }else{
                                                //     echo "Category is not found";
                                                // }
                                                echo $Cat_3[$x];
                                            ?>
                                        </button> 
                                        </button>
                                        
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg>
                                        </button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11">
                                                <path
                                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                
                                <div id="<?php echo $Cat_1[$x]; ?>"  class="block-zone__widget-body tab-view-top active-top">
                                    <div class="block-zone__carousel">
                                        <div class="block-zone__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            <?php
                                            $args = array(
                                                // 'product_cat' => 'Iridium',
                                                'product_cat' => $Cat_1[$x],
                                                'posts_per_page' => 4,
                                                // 'orderby' => 'rand'
                                            );
                                            $loop = new WP_Query($args);
                                            while ($loop->have_posts()) : $loop->the_post();
                                                global $product; ?>
                                            <div class="block-zone__carousel-item">
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
                                                        <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
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
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                        <div class="product-card__name">
                                                            <div><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                                        <?php woocommerce_template_loop_add_to_cart(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_query(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="<?php echo $Cat_2[$x]; ?>"  class="block-zone__widget-body tab-view-top">
                                    <div class="block-zone__carousel">
                                        <div class="block-zone__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            <?php
                                            $args = array(
                                                // 'product_cat' => 'Powertrain',
                                                'product_cat' => $Cat_2[$x],
                                                'posts_per_page' => 2,
                                                // 'orderby' => 'rand'
                                            );
                                            $loop = new WP_Query($args);
                                            while ($loop->have_posts()) : $loop->the_post();
                                                global $product; ?>
                                            <div class="block-zone__carousel-item">
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
                                                        <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
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
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                        <div class="product-card__name">
                                                            <div><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                                        <?php woocommerce_template_loop_add_to_cart(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_query(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="<?php echo $Cat_3[$x]; ?>"  class="block-zone__widget-body tab-view-top">
                                    <div class="block-zone__carousel">
                                        <div class="block-zone__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            <?php
                                            $args = array(
                                                // 'product_cat' => 'Sensors',
                                                'product_cat' => $Cat_3[$x],
                                                'posts_per_page' => 4,
                                                // 'orderby' => 'rand'
                                            );
                                            $loop = new WP_Query($args);
                                            while ($loop->have_posts()) : $loop->the_post();
                                                global $product; ?>
                                            <div class="block-zone__carousel-item">
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
                                                        <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
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
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                        <div class="product-card__name">
                                                            <div><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                                        <?php woocommerce_template_loop_add_to_cart(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_query(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="block-space block-space--layout--divider-sm"></div>
                        <?php
                                        }
                                    $x++;
                                    }
                                }else{
                                    ?>
                                   <div class="block block-products-carousel">
                                   <div class="container">
                                   <div class="section-header">
                                   <div class="section-header__body">
                                   <h2 class="section-header__title">
                                    <?php
                                    echo "Data is not found";
                                    ?>
                                    </h2>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <?php
                                }
                                   
                                ?>
                   
                <div class="block-space block-space--layout--divider-nl"></div>
                <div class="block-banners block">
                    <div class="container">
                        <div class="block-banners__list">
                            <a href="#" class="block-banners__item block-banners__item--style--one">
                                <span class="block-banners__item-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/banner1.jpg" alt="" /></span>
                                <span class="block-banners__item-image block-banners__item-image--blur">
                                <img src="<?php  if(!empty($redux_demo['home-page-short-bannar-left']) && isset($redux_demo['home-page-short-bannar-left']['url'])){
                                    echo $redux_demo['home-page-short-bannar-left']['url'];
                                   }else{
                                       echo "Bannar is not found";
                                   }?>" />
                                </span>
                                <span class="block-banners__item-title">
                                <?php
                              if(!empty($redux_demo['bannar-left-title']) && isset($redux_demo['bannar-left-title'])){
                                     echo $redux_demo['bannar-left-title'];
                                    }else{
                                        echo "Title is not found";
                                    }
                                ?>
                                </span>
                                <span class="block-banners__item-details">
                                <?php
                              if(!empty($redux_demo['bannar-left-subtitle']) && isset($redux_demo['bannar-left-subtitle'])){
                                     echo $redux_demo['bannar-left-subtitle'];
                                    }else{
                                        echo "Subtitle is not found";
                                    }
                                ?>
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">Shop Now </span>
                            </a>
                            <a href="#" class="block-banners__item block-banners__item--style--two">
                                <span class="block-banners__item-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/banner2.jpg" alt="" /></span>
                                <span class="block-banners__item-image block-banners__item-image--blur">
                                <img src="<?php  if(!empty($redux_demo['home-page-short-bannar-right']) && isset($redux_demo['home-page-short-bannar-right']['url'])){
                                    echo $redux_demo['home-page-short-bannar-right']['url'];
                                   }else{
                                       echo "Bannar is not found";
                                   }?>" />
                                </span>
                                <span class="block-banners__item-title">
                                <?php
                              if(!empty($redux_demo['bannar-right-title']) && isset($redux_demo['bannar-right-title'])){
                                     echo $redux_demo['bannar-right-title'];
                                    }else{
                                        echo "Title is not found";
                                    }
                                ?>
                                </span>
                                <span class="block-banners__item-details">
                                <?php
                              if(!empty($redux_demo['bannar-right-subtitle']) && isset($redux_demo['bannar-right-subtitle'])){
                                     echo $redux_demo['bannar-right-subtitle'];
                                    }else{
                                        echo "Subtitle is not found";
                                    }
                                ?>
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">Shop Now </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-nl"></div>
                <?php 
                if(!empty($redux_demo['cpl-home-tag-one']) && isset($redux_demo['cpl-home-tag-one']) && !empty($redux_demo['cpl-home-tag-two']) && isset($redux_demo['cpl-home-tag-two']) 
                && !empty($redux_demo['cpl-home-tag-three']) && isset($redux_demo['cpl-home-tag-three'])){
                    $home_tag_one = $redux_demo['cpl-home-tag-one'];
                    //echo $home_tag_one;
                    // }
                //     else{
                //      echo "tag is not found";
                //    }
                // if(!empty($redux_demo['cpl-home-tag-two']) && isset($redux_demo['cpl-home-tag-two'])){
                    $home_tag_two = $redux_demo['cpl-home-tag-two'];
                    //echo $home_tag_two;
                    // }
                //     else{
                //      echo "tag is not found";
                //    }
                // if(!empty($redux_demo['cpl-home-tag-three']) && isset($redux_demo['cpl-home-tag-three'])){
                    $home_tag_three = $redux_demo['cpl-home-tag-three'];
                    //echo $home_tag_three;
                    // }
                //     else{
                //      echo "tag is not found";
                //    }
                ?>
                <div class="block block-products-carousel" data-layout="horizontal">
                    <div class="container">
                        <div class="section-header">
                            <div class="section-header__body">
                                <!-- <h2 class="section-header__title">Others</h2> -->
                                <div class="section-header__spring"></div>
                                <ul class="section-header__links">
                                   
                                    <li class="section-header__links-item"><a  class="section-header__links-link" target="<?php echo $home_tag_one; ?>" onclick="handleTagTab(this)">
                                     <?php  
                                    //  if(!empty($redux_demo['cpl-home-tag-one']) && isset($redux_demo['cpl-home-tag-one'])){
                                    //   $home_tag_one = $redux_demo['cpl-home-tag-one'];
                                      echo $home_tag_one;
                                    //   }else{
                                    //    echo "tag is not found";
                                    //  }
                                     ?> 
                                    </a></li>
                                    <li class="section-header__links-item"><a  class="section-header__links-link" target="<?php echo $home_tag_two; ?>" onclick="handleTagTab(this)">
                                    <?php  
                                    // if(!empty($redux_demo['cpl-home-tag-two']) && isset($redux_demo['cpl-home-tag-two'])){
                                    //   $home_tag_two = $redux_demo['cpl-home-tag-two'];
                                      echo $home_tag_two;
                                    //   }else{
                                    //    echo "tag is not found";
                                    //  }
                                     ?> 
                                    </a></li>
                                    <li class="section-header__links-item"><a  class="section-header__links-link" target="<?php echo $home_tag_three; ?>" onclick="handleTagTab(this)">
                                    <?php  
                                    // if(!empty($redux_demo['cpl-home-tag-three']) && isset($redux_demo['cpl-home-tag-three'])){
                                    //   $home_tag_three = $redux_demo['cpl-home-tag-three'];
                                      echo $home_tag_three;
                                    //   }else{
                                    //    echo "tag is not found";
                                    //  }
                                     ?> 
                                    </a></li>
                                    
                                </ul>
                                <div class="section-header__arrows">
                                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg>
                                        </button>
                                    </div>
                                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11">
                                                <path
                                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="section-header__divider"></div>
                            </div>
                        </div>
                       <!-- main new arrival starts -->
                        <!-- <div class="block-products-carousel__carousel">
                            <div class="block-products-carousel__carousel-loader"></div>
                            <div class="owl-carousel">
                                <?php
                                    // $args = array(
                                    //     'product_cat' => 'Others',
                                    //     'posts_per_page' => 6,
                                    //     'orderby' => 'rand'
                                    // );
                                    // $loop = new WP_Query($args);
                                    // while ($loop->have_posts()) : $loop->the_post();
                                    //     global $product;
                                         ?> 
                                
                                <div class="block-products-carousel__column">
                                    
                                   
                                    <div class="block-products-carousel__cell">
                                        <div class="product-card product-card--layout--horizontal">
                                            <div class="product-card__actions-list">
                                                <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                    <svg width="16" height="16">
                                                        <path
                                                            d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="product-card__image">
                                                <div class="image image--type--product">
                                                <a class="image__body" href="<?php //echo get_permalink($loop->post->ID) ?>" title="<?php //echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php //if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        //else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <div><a href="product-full.html"><?php //the_title(); ?></a></div>
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
                                                    <div class="product-card__rating-label">4 on 16 reviews</div>
                                                </div>
                                            </div>
                                            <div class="product-card__footer">
                                                <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php //echo $product->get_price_html(); ?></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php //endwhile; ?>
                                <?php //wp_reset_query(); ?>
                            </div>
                        </div> -->
                         <!-- main new arrival ends -->
                         <!-- tag one start -->
                         <div id="<?php echo $home_tag_one; ?>" class="block-products-carousel__carousel tag-tab-view current">
                            <div class="block-products-carousel__carousel-loader"></div>
                            <div class="owl-carousel">
                                <?php
                                    $args = array(
                                        'product_tag' => $home_tag_one,
                                        'posts_per_page' => 6,
                                        'orderby' => 'rand'
                                    );
                                    $loop = new WP_Query($args);?>
                                    <?php if ( $loop->have_posts() ) : 
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?> 
                                
                                <div class="block-products-carousel__column">
                                    
                                   
                                    <div class="block-products-carousel__cell">
                                        <div class="product-card product-card--layout--horizontal">
                                            <div class="product-card__actions-list">
                                                <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                    <svg width="16" height="16">
                                                        <path
                                                            d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="product-card__image">
                                                <div class="image image--type--product">
                                                <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <div><a href="product-full.html"><?php the_title(); ?></a></div>
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
                                                    <div class="product-card__rating-label">4 on 16 reviews</div>
                                                </div>
                                            </div>
                                            <div class="product-card__footer">
                                                <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div> 
                         <!-- tag one end -->
                         <!-- tag two start -->
                         <div id="<?php echo $home_tag_two; ?>" class="block-products-carousel__carousel tag-tab-view">
                            <div class="block-products-carousel__carousel-loader"></div>
                            <div class="owl-carousel">
                                <?php
                                    $args = array(
                                        'product_tag' => $home_tag_two,
                                        'posts_per_page' => 6,
                                        'orderby' => 'rand'
                                    );
                                    $loop = new WP_Query($args);?>
                                    <?php if ( $loop->have_posts() ) : 
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?> 
                                
                                <div class="block-products-carousel__column">
                                    
                                   
                                    <div class="block-products-carousel__cell">
                                        <div class="product-card product-card--layout--horizontal">
                                            <div class="product-card__actions-list">
                                                <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                    <svg width="16" height="16">
                                                        <path
                                                            d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="product-card__image">
                                                <div class="image image--type--product">
                                                <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <div><a href="product-full.html"><?php the_title(); ?></a></div>
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
                                                    <div class="product-card__rating-label">4 on 16 reviews</div>
                                                </div>
                                            </div>
                                            <div class="product-card__footer">
                                                <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div> 
                         <!-- tag two end-->
                         <!-- tag three start -->
                         <div id="<?php echo $home_tag_three; ?>" class="block-products-carousel__carousel tag-tab-view">
                            <div class="block-products-carousel__carousel-loader"></div>
                            <div class="owl-carousel">
                                <?php
                                    $args = array(
                                        'product_tag' => $home_tag_three,
                                        'posts_per_page' => 6,
                                        'orderby' => 'rand'
                                    );
                                    $loop = new WP_Query($args);?>
                                    <?php if ( $loop->have_posts() ) : 
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?> 
                                
                                <div class="block-products-carousel__column">
                                    
                                   
                                    <div class="block-products-carousel__cell">
                                        <div class="product-card product-card--layout--horizontal">
                                            <div class="product-card__actions-list">
                                                <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                    <svg width="16" height="16">
                                                        <path
                                                            d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="product-card__image">
                                                <div class="image image--type--product">
                                                <a class="image__body" href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                         <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                        else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <div><a href="product-full.html"><?php the_title(); ?></a></div>
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
                                                    <div class="product-card__rating-label">4 on 16 reviews</div>
                                                </div>
                                            </div>
                                            <div class="product-card__footer">
                                                <div class="product-card__prices"><div class="product-card__price product-card__price--current"><?php echo $product->get_price_html(); ?></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div> 
                         <!-- tag three end-->
                    </div>
                </div>
                <?Php 
                }
                else {
                    ?>
                    <div class="block block-products-carousel">
                    <div class="container">
                    <div class="section-header">
                    <div class="section-header__body">
                    <h2 class="section-header__title">
                     <?php
                     echo "Data is not found";
                     ?>
                     </h2>
                     </div>
                     </div>
                     </div>
                     </div>
                     <?php
                }
                ?>
                <!-- ######################## -->
                <!-- <div class="grid-container">
                <div class="grid-item">1</div>
                <div class="grid-item">2</div>
                <div class="grid-item">3</div>  
                <div class="grid-item">4</div>
                <div class="grid-item">5</div>
                <div class="grid-item">6</div>  
                <div class="grid-item">7</div>
                <div class="grid-item">8</div>
                <div class="grid-item">9</div>  
                </div> -->
                <!-- ############################### -->
                <div class="block-space block-space--layout--divider-nl"></div>
                <?php 
                 if(!empty($redux_demo['cpl-home-post-type-one']) && isset($redux_demo['cpl-home-post-type-one']) && !empty($redux_demo['cpl-home-post-type-tag-one']) && isset($redux_demo['cpl-home-post-type-tag-one']) &&
                 !empty($redux_demo['cpl-home-post-type-tag-two']) && isset($redux_demo['cpl-home-post-type-tag-two']) && !empty($redux_demo['cpl-home-post-type-tag-three']) && isset($redux_demo['cpl-home-post-type-tag-three'])){
                    $home_custom_post = $redux_demo['cpl-home-post-type-one'];
                    $custom_post_tag_one= $redux_demo['cpl-home-post-type-tag-one'];
                    $custom_post_tag_two = $redux_demo['cpl-home-post-type-tag-two'];
                    $custom_post_tag_three = $redux_demo['cpl-home-post-type-tag-three'];
                    //echo $home_custom_post;
                   
                ?>
                <div class="block block-posts-carousel block-posts-carousel--layout--grid" data-layout="grid">
                    <div class="container">
                        <!-- custom post type news  -->
                       
                        <!-- custom post type news ends -->
                        <div class="section-header">
                            <div class="section-header__body">
                                <h2 class="section-header__title">
                                <?php  
                                    //  if(!empty($redux_demo['cpl-home-post-type-one']) && isset($redux_demo['cpl-home-post-type-one'])){
                                    //   $home_custom_post = $redux_demo['cpl-home-post-type-one'];
                                      echo $home_custom_post;
                                    //   }else{
                                    //    echo "Custom post type is not found";
                                    //  }
                                     ?>  
                                </h2>
                                <div class="section-header__spring"></div>
                                <ul class="section-header__links">
                                    <li class="section-header__links-item"><a class="section-header__links-link" target="<?php echo $custom_post_tag_one; ?>" onclick="handleLatestNews(this)">
                                    <?php 
                                    //  if(!empty($redux_demo['cpl-home-post-type-tag-one']) && isset($redux_demo['cpl-home-post-type-tag-one'])){
                                    //   $custom_post_tag_one= $redux_demo['cpl-home-post-type-tag-one'];
                                      echo $custom_post_tag_one;
                                    //   }else{
                                    //    echo "tag is not found";
                                    //  }
                                     ?>  
                                    </a></li>
                                    <li class="section-header__links-item"><a class="section-header__links-link" target="<?php echo $custom_post_tag_two; ?>" onclick="handleLatestNews(this)">
                                    <?php  
                                    // if(!empty($redux_demo['cpl-home-post-type-tag-two']) && isset($redux_demo['cpl-home-post-type-tag-two'])){
                                    //   $custom_post_tag_two = $redux_demo['cpl-home-post-type-tag-two'];
                                      echo $custom_post_tag_two;
                                    //   }else{
                                    //    echo "tag is not found";
                                    //  }
                                     ?>  
                                    </a></li>
                                    <li class="section-header__links-item"><a class="section-header__links-link" target="<?php echo $custom_post_tag_three; ?>" onclick="handleLatestNews(this)">
                                    <?php  
                                    // if(!empty($redux_demo['cpl-home-post-type-tag-three']) && isset($redux_demo['cpl-home-post-type-tag-three'])){
                                    //   $custom_post_tag_three = $redux_demo['cpl-home-post-type-tag-three'];
                                      echo $custom_post_tag_three;
                                    //   }else{
                                    //    echo "tag is not found";
                                    //  }
                                     ?>  
                                    </a></li>
                                </ul>
                                <div class="section-header__arrows">
                                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg>
                                        </button>
                                    </div>
                                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                        <button class="arrow__button" type="button">
                                            <svg width="7" height="11">
                                                <path
                                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="section-header__divider"></div>
                            </div>
                        </div>
                        <div id="<?php echo $custom_post_tag_one; ?>" class="block-posts-carousel__carousel latest-news-view active">
                        <div class="owl-carousel">
                                
                                <?php 
                                if(isset($custom_post_tag_three)){
                                $args = array( 'post_type' => 'news', 'category_name' => $custom_post_tag_one, 'posts_per_page' => 10 );
                                $the_query = new WP_Query( $args ); 
                                ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <!-- code static -->
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                       
                                            <a href="post-full-width.html"><img src='<?php the_post_thumbnail_url(); ?>' ></a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category"><a href="blog-classic-right-sidebar.html"> <?php echo the_category(); ?></a></div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="post-card__date">By <a href="#"><?php the_author(); ?> </a> on <?php echo get_the_date(); ?></div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                     <?php the_content(); ?> 
                                                </div>
                                            </div>
                                            <div class="post-card__more"><a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- code static -->
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                <?php endif; ?>
                                <?php } ?>
                                <!-- code static last -->
                            </div>
                        </div>
                        <div id="<?php echo $custom_post_tag_two; ?>" class="block-posts-carousel__carousel latest-news-view">
                        <div class="owl-carousel">
                                
                                <?php 
                                $args = array( 'post_type' => 'news', 'category_name' => $custom_post_tag_two, 'posts_per_page' => 10 );
                                $the_query = new WP_Query( $args ); 
                                ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <!-- code static -->
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                       
                                            <a href="post-full-width.html"><img src='<?php the_post_thumbnail_url(); ?>' ></a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category"><a href="blog-classic-right-sidebar.html"> <?php echo the_category(); ?></a></div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="post-card__date">By <a href="#"><?php the_author(); ?> </a> on <?php echo get_the_date(); ?></div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                     <?php the_content(); ?> 
                                                </div>
                                            </div>
                                            <div class="post-card__more"><a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- code static -->
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                <?php endif; ?>
                                <!-- code static last -->
                            </div>
                        </div>
                        <div id="<?php echo $custom_post_tag_three; ?>" class="block-posts-carousel__carousel latest-news-view">
                        <div class="owl-carousel">
                                
                                <?php 
                                $args = array( 'post_type' => 'news', 'category_name' => $custom_post_tag_three, 'posts_per_page' => 10 );
                                $the_query = new WP_Query( $args ); 
                                ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <!-- code static -->
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                       
                                            <a href="post-full-width.html"><img src='<?php the_post_thumbnail_url(); ?>' ></a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category"><a href="blog-classic-right-sidebar.html"> <?php echo the_category(); ?></a></div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="post-card__date">By <a href="#"><?php the_author(); ?> </a> on <?php echo get_the_date(); ?></div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                     <?php the_content(); ?> 
                                                </div>
                                            </div>
                                            <div class="post-card__more"><a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- code static -->
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                <?php endif; ?>
                                <!-- code static last -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } 
                else {
                    ?>
                    <div class="block block-products-carousel">
                    <div class="container">
                    <div class="section-header">
                    <div class="section-header__body">
                    <h2 class="section-header__title">
                     <?php
                     echo "Data is not found";
                     ?>
                     </h2>
                     </div>
                     </div>
                     </div>
                     </div>
                     <?php
                }?>
                <div class="block-space block-space--layout--divider-nl"></div>
                <div class="block block-brands block-brands--layout--columns-8-full">
                    <div class="container">
                    <ul class="block-brands__list">
                                <?php 
                                    global $redux_demo;
                                    if(isset($redux_demo['cpl-home-brand-section-fields-new'])){
                                        $brands = $redux_demo['cpl-home-brand-section-fields-new'];
                                        
                                    }else{
                                        $brands = "";
                                    }
                                    
                                    //print_r($repeaters);
                                    if(isset($redux_demo['cpl-home-brand-section-fields-new'])){
                                        $brand_titles= $redux_demo['cpl-home-brand-title-new'];
                                    }else{
                                        $brand_titles = "";
                                    }
                                   
                                    if(isset($redux_demo['cpl-home-brand-section-fields-new'])){
                                        $brand_images = $redux_demo['cpl-home-brand-image-new'];
                                    }else{
                                        $brand_images = "";
                                    }
                                    
                                    // print_r($photoes[1]['url']);
                                    // print_r($names[1]);
                                ?>
                                <?php
                                  if(isset($redux_demo['cpl-home-brand-section-fields-new'])){
                                    $first_count = count($brand_titles);
                                //    var_export($photoes);
                                    $x = 0;
                                    while($x < $first_count) {
                                    
                               
                                    // foreach ($names as $name) {
                                ?>
                                <?php
                                if(!empty($redux_demo['cpl-home-brand-section-fields-new'])){
                                    ?>
                                <li class="block-brands__item">
                                     <a href="#" class="block-brands__item-link">
                                     <img src="<?php echo $brand_images[$x]['url'] ?>" alt="" /> 
                                     <span class="block-brands__item-name"><?php 
                                            
                                                echo($brand_titles)[$x];
                                             
                                            ?></span></a>
                                </li>
                                 <li class="block-brands__divider" role="presentation"></li>
                                 
                                            
                                           
                                <?php
                                        }
                                    $x++;
                                    }
                                }else{
                                    echo "Brand is not found";
                                }
                                   
                                ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-nl d-xl-block d-none"></div>
                <?php 
                  if(!empty($redux_demo['last-section-product-category-one']) && isset($redux_demo['last-section-product-category-one']) && !empty($redux_demo['last-section-product-category-two']) 
                  && isset($redux_demo['last-section-product-category-two']) && !empty($redux_demo['last-section-product-category-three']) && isset($redux_demo['last-section-product-category-three'])){
                    $last_sec_cat_one =  $redux_demo['last-section-product-category-one'];
                    $last_sec_cat_two = $redux_demo['last-section-product-category-two'];
                    $last_sec_cat_three =  $redux_demo['last-section-product-category-three'];
                ?>
                <?php //echo do_shortcode('[wpcs id=118]'); ?>
                <div class="block block-products-columns">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                            <div class="block-products-columns__title">
                                <?php 
                                //  if(!empty($redux_demo['last-section-product-category-one']) && isset($redux_demo['last-section-product-category-one'])){
                                //     $last_sec_cat_one =  $redux_demo['last-section-product-category-one'];
                                    echo $last_sec_cat_one;
                                //    }else{
                                //        echo "Category is not found";
                                //    }
                                ?>
                            </div>
                                <div class="block-products-columns__list">
                                    <!-- #################### -->
                                    <?php
                                    $args = array(
                                        'product_cat' => $last_sec_cat_one,
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand'
                                    );
                                    $loop = new WP_Query($args);
                                    if ( $loop->have_posts() ) : 
                                    while ($loop->have_posts()) : $loop->the_post();
                                        
                                        global $product; ?>
                                        <!-- <div class="row"> -->
                                            <!-- <h2>Shampoo</h2> -->
                                             <!-- ************** -->
                                             
                                             <div class="block-products-columns__list-item">
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
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                    else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder"  />'; ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__name">
                                                            <div>
                                                                <!-- <div class="product-card__badges"><div class="tag-badge tag-badge--sale">sale</div></div> -->
                                                                <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"><?php the_title(); ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <?php echo $product->get_price_html(); ?>
                                                            <!-- <div class="product-card__price product-card__price--new">$349.00</div>
                                                            <div class="product-card__price product-card__price--old">$415.00</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <!-- ******************* -->
                                        <!-- </div> -->
                                        <?php endwhile;
                                        wp_reset_postdata(); ?>
                                        <?php else:  ?>
                                        <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                        <?php endif; ?>
                                    <!-- ###################### -->
                                    <!-- <div class="block-products-columns__list-item">
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
                                            </div>
                                            <div class="product-card__image">
                                                <div class="image image--type--product">
                                                    <a href="product-full.html" class="image__body"><img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-3-245x245.jpg" alt="" /></a>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <div>
                                                        <div class="product-card__badges"><div class="tag-badge tag-badge--sale">sale</div></div>
                                                        <a href="product-full.html">Left Headlight Of Brandix Z54</a>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating">
                                                    <div class="rating product-card__rating-stars">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__rating-label">3 on 14 reviews</div>
                                                </div>
                                            </div>
                                            <div class="product-card__footer">
                                                <div class="product-card__prices">
                                                    <div class="product-card__price product-card__price--new">$349.00</div>
                                                    <div class="product-card__price product-card__price--old">$415.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-products-columns__title">
                                <?php 
                                //  if(!empty($redux_demo['last-section-product-category-two']) && isset($redux_demo['last-section-product-category-two'])){
                                //     $last_sec_cat_two = $redux_demo['last-section-product-category-two'];
                                    echo $last_sec_cat_two;
                                //    }else{
                                //        echo "Category is not found";
                                //    }
                                ?>
                                </div>
                                <div class="block-products-columns__list">
                                   <!-- #################### -->
                                   <?php
                                    $args = array(
                                        'product_cat' => $last_sec_cat_two,
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand'
                                    );
                                    $loop = new WP_Query($args); 
                                    if ( $loop->have_posts() ) : 
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?>
                                            <!-- <h2>Shampoo</h2> -->
                                             <!-- ************** -->
                                             <div class="block-products-columns__list-item">
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
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                    else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder"  />'; ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__name">
                                                            <div>
                                                                <!-- <div class="product-card__badges"><div class="tag-badge tag-badge--sale">sale</div></div> -->
                                                                <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"><?php the_title(); ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <?php echo $product->get_price_html(); ?>
                                                            <!-- <div class="product-card__price product-card__price--new">$349.00</div>
                                                            <div class="product-card__price product-card__price--old">$415.00</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <!-- ******************* -->
                                             <?php endwhile;
                                            wp_reset_postdata(); ?>
                                            <?php else:  ?>
                                            <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                            <?php endif; ?>
                                    <!-- ###################### -->
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-products-columns__title">
                                <?php 
                                //  if(!empty($redux_demo['last-section-product-category-three']) && isset($redux_demo['last-section-product-category-three'])){
                                //     $last_sec_cat_three =  $redux_demo['last-section-product-category-three'];
                                    echo $last_sec_cat_three;
                                //    }else{
                                //        echo "Category is not found";
                                //    }
                                ?>
                                </div>
                                <div class="block-products-columns__list">
                                   <!-- #################### -->
                                   <?php
                                    $args = array(
                                        'product_cat' => $last_sec_cat_three,
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand'
                                    );
                                    $loop = new WP_Query($args);
                                    if ( $loop->have_posts() ) : 
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?>
                                            <!-- <h2>Shampoo</h2> -->
                                             <!-- ************** -->
                                             <div class="block-products-columns__list-item">
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
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="image__body">
                                                            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                                                    else echo '<img src="' . woocommerce_placeholder_img_src() . '" class="image__tag" alt="Placeholder"  />'; ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__name">
                                                            <div>
                                                                <!-- <div class="product-card__badges"><div class="tag-badge tag-badge--sale">sale</div></div> -->
                                                                <a href="<?php echo get_permalink($loop->post->ID) ?>" ><?php the_title(); ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <?php echo $product->get_price_html(); ?>
                                                            <!-- <div class="product-card__price product-card__price--new">$349.00</div>
                                                            <div class="product-card__price product-card__price--old">$415.00</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <!-- ******************* -->
                                             <?php endwhile;
                                            wp_reset_postdata(); ?>
                                            <?php else:  ?>
                                            <p><?php _e( 'Sorry, no matching data is found.' ); ?></p>
                                            <?php endif; ?>
                                    <!-- ###################### -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                  }
                else{
                    ?>
                    <div class="block block-products-carousel">
                    <div class="container">
                    <div class="section-header">
                    <div class="section-header__body">
                    <h2 class="section-header__title">
                    <?php
                    echo "Data is not found";
                    ?>
                    </h2>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php
                }
                      
                ?>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
           
            <!-- site__body / end --><!-- site__footer -->
            <?php get_footer(); ?>

