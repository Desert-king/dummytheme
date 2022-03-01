<!-- <div id="sidebar-primary" class="sidebar">
    <?php //dynamic_sidebar( 'primary' ); ?>
</div> -->

<!-- <div id="primary" class="sidebar"> -->
    <?php //do_action( 'before_sidebar' ); ?>
    <?php //if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
        <!-- <aside id="search" class="widget widget_search">
           <?php //get_search_form(); ?>
        </aside>
        <aside id="archives" class"widget">
            <h3 class="widget-title"><?php //_e( 'Archives', 'shape' ); ?></h3>
            <ul>
                <?php //wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php //_e( 'Meta', 'shape' ); ?></h3>
            <ul>
                <?php //wp_register(); ?>
                <li><?php //wp_loginout(); ?></li>
                <?php //wp_meta(); ?>
            </ul>
        </aside> -->
   <?php //endif; ?>
<!-- </div> -->

<?php if ( is_active_sidebar( 'primary' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'primary' ); ?>
    </div>
<?php endif; ?>

<div class="block-split__item block-split__item-sidebar col-auto">
    <div class="card widget widget-categories">
        <div class="widget__header"><h4>Categories</h4></div>
        <ul class="widget-categories__list widget-categories__list--root" data-collapse data-collapse-opened-class="widget-categories__item--open">
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
            <!-- <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Tools & Garage</a></li>
            <li class="widget-categories__item" data-collapse-item>
                <a href="#" class="widget-categories__link">Headlights & Lighting </a><button class="widget-categories__expander" type="button" data-collapse-trigger></button>
                <div class="widget-categories__container" data-collapse-content>
                    <ul class="widget-categories__list widget-categories__list--child">
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Headlights</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Tail Lights</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Fog Lights</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Turn Signals</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Switches & Relays</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Corner Lights</a></li>
                    </ul>
                </div>
            </li>
            <li class="widget-categories__item" data-collapse-item>
                <a href="#" class="widget-categories__link">Interior Parts </a><button class="widget-categories__expander" type="button" data-collapse-trigger></button>
                <div class="widget-categories__container" data-collapse-content>
                    <ul class="widget-categories__list widget-categories__list--child">
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Floor Mats</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Gauges</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Consoles & Organizers</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Mobile Electronics</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Steering Wheels</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Cargo Accessories</a></li>
                    </ul>
                </div>
            </li>
            <li class="widget-categories__item" data-collapse-item>
                <a href="#" class="widget-categories__link">Engine & Drivetrain </a><button class="widget-categories__expander" type="button" data-collapse-trigger></button>
                <div class="widget-categories__container" data-collapse-content>
                    <ul class="widget-categories__list widget-categories__list--child">
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Air Filters</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Oxygen Sensors</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Heating</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Exhaust</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Cranks & Pistons</a></li>
                    </ul>
                </div>
            </li>
            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Repair Manuals</a></li>
            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Suspension</a></li>
            <li class="widget-categories__item" data-collapse-item>
                <a href="#" class="widget-categories__link">Body Parts </a><button class="widget-categories__expander" type="button" data-collapse-trigger></button>
                <div class="widget-categories__container" data-collapse-content>
                    <ul class="widget-categories__list widget-categories__list--child">
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Bumpers</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Hoods</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Grilles</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Fog Lights</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Door Handles</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Car Covers</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Tailgates</a></li>
                    </ul>
                </div>
            </li>
            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Fuel Systems</a></li>
            <li class="widget-categories__item" data-collapse-item>
                <a href="#" class="widget-categories__link">Brakes & Suspension </a><button class="widget-categories__expander" type="button" data-collapse-trigger></button>
                <div class="widget-categories__container" data-collapse-content>
                    <ul class="widget-categories__list widget-categories__list--child">
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Brake Discs</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Wheel Hubs</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Air Suspension</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Ball Joints</a></li>
                        <li class="widget-categories__item"><a href="#" class="widget-categories__link">Brake Pad Sets</a></li>
                    </ul>
                </div>
            </li>
            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Steering</a></li>
            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Transmission</a></li>
            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Air Filters</a></li> -->
        </ul>
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