<form role="search" method="get" id="searchform" class="not-found__search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <?php _x( 'Search for:', 'label' ); ?></label> -->
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="not-found__search-input form-control" placeholder="Search Query..."/>
        <input type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
        
    </div>
</form>
