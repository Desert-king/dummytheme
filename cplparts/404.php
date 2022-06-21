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
                                 if(!empty($redux_demo['cpl-404-warning']) && isset($redux_demo['cpl-404-warning'])){
                                    echo $redux_demo['cpl-404-warning']; 
                                 }else{
                                    echo "404 warning is not found";
                                }
                            ?>
                            </div>
                            <div class="not-found__content">
                                <h1 class="not-found__title">
                                <?php
                                 if(!empty($redux_demo['cpl-404-title']) && isset($redux_demo['cpl-404-title'])){
                                    echo $redux_demo['cpl-404-title']; 
                                 }else{
                                    echo "404 title is not found";
                                }
                                 ?>
                                </h1>
                                <p class="not-found__text">
                                   <?php 
                                    if(!empty($redux_demo['cpl-404-first-content']) && isset($redux_demo['cpl-404-first-content'])){
                                       echo $redux_demo['cpl-404-first-content']; 
                                    }else{
                                        echo "First content is not found";
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
                                    if(!empty($redux_demo['cpl-404-second-content']) && isset($redux_demo['cpl-404-second-content'])){
                                       echo $redux_demo['cpl-404-second-content']; 
                                    }else{
                                        echo "Second-content is not found";
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