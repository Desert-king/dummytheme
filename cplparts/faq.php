<?php
/*
Template Name: FAQ-page
*/
?>

<?php get_header(); ?>
            <!-- site__header / end --><!-- site__body -->
            <div class="site__body">
                <div class="block-space block-space--layout--spaceship-ledge-height"></div>
                <div class="block faq">
                    <div class="container container--max--xl">
                        <div class="faq__header">
                           <h1 class="faq__header-title">
                              <?php  global $redux_demo; // Same as your opt_name
                                 if(!empty($redux_demo['faq-page-title'])){
                                    echo $redux_demo['faq-page-title'];
                                 }else{
                                   echo "No page title is not found";
                                 }
                              ?>
                          </h1>
                        </div>
                        <div class="faq__section">
                            <h3 class="faq__section-title">
                            <?php  global $redux_demo; // Same as your opt_name
                                 if(!empty($redux_demo['faq-section-one-title'])){
                                    echo $redux_demo['faq-section-one-title'];
                                 }else{
                                   echo "First section title is not found";
                                 } 
                            ?>
                            </h3>
                            <div class="faq__section-body">
                            <?php 
                                // global $redux_demo;
                                // $repeaters = $redux_demo['new-faq-first-section-fields'];
                                if(!empty($redux_demo['new-faq-first-section-title']) && isset($redux_demo['new-faq-first-section-title']) && !empty($redux_demo['new-faq-first-section-title']) && isset($redux_demo['new-faq-first-section-title'])){
                                //print_r($repeaters);
                                $first_section_titles= $redux_demo['new-faq-first-section-title'];
                                $first_section_contents = $redux_demo['new-faq-first-section-title'];
                                // print_r($photoes[1]['url']);
                                // print_r($names[1]);
                                ?>
                               
                                <?php
                                   $first_content_count = count($first_section_titles);
                                //    var_export($photoes);
                                    $x = 0;
                                    while($x < $first_content_count) {
                                    // foreach ($names as $name) {
                                ?>
                                <div class="faq__question">
                                    <h5 class="faq__question-title"><?php 
                                    // if(!empty(($first_section_titles)[$x])  &&  isset(($first_section_titles)[$x])){
                                    //     echo($first_section_titles)[$x];
                                    //  }else{
                                    //      echo "Question is not found";
                                    //  }
                                    ?>
                                    <?php echo($first_section_titles)[$x]; ?>
                                    </h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                            <?php 
                                            // if(!empty(($first_section_contents)[$x])  &&  isset(($first_section_titles)[$x])){
                                            //     echo($first_section_contents)[$x];
                                            //  }else{
                                            //     echo "Answer is not found";
                                            // }
                                            ?>
                                            <?php echo($first_section_contents)[$x]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        // }
                                    $x++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="faq__section">
                            <h3 class="faq__section-title">
                            <?php  global $redux_demo; // Same as your opt_name
                                 if(!empty($redux_demo['faq-section-two-title'])){
                                    echo $redux_demo['faq-section-two-title'];
                                 }else{
                                   echo "Second section title is not found";
                                 } 
                            ?>
                            </h3>
                            <div class="faq__section-body">
                            <?php 
                                // global $redux_demo;
                                // $repeaters = $redux_demo['new-faq-second-section-fields'];
                                if(!empty($redux_demo['new-faq-second-section-title']) && isset($redux_demo['new-faq-second-section-title']) && !empty($redux_demo['new-faq-second-section-content']) && isset($redux_demo['new-faq-second-section-content'])){
                                //print_r($repeaters);
                                $second_section_titles= $redux_demo['new-faq-second-section-title'];
                                $second_section_contents = $redux_demo['new-faq-second-section-content'];
                                // print_r($photoes[1]['url']);
                                // print_r($names[1]);
                                ?>
                               
                                <?php
                                   $second_content_count = count($second_section_titles);
                                //    var_export($photoes);
                                    $x = 0;
                                    while($x < $second_content_count) {
                                    // foreach ($names as $name) {
                                ?>
                                <div class="faq__question">
                                    <h5 class="faq__question-title"><?php
                                    // if(!empty(($second_section_titles)[$x])  &&  isset(($second_section_titles)[$x])){
                                    //    echo($second_section_titles)[$x];
                                    // }else{
                                    //     echo "Question is not found";
                                    // }
                                    ?>
                                     <?php echo($second_section_titles)[$x]; ?>
                                     </h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                            <?php 
                                            // if(!empty(($second_section_contents)[$x])  &&  isset(($second_section_titles)[$x])){
                                            //  echo($second_section_contents)[$x];
                                            // }else{
                                            //     echo "Answer is not found";
                                            // }
                                            ?>
                                             <?php echo($second_section_contents)[$x]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        // }
                                    $x++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="faq__section">
                            <h3 class="faq__section-title">
                            <?php  global $redux_demo; // Same as your opt_name
                                 if(!empty($redux_demo['faq-section-three-title'])){
                                    echo $redux_demo['faq-section-three-title'];
                                 }else{
                                   echo "Third section title is not found";
                                 } 
                            ?>
                            </h3>
                            <div class="faq__section-body">
                            <?php 
                                // global $redux_demo;
                                // $repeaters = $redux_demo['new-faq-third-section-fields'];
                                if(!empty($redux_demo['new-faq-third-section-title']) && isset($redux_demo['new-faq-third-section-title']) && !empty($redux_demo['new-faq-third-section-content']) && isset($redux_demo['new-faq-third-section-content'])){
                                //print_r($repeaters);
                                $third_section_titles= $redux_demo['new-faq-third-section-title'];
                                $third_section_contents = $redux_demo['new-faq-third-section-content'];
                                // print_r($photoes[1]['url']);
                                // print_r($names[1]);
                                ?>
                               
                                <?php
                                   $third_content_count = count($third_section_titles);
                                //    var_export($photoes);
                                   $x = 0;
                                    while($x < $third_content_count) {
                                    // foreach ($names as $name) {
                                ?>
                                <div class="faq__question">
                                    <h5 class="faq__question-title"><?php 
                                //    if(!empty(($third_section_titles)[$x])  &&  isset(($third_section_titles)[$x])){
                                //     echo($third_section_titles)[$x];
                                //    }else{
                                //     echo "Question is not found";
                                //    }
                                    
                                    ?>
                                    <?php echo($third_section_titles)[$x]; ?>
                                    </h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                            <?php 
                                            // if(!empty(($third_section_contents)[$x])  &&  isset(($third_section_titles)[$x])){
                                            //     echo($third_section_contents)[$x];
                                            //    }else{
                                            //     echo "Answer is not found";
                                            // }
                                            ?>
                                            <?php echo($third_section_contents)[$x]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        // }
                                    $x++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="faq__footer">
                            <div class="faq__footer-title">Still Have A Questions?</div>
                            <div class="faq__footer-subtitle">We will be happy to answer any questions you may have.</div>
                            <a href="<?php global $redux_demo;  if(!empty($redux_demo['contact-link'])){
                                               echo $redux_demo['contact-link'];
                                            } ?>" class="btn btn-primary">
                            Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end --><!-- site__footer -->
            <?php get_footer(); ?>
            