<?php
/*
Template Name: Terms-page
*/
?>
<?php get_header(); ?>
            
            <!-- site__header / end --><!-- site__body -->
            <div class="site__body">
                <div class="block-space block-space--layout--spaceship-ledge-height"></div>
                <div class="block">
                    <div class="container">
                        <div class="document">
                            <div class="document__header">
                                <h1 class="document__title">
                                <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['terms-page-title']; 
                                ?>
                                </h1>
                                <div class="document__subtitle">
                                <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['terms-page-subtitle']; 
                                ?>
                                </div>
                            </div>
                            <div class="document__content card">
                                <div class="typography">
                                    <!-- <p> -->
                                    <?php  global $redux_demo; // Same as your opt_name
                                    echo $redux_demo['terms-description']; 
                                    ?>
                                    <!-- </p> -->
                                    <h2>
                                    <?php  global $redux_demo; // Same as your opt_name
                                    echo $redux_demo['terms-section-one-title']; 
                                    ?>
                                    </h2>
                                    <?php  global $redux_demo; // Same as your opt_name
                                    echo $redux_demo['terms-section-one-content']; 
                                    ?>
                                    <h2>
                                    <?php  global $redux_demo; // Same as your opt_name
                                    echo $redux_demo['terms-section-two-title']; 
                                    ?>
                                    </h2>
                                    <?php  global $redux_demo; // Same as your opt_name
                                    echo $redux_demo['terms-section-two-content']; 
                                    ?>
                                    <!-- <p> -->
                                    
                                    <!-- </p>
                                    <p>For information about how to contact us, please visit our <a href="contact-us.html">contact page</a>. -->
                                    <!-- </p> -->
                                    <div class="document__signature">
                                    <img src="<?php  global $redux_demo; // Same as your opt_name
                                    echo $redux_demo['terms-author-signature']['url'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end --><!-- site__footer -->
            <?php get_footer(); ?>