<?php
if (!class_exists('atbs_block_posts_main_col_4')) {
    class atbs_block_posts_main_col_4 {
        static $pageInfo = 0;
        public function render( $page_info ) {
            $block_str = '';
            $moduleID = uniqid('atbs_block_posts_main_col_4-');
            $moduleConfigs = array();
            $moduleData = array();
            self::$pageInfo = $page_info;
            //get config
            $moduleConfigs = ATBS_Composer_Global_Options::composer_get_configured_options($page_info);
            $moduleConfigs['limit'] = 4;
            if ($moduleConfigs['custom_class'] != '') {
                $moduleCustomClass = $moduleConfigs['custom_class'].' ';
            } else {
                $moduleCustomClass = '';
            }
            $the_query = ATBS_Get_Query::atbs_query($moduleConfigs); //get query

            // Margin
            $blockMarginTopClass = ATBS_Core::bk_get_module_custom_spacing($page_info);
            if ( $the_query->have_posts() ) :
                $block_str .= '<div id="'.$moduleID.'" class="atbs-keylin-block atbs-keylin-block--fullwidth atbs-keylin-block-custom-margin atbs-keylin-post-block-main-col-4 '.$moduleCustomClass.' '.$blockMarginTopClass.'">';
                $block_str .= ATBS_Core::bk_render_block_heading($page_info,'sidebar');
                $block_str .= '<div class="atbs-keylin-block__inner">';
                $block_str .= $this->render_modules($the_query);              //render modules
                $block_str .= '</div><!-- .atbs-keylin-block__inner -->';
                $block_str .= '</div><!-- .atbs-keylin-block -->';
            endif;
            unset($moduleConfigs); unset($the_query);     //free
            wp_reset_postdata();
            return $block_str;
    	}
        public function render_modules ($the_query){
            $postSource = get_post_meta( self::$pageInfo['page_id'], self::$pageInfo['block_prefix'].'_post_source', true );
            $postIcon = get_post_meta( self::$pageInfo['page_id'], self::$pageInfo['block_prefix'].'_post_icon', true );
            $iconPosition = 'top-right';
            $currentPost = 0;
            $page_info = self::$pageInfo;
            $postIconDetach = 0;
            $postIconAttr = array();
            $postIconAttr['postIconClass'] = '';
            $postIconAttr['iconType'] = '';

            if ($postIcon == 'disable') {
                $postIconDetach = 1;
            } else {
                $postIconDetach = 0;
            }

            $catStyle = 3;
            $cat_Class = ATBS_Core::bk_get_cat_class($catStyle);
            $postVerticalHTML = new ATBS_Module_Post_Vertical_3;
            $postVerticalAttr = array (
                'cat'                          => $catStyle,
                'catClass'                     => $cat_Class.' cat-color-gray cat-line-after',
                'additionalClass'              => 'post--vertical-reverse post--vertical-small post--vertical-small-style-3 post-thumb-height-210 has-readmore',
                'additionalThumbClass'         => 'atbs-thumb-object-fit',
                'thumbSize'                    => 'atbs-s-16_9',
                'typescale'                    => 'f-22 font-semibold margin-bottom-10 line-limit-child line-limit-3',
//                'except_length'                => 12,
                'additionalExcerptClass'       => 'line-limit line-limit-3',
                'readmore'                     => 1,
                'additionalReadmoreClass'      => 'post__readmore--style-1',
                'DarkMode'                     => 1,
                'postIcon'                     => $postIconAttr
            );

            $postOverlayHTML = new ATBS_Module_Post_Overlay_2;
            $postOverlayAttr = array (
                'cat'                          => $catStyle,
                'catClass'                     => $cat_Class.' cat-line-after',
                'additionalClass'              => 'post--overlay-bottom post--overlay-floorfade post--overlay-height-470 post--overlay-huge post--overlay-huge-style-3 entry-author-horizontal-middle',
                'additionalThumbClass'         => 'post__thumb--overlay atbs-thumb-object-fit',
                'thumbSize'                    => 'atbs-m-4_3',
                'additionalTextClass'          => 'inverse-text',
                'typescale'                    => 'f-24 font-bold margin-bottom-15 line-limit-child line-limit-3',
                'meta'                         => array('author_has_time'),
                'postIcon'                     => $postIconAttr
            );

            $postHorizontalHTML = new ATBS_Module_Post_Horizontal_1;
            $postHorizontalAttr = array (
                'additionalClass'   =>  'post--horizontal-tiny post--horizontal-tiny-style-1',
                'thumbSize'         =>  'atbs-xxs-1_1',
                'additionalThumbClass'  => 'atbs-thumb-object-fit',
                'DarkMode'          => 1,
                'meta'              =>  array('date_without_icon'),
                'typescale'         =>  'f-16 font-semibold line-limit-child line-limit-3',
            );

            $render_modules = '';
            $currentPost = '';
            $maxPost = $the_query->post_count;

            while ( $the_query->have_posts() ): $the_query->the_post();
                $currentPost = $the_query->current_post;

                if ($currentPost == 0):
                    $render_modules .= '<div class="section-1 flexbox-wrap flex-space-40">';
                    $render_modules .= '<div class="col-left">';

                    $postVerticalAttr['postID'] = get_the_ID();
                    if ($postIconDetach != 1) {
                        $addClass = ''; // overlay-item--sm-p
                        if ($postSource != 'all') {
                            $postIconAttr['iconType'] = $postSource;
                        } else {
                            $postIconAttr['iconType']   = ATBS_Core::bk_post_format_detect(get_the_ID());
                        }
                        $postIconAttr['postIconClass']  = ATBS_Core::get_post_icon_class($postIconAttr['iconType'], 'small', $iconPosition, $addClass);
                        $postVerticalAttr['postIcon']   = $postIconAttr;
                    }
                    $render_modules .= $postVerticalHTML->render($postVerticalAttr);
                    $render_modules .= '</div><!-- .col-left -->';

                elseif ($currentPost == 1):
                    $render_modules .= '<div class="col-right">';
                    $postOverlayAttr['postID'] = get_the_ID();
                    if ($postIconDetach != 1) {
                        $addClass = ''; // overlay-item--sm-p
                        if ($postSource != 'all') {
                            $postIconAttr['iconType'] = $postSource;
                        } else {
                            $postIconAttr['iconType']   = ATBS_Core::bk_post_format_detect(get_the_ID());
                        }
                        $postIconAttr['postIconClass']  = ATBS_Core::get_post_icon_class($postIconAttr['iconType'], '', $iconPosition, $addClass);
                        $postOverlayAttr['postIcon']   = $postIconAttr;
                    }
                    $render_modules .= $postOverlayHTML->render($postOverlayAttr);
                    $render_modules .= '</div><!-- .col-right -->';
                    $render_modules .= '</div><!-- .section-1 -->';

                elseif ($currentPost > 1):
                    if ($currentPost == 2):
                        $render_modules .= '<div class="section-2">';
                        $render_modules .= '<div class="posts-list flexbox-wrap flexbox-wrap-2i flex-space-30 posts-grid-style-13">';
                    endif;
                    $postHorizontalAttr['postID'] = get_the_ID();
                    $render_modules .= '<div class="list-item">';
                    $render_modules .= $postHorizontalHTML->render($postHorizontalAttr);
                    $render_modules .= '</div><!-- .list-item -->';
                endif;
            endwhile;
             if ($currentPost == 0):
                $render_modules .= '</div><!-- .section-1 -->';
            elseif ($currentPost > 1):
                $render_modules .= '</div><!-- .posts-list -->';
                $render_modules .= '</div><!-- .section-2 -->';
            endif;
            return $render_modules;
        }
    }
}
