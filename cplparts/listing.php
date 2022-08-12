<?php
/*
Template Name: listing
*/
?>
<?php get_header(); ?>
            <!-- site__header / end --><!-- site__body -->
            <div class="site__body">
                <div class="block-space block-space--layout--spaceship-ledge-height"></div>
                <div class="block">
                    <div class="container">
            
               <h1>hello</h1>
               
               <ul class="products">
                    <?php
                    $args = array(
                        'post_type'      => 'product',
                        //'posts_per_page' => 2,
                        'orderby' => 'rand',
                        'paged' => !empty($_GET['pg']) ? absint($_GET['pg']) : 1,

                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        global $product; ?>
                        <div class="row">
                            <!-- <h2>Shampoo</h2> -->
                            <li class="product">

                                <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                                    <?php woocommerce_show_product_sale_flash($post, $product); ?>

                                    <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                    else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />'; ?>

                                    <h3><?php the_title(); ?></h3>

                                    <span class="price"><?php echo $product->get_price_html(); ?></span>

                                </a>

                                <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>
                            </li>
                        </div>
                    <?php endwhile; ?>
                    <?php //next_posts_link(); ?>
                    <?php //previous_posts_link(); ?>
                      <!-- Added for last pagination -->
									<?php
									// $myQuery = new WP_Query();

									// $cars = $myQuery->query([
									// 	'post_type' => 'product',
                                    //     //'posts_per_page' => 3,
									// 	'paged' => !empty($_GET['pg']) ? absint($_GET['pg']) : 1,
									// ]);

									// foreach ($cars as $car) {
									// 	echo $car->post_title;
                                    //     echo ("</br>");
									// }

									echo myPaginateLinks($loop);
                                    
									?>
									<!-- Added for last pagination -->
                    <?php wp_reset_query(); ?>
                </ul>
                
<!--/.products-->
                    </div>
                    </div>
                    </div>
			<?php get_footer(); ?>