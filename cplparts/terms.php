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
                                <?php 
                                 if(isset($redux_demo['terms-page-title'])){
                                    echo $redux_demo['terms-page-title'];
                                   }else{
                                       echo "Term page title is not found";
                                   }
                                ?>
                                </h1>
                                <div class="document__subtitle">
                                <?php  
                                 if(isset($redux_demo['terms-page-subtitle'])){
                                    echo $redux_demo['terms-page-subtitle'];
                                   }else{
                                       echo "Term page subtitle is not found";
                                   }
                                ?>
                                </div>
                            </div>
                            <div class="document__content card">
                                <div class="typography">
                                    <!-- <p> -->
                                    <?php  
                                    if(isset($redux_demo['terms-description'])){
                                        echo $redux_demo['terms-description'];
                                       }else{
                                           echo "Description is not found";
                                       }
                                    ?>
                                    <!-- </p> -->
                                    <h2>
                                    <?php  
                                    if(isset($redux_demo['terms-section-one-title'])){
                                        echo $redux_demo['terms-section-one-title'];
                                       }else{
                                           echo "Section one title is not found";
                                       }
                                    ?>
                                    </h2>
                                    <?php 
                                    if(isset($redux_demo['terms-section-one-content'])){
                                        echo $redux_demo['terms-section-one-content'];
                                       }else{
                                           echo "Section one content is not found";
                                       } 
                                    ?>
                                    <h2>
                                    <?php 
                                    if(isset($redux_demo['terms-section-two-title'])){
                                        echo $redux_demo['terms-section-two-title'];
                                       }else{
                                           echo "Section two title is not found";
                                       } 
                                    ?>
                                    </h2>
                                    <?php  
                                    if(isset($redux_demo['terms-section-two-content'])){
                                        echo $redux_demo['terms-section-two-content'];
                                       }else{
                                           echo "Section two content is not found";
                                       } 
                                    ?>
                                    <!-- <p> -->
                                    
                                    <!-- </p>
                                    <p>For information about how to contact us, please visit our <a href="contact-us.html">contact page</a>. -->
                                    <!-- </p> -->
                                    <div class="document__signature">
                                    <img src="<?php   if(isset($redux_demo['terms-author-signature']['url'])){
                                        echo $redux_demo['terms-author-signature']['url'];
                                       }else{
                                           echo "Signature is not found";
                                       } ?>" />
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