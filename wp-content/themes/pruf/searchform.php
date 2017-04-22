<div class="search-container">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
        <label class="screen-reader-text" for="s">Enter: </label>
        <input class="search-input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="поиск" />
        <button class="search-btn" type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>
