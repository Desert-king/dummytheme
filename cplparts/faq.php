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
                                 echo $redux_demo['faq-page-title']; 
                              ?>
                          </h1>
                        </div>
                        <div class="faq__section">
                            <h3 class="faq__section-title">
                            <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['faq-section-one-title']; 
                            ?>
                            </h3>
                            <div class="faq__section-body">
                            <?php 
                                global $redux_demo;
                                $repeaters = $redux_demo['new-faq-first-section-fields'];
                                //print_r($repeaters);
                                $first_section_titles= $redux_demo['new-faq-first-section-title'];
                                $first_section_contents = $redux_demo['new-faq-first-section-content'];
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
                                    if(isset(($first_section_titles)[$x])){
                                        echo($first_section_titles)[$x];
                                     }
                                    ?></h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                            <?php 
                                            if(isset(($first_section_contents)[$x])){
                                                echo($first_section_contents)[$x];
                                             }
                                            ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        // }
                                    $x++;
                                    }
                                ?>
                                <!-- <div class="faq__question">
                                    <h5 class="faq__question-title">Do you ship internationally?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq__question">
                                    <h5 class="faq__question-title">How might I obtain an estimated date of delivery?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq__question">
                                    <h5 class="faq__question-title">Can I split my order to ship to different locations?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="faq__section">
                            <h3 class="faq__section-title">
                            <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['faq-section-two-title']; 
                            ?>
                            </h3>
                            <div class="faq__section-body">
                            <?php 
                                global $redux_demo;
                                $repeaters = $redux_demo['new-faq-second-section-fields'];
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
                                    if(isset(($second_section_titles)[$x])){
                                       echo($second_section_titles)[$x];
                                    }
                                    ?></h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                            <?php 
                                            if(isset(($second_section_contents)[$x])){
                                             echo($second_section_contents)[$x];
                                            }
                                            ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        // }
                                    $x++;
                                    }
                                ?>
                                <!-- <div class="faq__question">
                                    <h5 class="faq__question-title">What payments methods are available?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq__question">
                                    <h5 class="faq__question-title">Can I split my payment?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="faq__section">
                            <h3 class="faq__section-title">
                            <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['faq-section-three-title']; 
                            ?>
                            </h3>
                            <div class="faq__section-body">
                            <?php 
                                global $redux_demo;
                                $repeaters = $redux_demo['new-faq-third-section-fields'];
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
                                   if(isset(($third_section_titles)[$x])){
                                    echo($third_section_titles)[$x];
                                   }
                                    ?></h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                            <?php 
                                            if(isset(($third_section_contents)[$x])){
                                                echo($third_section_contents)[$x];
                                               }else{
                                                   echo "data is not found";
                                               }
                                            ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        // }
                                    $x++;
                                    }
                                ?>
                                <!-- <div class="faq__question">
                                    <h5 class="faq__question-title">How do I return or exchange an item?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq__question">
                                    <h5 class="faq__question-title">How do I cancel an order?</h5>
                                    <div class="faq__question-answer">
                                        <div class="typography">
                                            <p>
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="faq__footer">
                            <div class="faq__footer-title">Still Have A Questions?</div>
                            <div class="faq__footer-subtitle">We will be happy to answer any questions you may have.</div>
                            <a href="<?php global $redux_demo; echo $redux_demo['contact-link'];?>" class="btn btn-primary">
                            Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end --><!-- site__footer -->
            <?php get_footer(); ?>