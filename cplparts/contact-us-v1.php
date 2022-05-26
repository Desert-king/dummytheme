<?php
/*
Template Name: Contact-page
*/
?>
<?php get_header(); ?>
            <!-- site__mobile-header / end --><!-- site__header -->
         
            <!-- site__header / end --><!-- site__body -->
            <div class="site__body">
                <div class="block-map block">
                    <div class="block-map__body">
                        <iframe src="https://www.google.com/maps?q=<?php echo rawurlencode(implode(",",  Redux::getOption( 'redux_demo', 'cpl-contact-map', '' ))); ?>&t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <?php echo implode(",",  Redux::getOption( 'redux_demo', 'cpl-contact-map', '' )) ; ?>
                    </div>
                    <!-- ################## -->
                    <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=firoz%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google html code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->
                    <!-- ################## -->
                </div>
                <!-- <div class="block-header block-header--has-breadcrumb block-header--has-title">
                    <div class="container">
                        <div class="block-header__body">
                            <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                                <ol class="breadcrumb__list">
                                    <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                                    <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a href="index.html" class="breadcrumb__item-link">Home</a></li>
                                    <li class="breadcrumb__item breadcrumb__item--parent"><a href="#" class="breadcrumb__item-link">Breadcrumb</a></li>
                                    <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">Current Page</span></li>
                                    <li class="breadcrumb__title-safe-area" role="presentation"></li>
                                </ol>
                            </nav>
                            <h1 class="block-header__title">Contact Us</h1>
                        </div>
                    </div>
                </div> -->
                <?php
                    /**
                     * woocommerce_before_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */
                    do_action( 'woocommerce_before_main_content' );
                ?>
                <div class="block">
                    <div class="container container--max--lg cpl-contact-page">
                        <div class="card">
                            <div class="card-body card-body--padding--2">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                        <div class="mr-1">
                                            <h4 class="contact-us__header card-title">Our Address</h4>
                                            <div class="contact-us__address">
                                               <?php
                                               global $redux_demo;

                                               the_content();

                                            //    echo  $redux_demo['cpl-editor-text'];
                                               ?>
                                                <!-- <p>
                                                    715 Fake Ave, Apt. 34, New York, NY 10021 USA<br />
                                                    Email: red parts@example.com<br />
                                                    Phone Number: +1 754 000-00-00
                                                </p>
                                                <p>
                                                    <strong>Opening Hours</strong><br />
                                                    Monday to Friday: 8am-8pm<br />
                                                    Saturday: 8am-6pm<br />
                                                    Sunday: 10am-4pm
                                                </p>
                                                <p>
                                                    <strong>Comment</strong><br />
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- <div class="ml-1"> -->
                                            <h4 class="contact-us__header card-title">Leave us a Message</h4>
                                            <!-- <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6"><label for="form-name">Your Name</label> <input type="text" id="form-name" class="form-control" placeholder="Your Name" /></div>
                                                    <div class="form-group col-md-6"><label for="form-email">Email</label> <input type="email" id="form-email" class="form-control" placeholder="Email Address" /></div>
                                                </div>
                                                <div class="form-group"><label for="form-subject">Subject</label> <input type="text" id="form-subject" class="form-control" placeholder="Subject" /></div>
                                                <div class="form-group"><label for="form-message">Message</label> <textarea id="form-message" class="form-control" rows="4"></textarea></div>
                                                <button type="submit" class="btn btn-primary">Send Message</button>
                                            </form> -->
                                            <?php //echo do_shortcode('[contact-form-7 id="165" title="Contact form 1"]');?>
                                            <?php echo do_shortcode($redux_demo['cpl-editor-text']);?>
                                            
                                        <!-- </div> -->
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