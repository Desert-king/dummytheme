<?php 
global $product;

?>
<div class="block-split__item block-split__item-sidebar col-auto">
    <div class="sidebar sidebar--offcanvas--mobile">
        <div class="sidebar__backdrop"></div>
        <div class="sidebar__body">
            <div class="sidebar__header">
                <div class="sidebar__title">Filters</div>
                <button class="sidebar__close" type="button">
                    <svg width="12" height="12">
                        <path
                            d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
C11.2,9.8,11.2,10.4,10.8,10.8z"
                        />
                    </svg>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="widget widget-filters widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                    <div class="widget__header widget-filters__header"><h4>Filters</h4></div>
                    <div class="widget-filters__list">
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Categories
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-categories">
                                            <ul class="filter-categories__list">
                                                <?php
                                                        wp_nav_menu(    
                                                            array(
                                                                'theme_location' => 'category-of-Products',
                                                                'container' => '',
                                                                'menu_class' => '',
                                                                // 'items_wrap' => '<ul  id="detail-page-menu" class="main-menu__list">%3$s</ul>',
                                                                // 'add_li_class'  => 'main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu',
                                                                'depth' => '2',
                                                            )

                                                        );
                                                ?>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <?php 
                            
                        ?>
                        <?php 
                          add_shortcode( 'product_attributes', 'get_product_attributes' );
                          function get_product_attributes() {
                              $output = '<div style="list-style:inline-block;">';
                              foreach( wc_get_attribute_taxonomies() as $attribute ) {
                                  $taxonomy = 'pa_' . $attribute->attribute_name;
                                  $term_names = get_terms( array( 'taxonomy' => $taxonomy, 'fields' => 'names' ) );

                                  //print_r($term_names);
                                  
                                  $output .= '<div class="widget-filters__item">
                                  <div class="filter filter--opened" data-collapse-item> <button type="button" class="filter__title" data-collapse-trigger>' . $attribute->attribute_name . '
                                  <span class="filter__arrow">
                                  <svg width="12px" height="7px">
                                      <path
                                          d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                      />
                                  </svg>
                                  </span>
                                  </button> 
                                  <div class="filter__body" data-collapse-content>  
                                       <div class="filter__container">
                                            <div class="filter-vehicle">
                                                 <ul class="filter-vehicle__list"><li class="filter-vehicle__item">'. implode( '<li class="filter-vehicle__item">
                                                        <span class="filter-vehicle__item-title">', $term_names) .'</span></li></li></ul></div></div></div></div></div>';
                              }
                              return $output . '</div>';
                          }
                          

                        ?>
                        <?php echo do_shortcode('[product_attributes]'); ?>
                        <!-- new code -->
                       
                        <div class="widget-filters__list" style="list-style:inline-block;">
                        <form method="get" class="" id="shop_filter" action="<?php echo esc_url( home_url( '/shop' ) ); ?>">
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Categories
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-categories">
                                           
                                           <?php
                                           $args=array(
                                             'orderby' => 'name',
                                             'order' => 'ASC',
                                           )
                                           
                                           // A $count variable
                                           ?>
                                           <?php foreach (get_categories( $args ) as $cat) :
                                            // Increment $count variable
                                            ?>
                                           <h3><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a></h3>
                                           <a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" /></a>
                                           <?php endforeach; ?>
                                          


                                           <input type="text" name="category" value="<?php if(isset($_GET['category'])){
                                                echo $_GET['category'];
                                            } ?>" id="category">
                                       
                                            <ul class="filter-categories__list">
                                                

                                                <?php 
                                                //$term_country = get_terms( array( 'taxonomy' => 'pa_country', 'fields' => 'names' ) );
                                                $arg = array('post_type' => 'product', 'taxonomy' => 'category', 'title'  => '');
                                                $all_categories = get_categories( $args );
                                                print_r($all_categories);
                                                foreach ($all_categories as $category){
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="javascript:void(0)" onclick="selectCategory('category', '<?php echo $category->name; ?>')"><?php echo $category->name; ?></a>
                                                        </li>


                                                    <?php
                                                }
                                                ?>
                                            </ul>

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  name="brand" class="widget-filters__item" aria-label="Vehicle Make">
                    
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger="">Country
                                  <span class="filter__arrow">
                                  <svg width="12px" height="7px">
                                      <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path>
                                  </svg>
                                  </span>
                                  </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-categories">
                                        
                                            <input type="text" name="country" value="<?php if(isset($_GET['country'])){
                                                echo $_GET['country'];
                                            } ?>" id="country">
                                       
                                            <ul class="filter-categories__list">
                                                

                                                <?php 
                                                $term_country = get_terms( array( 'taxonomy' => 'pa_country', 'fields' => 'names' ) );
                                                foreach ($term_country as $country){
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="javascript:void(0)" onclick="selectCategory('country', '<?php echo $country; ?>')"><?php echo $country; ?></a>
                                                        </li>


                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div  name="brand" class="widget-filters__item" aria-label="Vehicle Make">
                    
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger="">Brand
                                  <span class="filter__arrow">
                                  <svg width="12px" height="7px">
                                      <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path>
                                  </svg>
                                  </span>
                                  </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-categories">
                                        <input type="text" name="brand" value="<?php if(isset($_GET['brand'])){
                                            echo $_GET['brand'];
                                        } ?>" id="brand">
                                        <ul class="filter-categories__list">
                                              

                                              <?php 
                                              $term_brand = get_terms( array( 'taxonomy' => 'pa_brand', 'fields' => 'names' ) );
                                              foreach ($term_brand as $brand){
                                                  ?>
                                                   
                                                      <li class="filter-categories__item filter-categories__item--child">
                                                          <a href="javascript:void(0)" onclick="selectCategory('brand', '<?php echo $brand; ?>')"><?php echo $brand; ?></a>
                                                      </li>


                                                  <?php
                                              }
                                              ?>
                                          </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  name="material" class="widget-filters__item" aria-label="Vehicle Make">
                    
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger="">Material
                                  <span class="filter__arrow">
                                  <svg width="12px" height="7px">
                                      <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path>
                                  </svg>
                                  </span>
                                  </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-categories">
                                        
                                  
                                        <input type="text" name="material" value="<?php if(isset($_GET['material'])){
                                            echo $_GET['material'];
                                        } ?>" id="material">
                                       
                                        <ul class="filter-categories__list">
                                              

                                              <?php 
                                              $term_material = get_terms( array( 'taxonomy' => 'pa_material', 'fields' => 'names' ) );
                                              foreach ($term_material as $material){
                                                  ?>
                                                      <li class="filter-categories__item filter-categories__item--child">
                                                          <a href="javascript:void(0)" onclick="selectCategory('material', '<?php echo $material; ?>')"><?php echo $material; ?></a>
                                                      </li>


                                                  <?php
                                              }
                                              ?>
                                          </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm"  type="submit">Filter</button> <button class="btn btn-secondary btn-sm">Reset</button></div>
                        </form>
                        </div>
                        
                        
                        <!-- new code end -->
                        
                    </div>
                    <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button> <button class="btn btn-secondary btn-sm">Reset</button></div>
                </div>
                <?php  
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 5,
                    );

                    $loop = new WP_Query( $args );
                    ?>
                        <div class="card widget widget-products">
                        <div class="widget__header"><h4>Latest Products</h4></div>
                        <div class="widget-products__list">
                    <?php
                        
                    
                    
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                        ?>
                        <div class="widget-products__item">
                        <div class="widget-products__image image image--type--product">
                            <a class="image__body"  href="<?php echo get_permalink($loop->post->ID) ?>">
                            <!-- <img class="image__tag" src="<?php //echo get_the_post_thumbnail($loop->post->ID, 'thumbnail'); ?>" alt="" /> -->
                            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                            else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>  
                            </a>
                        </div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
                            <div class="widget-products__prices"><div class="widget-products__price widget-products__price--current"><?php echo $product->get_price_html(); ?></div></div>
                        </div>
                        </div>
                    <?php 
                    //echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>'; 
                    endwhile;
                    ?> 
                    </div> 
                    </div> 
                    <?php
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>