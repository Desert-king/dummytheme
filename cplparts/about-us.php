<?php
/*
Template Name: About-us
*/
?>
<?php get_header(); ?>
            <!-- site__header / end --><!-- site__body -->
            <div class="site__body">
                <div class="about">
                    <div class="about__body">
                        <div class="about__image">
                            
                            <div class="about__image-bg" style="background-image: url('<?php  global $redux_demo; // Same as your opt_name
                        echo $redux_demo['about-image']['url'];?>')">
                        </div>
                            <div class="decor about__image-decor decor--type--bottom">
                                <div class="decor__body">
                                    <div class="decor__start"></div>
                                    <div class="decor__end"></div>
                                    <div class="decor__center"></div>
                                </div>
                            </div>
                        </div>
                        <div class="about__card">
                            <div class="about__card-title">
                              <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['about-article-title'];
                              ?>
                           </div>
                            <div class="about__card-text">
                              <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['about-article-content'];
                              ?>
                            </div>
                            <div class="about__card-author">
                            <?php  global $redux_demo; // Same as your opt_name
                                 echo $redux_demo['about-content-author'];
                              ?>
                              </div>
                            <div class="about__card-signature"><img src="<?php  global $redux_demo; // Same as your opt_name
                        echo $redux_demo['about-content-author-sign']['url'];?>" /></div>
                        </div>
                        <div class="about__indicators">
                            <div class="about__indicators-body">
                            <?php 
                                global $redux_demo;
                                // $repeaters = $redux_demo['counter-fields'];
                                //print_r($repeaters);
                                $numbers= $redux_demo['new-counter-number'];
                                $titles = $redux_demo['new-counter-title'];
                                // print_r($photoes[1]['url']);
                                // print_r($names[1]);
                                ?>
                               
                                <?php
                                   $counter_count = count($numbers);
                                //    var_export($photoes);
                                    $x = 0;
                                    while($x < $counter_count) {
                                    // foreach ($names as $name) {
                                        ?>
                                        <div class="about__indicators-item">
                                            <div class="about__indicators-item-value"><?php echo($numbers)[$x]; ?></div>
                                            <div class="about__indicators-item-title"><?php echo($titles)[$x]; ?></div>
                                        </div>
                                        <?php
                                        // }
                                    $x++;
                                    }
                                ?> 
                                        
                                <!-- <div class="about__indicators-item">
                                    <div class="about__indicators-item-value">350</div>
                                    <div class="about__indicators-item-title">Stores around the world</div>
                                </div>
                                <div class="about__indicators-item">
                                    <div class="about__indicators-item-value">80 000</div>
                                    <div class="about__indicators-item-title">Original auto parts</div>
                                </div>
                                <div class="about__indicators-item">
                                    <div class="about__indicators-item-value">5 000</div>
                                    <div class="about__indicators-item-title">Satisfied customers</div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-xl"></div>
                <div class="block block-teammates">
                    <div class="container container--max--xl">
                        <div class="block-teammates__title">
                        <?php 
                        global $redux_demo; // Same as your opt_name
                        echo $redux_demo['about-title-one'];
                       
                        ?>
                        </div>
                        <div class="block-teammates__subtitle">
                        <?php 
                        global $redux_demo; // Same as your opt_name
                        echo $redux_demo['about-sub-title-one'];
                        ?>
                        </div>
                             <?php 
                                global $redux_demo;
                                $repeaters = $redux_demo['new-repeater-field-id'];
                                //print_r($repeaters);
                                $photoes = $redux_demo['new-image_field'];
                                $names = $redux_demo['new-user_name'];
                                $designations = $redux_demo['new-designation'];
                                // print_r($photoes[1]['url']);
                                // print_r($names[1]);
                                ?>
                                <div class="block-teammates__list">
                       
                                <div class="owl-carousel">
                                <?php
                                   $count_teammate = count($names);
                                //    var_export($photoes);
                                //    var_export($names);
                                //    var_export($designations);
                                    $x = 0;
                                    while($x < $count_teammate) {
                                    // foreach ($names as $name) {
                                        ?>
                                        <div class="block-teammates__item teammate">
                                            <div class="teammate__avatar"><img src="<?php echo $photoes[$x]['url'];?>" alt="" /></div>
                                            <div class="teammate__info">
                                                <div class="teammate__name"><?php echo($names)[$x]; ?></div>
                                                <div class="teammate__position"><?php echo($designations)[$x];  ?></div>
                                            </div>
                                        </div>
                                        <?php
                                    // }
                                    $x++;
                                    }
                                ?> 
                                </div>
                            </div>

                              
                                  
                        <div class="block-teammates__list">
                       
                            <div class="owl-carousel">
                                
                                <!-- <div class="block-teammates__item teammate">
                                    <div class="teammate__avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teammates/teammate1-206x206.jpg" alt="" /></div>
                                    <div class="teammate__info">
                                        <div class="teammate__name">Michael Russo</div>
                                        <div class="teammate__position">Chief Executive Officer</div>
                                    </div>
                                </div> -->
                                <!-- <div class="block-teammates__item teammate">
                                    <div class="teammate__avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teammates/teammate2-206x206.jpg" alt="" /></div>
                                    <div class="teammate__info">
                                        <div class="teammate__name">Samantha Smith</div>
                                        <div class="teammate__position">Account Manager</div>
                                    </div>
                                </div>
                                <div class="block-teammates__item teammate">
                                    <div class="teammate__avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teammates/teammate3-206x206.jpg" alt="" /></div>
                                    <div class="teammate__info">
                                        <div class="teammate__name">Anthony Harris</div>
                                        <div class="teammate__position">Finance Director</div>
                                    </div>
                                </div>
                                <div class="block-teammates__item teammate">
                                    <div class="teammate__avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teammates/teammate4-206x206.jpg" alt="" /></div>
                                    <div class="teammate__info">
                                        <div class="teammate__name">Katherine Miller</div>
                                        <div class="teammate__position">Marketing Officer</div>
                                    </div>
                                </div>
                                <div class="block-teammates__item teammate">
                                    <div class="teammate__avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teammates/teammate5-206x206.jpg" alt="" /></div>
                                    <div class="teammate__info">
                                        <div class="teammate__name">Boris Gilmore</div>
                                        <div class="teammate__position">Engineer</div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="block-space block-space--layout--divider-xl"></div>
                <div class="block block-reviews">
                    <div class="container">
                        <div class="block-reviews__title">
                        <?php 
                        global $redux_demo; // Same as your opt_name
                        echo $redux_demo['about-title-two'];
                        ?>
                        </div>
                        <div class="block-reviews__subtitle">
                        <?php 
                        global $redux_demo; // Same as your opt_name
                        echo $redux_demo['about-sub-title-two'];
                        ?>
                        </div>
                        <?php 
                                   global $redux_demo;

                               
                                $repeaters = $redux_demo['new-testimonial-fields'];

                                 $test_img= $redux_demo['new-user-image'];
                                 $test_feedback = $redux_demo['new-user-feedback'];
                                 $test_name = $redux_demo['new-user-name'];
                                // print_r($test_img[1]['url']);
                                // print_r($names[1]);
                                ?>
                        <div class="block-reviews__list">
                            <div class="owl-carousel">
                            <?php
                                   $count = count($test_name);
                                    $x = 0;
                                    while($x < $count) {
                                    // foreach ($names as $name) {
                                        ?>
                                <div class="block-reviews__item">
                                    <div class="block-reviews__item-avatar"><img src="<?php echo $test_img[$x]['url'] ?>" alt="" /></div>
                                    <div class="block-reviews__item-content">
                                        <div class="block-reviews__item-text">
                                        <?php echo $test_feedback[$x]; ?>
                                        </div>
                                        <div class="block-reviews__item-meta">
                                            <div class="block-reviews__item-rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-reviews__item-author"><?php echo $test_name[$x]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    // }
                                    $x++;
                                    }
                                ?> 
                                
                            </div>
                        </div>
                        <!-- <div class="block-reviews__list">
                            <div class="owl-carousel"> -->
                                <!-- <div class="block-reviews__item">
                                    <div class="block-reviews__item-avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/testimonial-1-190x190.jpg" alt="" /></div>
                                    <div class="block-reviews__item-content">
                                        <div class="block-reviews__item-text">
                                            This division is not obsolete but has changed. Natural philosophy has split into the various natural sciences, especially astronomy, and cosmology. Moral philosophy has birthed the social
                                            sciences, but still includes value theory.
                                        </div>
                                        <div class="block-reviews__item-meta">
                                            <div class="block-reviews__item-rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-reviews__item-author">Jessica Moore, CEO Meblya</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="block-reviews__item">
                                    <div class="block-reviews__item-avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/testimonial-2-190x190.jpg" alt="" /></div>
                                    <div class="block-reviews__item-content">
                                        <div class="block-reviews__item-text">
                                            Philosophical questions can be grouped into categories. These groupings allow philosophers. The groupings also make philosophy easier for students to approach.
                                        </div>
                                        <div class="block-reviews__item-meta">
                                            <div class="block-reviews__item-rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-reviews__item-author">Pete Bridges, Truck driver</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-reviews__item">
                                    <div class="block-reviews__item-avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/testimonial-3-190x190.jpg" alt="" /></div>
                                    <div class="block-reviews__item-content">
                                        <div class="block-reviews__item-text">
                                            The ideas conceived by a society have profound repercussions on what actions the society performs. Philosophy yields applications such as those in ethics – applied ethics in particular – and
                                            political philosophy.
                                        </div>
                                        <div class="block-reviews__item-meta">
                                            <div class="block-reviews__item-rating">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-reviews__item-author">Jeff Kowalski, CEO Stroyka</div>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div>
                        </div> -->
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end --><!-- site__footer -->
			<?php get_footer(); ?>