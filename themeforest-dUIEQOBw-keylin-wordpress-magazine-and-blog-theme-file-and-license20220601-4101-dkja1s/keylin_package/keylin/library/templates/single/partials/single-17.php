<?php
/*
Template Name: Single Template 5
*/
?>
<?php
    global $post;
    $atbs_option        = ATBS_Core::bk_get_global_var('atbs_option');
    $currentPost        = $post;
    $postID             = get_the_ID();
    $catIDClass         = '';
    $bkEntryTeaser      = get_post_meta($postID,'bk_post_subtitle',true);

    $sidebar            =  ATBS_Single::bk_get_post_option($postID, 'bk_post_sb_select');
    $sidebarPos         =  ATBS_Single::bk_get_post_option($postID, 'bk_post_sb_position');
    $sidebarSticky      =  ATBS_Single::bk_get_post_option($postID, 'bk_post_sb_sticky');

    $reviewBoxPosition  = get_post_meta($postID,'bk_review_box_position',true);

    //Switch
    $bkAuthorSW         = ATBS_Single::bk_get_post_option($postID, 'bk-authorbox-sw');
    $bkPostNavSW        = ATBS_Single::bk_get_post_option($postID, 'bk-postnav-sw');
    $bkRelatedSW        = ATBS_Single::bk_get_post_option($postID, 'bk-related-sw');
    $bkSameCatSW        = ATBS_Single::bk_get_post_option($postID, 'bk-same-cat-sw');

    if (defined('KEYLIN_FUNCTIONS_PLUGIN_DIR')) {
        $reactionSW         = isset($atbs_option['bk-reaction-sw']) ? $atbs_option['bk-reaction-sw'] : 0;
        if ($reactionSW == null) {
            $reactionSW = 0;
        }
    }else {
        $reactionSW = 0;
    }

    // Single Infinity Scrolling Options
    $infinityScrolling  = $atbs_option['single-sections-infinity-scrolling'] ? $atbs_option['single-sections-infinity-scrolling'] : 0;
    if ($infinityScrolling != 0) {
        $infinity_PrevPost = get_previous_post();
        if (($infinity_PrevPost != '') || (is_array($infinity_PrevPost)) && (sizeof($infinity_PrevPost) != 0)) {
            $infinity_postIDtoLoad = $infinity_PrevPost->ID;
            $infinity_PermalinkToLoad = get_permalink($infinity_postIDtoLoad);
            $infinity_wrapDivClass = 'single-infinity-scroll';
        } else {
            $infinity_PrevPost = '';
            $infinity_PermalinkToLoad = '';
            $infinity_wrapDivClass = '';
        }
    }
    else {
        $infinity_PrevPost = '';
        $infinity_PermalinkToLoad = '';
        $infinity_wrapDivClass = '';
    }

    $currentPostID = get_the_ID();

    $sidebar_option = '';
    $sidebar        =  ATBS_Single::bk_get_post_option($postID, 'bk_post_sb_select');
    if (!is_active_sidebar($sidebar)) {
        $sidebar_option = 'disable';
        $classContainerNarrow = ' container--narrow';
        $classMainCol = 'atbs-keylin-main-col-no-sidebar';
    } else {
        $sidebar_option = 'enable';
        $classContainerNarrow = '';
        $classMainCol = 'atbs-keylin-main-col';
    }
    $scrollSinglePercentageProgress = $atbs_option['bk-scroll-percentage-progress'];
    $scrollSinglePercentageProgressClass = '';
    if(!empty($scrollSinglePercentageProgress) && ($scrollSinglePercentageProgress == 'style_2') ):
        $scrollSinglePercentageProgressClass = ' post-content-100-percent';
    endif;
    $thumbAttrXXL = array (
        'postID'        => $postID,
        'thumbSize'     => 'atbs-xxl',
    );
    $thumbAttr = array (
        'postID'        => $postID,
        'thumbSize'     => 'atbs-l-2_1',
    );
    $theBGLinkXXL   = ATBS_Core::bk_get_post_thumbnail_bg_link($thumbAttrXXL);
    $theBGLink      = ATBS_Core::bk_get_post_thumbnail_bg_link($thumbAttr);
?>
<div class="site-content single-entry <?php echo esc_attr($infinity_wrapDivClass);?>">
    <div class="atbs-keylin-block atbs-keylin-block--fullwidth single-entry-container <?php if($infinityScrolling != 0): echo 'single-infinity-container'; endif;?>">
        <div class="atbs-keylin-block single-entry-section-wrap single-style-17 single-17 single-entry--billboard atbs-keylin-block-<?php echo esc_attr($currentPostID);?> element-scroll-percent<?php echo esc_attr($scrollSinglePercentageProgressClass);?> <?php if($infinityScrolling != 0): echo 'single-infinity-inner'; endif;?>" data-url-to-load="<?php echo esc_url($infinity_PermalinkToLoad);?>" data-postid="<?php echo esc_attr($currentPostID);?>">
            <div class="atbs-keylin-block atbs-keylin-block--fullwidth atbs-keylin-block--contiguous single-billboard single-billboard--video">
                <?php if (ATBS_Core::bk_check_has_post_thumbnail($postID)) {?>
                <div class="single-billboard__background background-img blurred-more" style="background-image: url('<?php echo esc_url($theBGLink);?>');"></div>
                <?php }?>
                <div class="container">
                    <div class="row">
                        <div class="atbs-keylin-main-col">
        					<?php
                                echo ATBS_Single::bk_entry_media($postID);
                            ?>
        				</div>
                        <div class="atbs-keylin-sub-col">
        					<div class="block-heading block-heading--inverse">
        						<h2 class="block-heading__title"><?php esc_html_e('Watch next', 'keylin');?></h2>
        					</div>
                            <div class="billboard-video-posts-list__wrapper">
                                <ul class="list-unstyled list-space-md billboard-video-posts-list inverse-text">
                                    <?php
                                        $args = array(
                                            'post_type'      => 'post',
                                			'orderby'        => 'post_date',
                                            'post__not_in'   => array($postID),
                                			'ignore_sticky_posts' => 1,
                                            'post_status'    => 'publish',
                                			'posts_per_page' => 10,
                                        	'tax_query'      => array(
                                        		array(
                                        			'taxonomy' => 'post_format',
                                        			'field'    => 'slug',
                                        			'terms'    => array('post-format-video' ),
                                        		),
                                        	),
                                        );
                                        $postHorizontalHTML = new ATBS_Module_Post_Horizontal_1;
                                        $postHorizontalAttr = array (
                                            'additionalClass'       => 'post--horizontal-tiny',
                                            'thumbSize'             => 'atbs-xxs-16_9',
                                            'additionalThumbClass'  => 'atbs-thumb-object-fit',
                                            'typescale'             => 'typescale-0 line-limit-child line-limit-3',
                                        );
                                        $nextPosts = new WP_Query( $args );
                                        while ( $nextPosts->have_posts() ): $nextPosts->the_post();
                                            $postHorizontalAttr['postID'] = get_the_ID();
                                            echo '<li>';
                                            echo ATBS_Core::atbs_html_render($postHorizontalHTML->render($postHorizontalAttr));
                                            echo '</li>';
                                        endwhile;
                                        wp_reset_postdata();
                                    ?>
            					</ul>
                            </div>
        				</div>
                    </div><!-- .row -->
        		</div><!-- .container -->
        	</div><!-- .atbs-keylin-block -->
            <div class="atbs-keylin-block atbs-keylin-block--fullwidth single-entry-wrap">
                <div class="container<?php echo esc_attr($classContainerNarrow); ?>">
        			<?php if ($sidebar_option == 'enable') :?>
                    <div class="row">
                    <?php endif; ?>
                        <div class="<?php echo esc_attr($classMainCol); ?> <?php if ($sidebarPos == 'left') echo('has-left-sidebar');?>" role="main">
                            <article <?php post_class('atbs-keylin-block post--single');?>>
                                <div class="single-content">
                                    <header class="single-header">
                                        <?php
                                            echo '<div class="cat-time-group">';
                                            echo '<div class="cat-container cat-color-gray">';
                                            $catClass = 'entry-cat cat-theme';
                                            echo ATBS_Core::bk_get_post_cat_link($postID, $catClass, true);
                                            echo '</div>';
                                            echo '<div class="entry-meta">';
                                            echo ATBS_Core::bk_meta_cases('date_without_icon');
                                            echo '</div></div>';

                                            echo '<h1 class="entry-title text-uppercase">';
                                            echo get_the_title($postID);
                                            echo '</h1>';

                                            if ($bkEntryTeaser) {
                                                echo '<div class="entry-teaser">';
                                                echo esc_html($bkEntryTeaser);
                                                echo '</div>';
                                            }
                                        ?>
                        			</header>

                                    <div class="single-body entry-content typography-copy">
                                        <?php
                                            if($reviewBoxPosition == 'top') {
                                                echo ATBS_Single::bk_post_review_box_default($postID, $reviewBoxPosition);
                                            }
                                        ?>
                                        <?php the_content();?>
        							</div>
                                    <?php echo ATBS_Single::bk_post_pagination();?>
                                    <?php
                                        if ($reviewBoxPosition == 'default') {
                                            echo ATBS_Single::bk_post_review_box_default($postID);
                                        }
                                    ?>
                                    <?php get_template_part( 'library/templates/single/single-footer');?>
                                </div><!-- .single-content -->
                            </article><!-- .post-single -->
                            <?php
                                if (($reactionSW != '') && ($reactionSW != 0)) {
                                    get_template_part( 'library/templates/single/atbs-reaction');
                                }

                                if (($bkAuthorSW != '') && ($bkAuthorSW != 0)) {
                                    echo ATBS_Single::bk_author_box($currentPost->post_author);
                                }

                                if (($bkPostNavSW != '') && ($bkPostNavSW != 0)) {
                                    echo ATBS_Single::bk_post_navigation('');
                                }

                                $sectionsSorter = $atbs_option['single-sections-sorter']['enabled'];

                                if ($sectionsSorter): foreach ($sectionsSorter as $key=>$value) {
                                    switch($key) {
                                        case 'related':
                                            if (($bkRelatedSW != '') && ($bkRelatedSW != 0)) {
                                                echo ATBS_Single::bk_related_post($currentPost);
                                            }
                                            break;

                                        case 'comment':
                                            comments_template();
                                        break;

                                        case 'same-cat':
                                            if (($bkSameCatSW != '') && ($bkSameCatSW != 0)) {
                                                echo ATBS_Single::bk_same_category_posts($currentPost);
                                            }
                                        break;
                                    }
                                }
                                endif;
                            ?>
                        </div><!-- .atbs-keylin-main-col -->
                        <?php if ($sidebar_option == 'enable') : ?>
                        <div class="atbs-keylin-sub-col sidebar <?php if ($sidebarSticky != 0) echo 'js-sticky-sidebar';?>" role="complementary">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </div><!-- .atbs-keylin-sub-col -->
                    </div> <!-- .row -->
                    <?php endif; ?>
        		</div><!-- .container -->
        	</div><!-- .atbs-keylin-block -->
        </div> <!-- .single-entry-section-wrap -->
    </div> <!-- .single-entry-container -->
    <?php if (($infinity_wrapDivClass != '') && ($infinityScrolling != 0)): ?>
        <div class="infinity-single-trigger"></div>
    <?php endif;?>
</div><!-- .site-content -->
