<?php
/*
Template Name: 404-page
*/
?>
           <?php get_header(); ?>
            <!-- site__header / end --><!-- site__body -->
            <div class="site__body">
                <div class="block-space block-space--layout--spaceship-ledge-height"></div>
                <div class="block">
                    <div class="container">
                        <div class="not-found">
                            <div class="not-found__404">
                            <?php  
                                 global $redux_demo; // Same as your opt_name
                                 if(isset($redux_demo['cpl-404-warning'])){
                                    echo $redux_demo['cpl-404-warning']; 
                                 }
                            ?>
                            </div>
                            <div class="not-found__content">
                                <h1 class="not-found__title">
                                <?php  
                                global $redux_demo; // Same as your opt_name
                                 if(isset($redux_demo['cpl-404-title'])){
                                    echo $redux_demo['cpl-404-title']; 
                                 }
                                 ?>
                                </h1>
                                <p class="not-found__text">
                                   <?php 
                                    global $redux_demo; // Same as your opt_name
                                    if(isset($redux_demo['cpl-404-first-content'])){
                                       echo $redux_demo['cpl-404-first-content']; 
                                    }
                                   ?>
                                </p>
                                <!-- <form class="not-found__search">
                                    <input type="text" name="s" class="not-found__search-input form-control" placeholder="Search Query..." /> <button type="submit" class="not-found__search-button btn btn-primary">Search</button>
                                </form> -->
                                <div>
                                <?php get_search_form(); ?>
                                </div>
                                <!-- <form id="content" action="/">
                                    <input type="text" name="s" class="input" id="search-input">
                                    <button type="reset" class="search" id="search-btn"></button>
                                </form> -->
                                <p class="not-found__text">
                                <?php 
                                    global $redux_demo; // Same as your opt_name
                                    if(isset($redux_demo['cpl-404-second-content'])){
                                       echo $redux_demo['cpl-404-second-content']; 
                                    }
                                   ?>
                                </p>
                                <a class="btn btn-secondary btn-sm" href="<?php bloginfo('url'); ?>">Go To Home Page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end --><!-- site__footer -->
			<?php get_footer(); ?>